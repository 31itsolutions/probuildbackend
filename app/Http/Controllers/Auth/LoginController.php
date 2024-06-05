<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Vendor;

use App\Models\Customer;

use Auth;


class LoginController extends Controller
{
    
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    public function logout(Request $request)
    {
        auth('vendor')->logout();

        return redirect('/');
    }
    public function customerLogout(){

        $id = Auth::guard('customer')->id();

        $customer = Customer::find($id);
        $customer->active_count = 0;

        $customer->save();

        auth('customer')->logout();

        return redirect('/');
    }

    public function adminLogout(){

        Auth::logout();

        return redirect('/login');
    }


    //admin login


    public function login(Request $request)
    {   
        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->is_admin == 1) {
                return redirect()->intended('/admin/home');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
          
    }

    /////

     public function showVendorLoginForm()
    {
        
        $url = "vendor";

        $auth = Auth::guard('vendor');
        if ($auth->check()) {
            return redirect((route('vendor')));
        }
        else
        return view('auth.VendorLogin',['url' => $url]);
    }

    public function vendorLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        $find_active = Vendor::where('email' , '=', $request->email )->get();

        foreach($find_active as $find){

        if($find->account_status == "1"){

        if (Auth::guard('vendor')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/vendor-home');
        }
        
        return back()->withInput($request->only('email', 'remember'));

    }
    }
    return redirect()->back()->with('SuccessMsg', 'Your Not allowed to login until admin action');
    
}

     public function showCustomerLoginForm()
    {

      

        $auth = Auth::guard('customer');
        if ($auth->check()) {
            return redirect((route('customer')));
        }
        else

        return view('auth.customerLogin', ['url' => 'customer']);
    }

    public function customerLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            $id = Auth::guard('customer')->id();

            $customer = Customer::find($id);
            $customer->active_count = 1;

            $customer->save();

            return redirect()->intended('/customer-home');
        }
        return back()->withInput($request->only('email', 'remember'));
    }


}