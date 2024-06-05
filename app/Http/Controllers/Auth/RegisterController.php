<?php

namespace App\Http\Controllers\Auth;
use App\Models\Vendorplan;
use App\Models\Package;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Vendor;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:vendor');
        $this->middleware('guest:customer');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showVendorRegisterForm()
    {
        return view('auth.register', ['url' => 'vendor']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showCustomerRegisterForm()
    {
        return view('auth.register', ['url' => 'customer']);
    }

    /**
     * @param array $data
     *
     * @return mixed
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createVendor(Request $request)
    {
        $this->validator($request->all())->validate();
       $vendor =  Vendor::create([
            'name' => $request->name,
            'email' => $request->email,
            'lname' => $request->lname,
            'number' => $request->number,
            'account_status' => '1',
            'password' => Hash::make($request->password),
        ]);

        // $trail = Package::find(1);

        // $trail_validity = $trail->validity;

        // $date = Carbon::now();

        // $end_date = date("d-m-y", strtotime($trail_validity));


        $vendor = Vendor::latest('id')->first();

        $vendor_id = $vendor->id;

         $date = Carbon::now();

        //  $date = new DateTime('2010-12-11');
        //  $end_date = $date->modify('+1 month');
         $newDateTime = Carbon::now()->addMonth(1);


        DB::table('package_vendor')->insert([
            'package_id' => 1,
            'vendor_id' => $vendor_id,
            'starts_date'    =>$date , 
            'ends_date'    =>$newDateTime,
            'created_at'    =>$date ,
            'updated_at'    =>$date ,
            'Approval'    =>'1' ,

            ]);
    

        return redirect()->intended('login/vendor');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createCustomer(Request $request)
    {
        $this->validator($request->all())->validate();
        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'lname' => $request->lname,
            'number' => $request->number,
            'account_status' => '1',
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/customer');
    }
}