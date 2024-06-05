<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Business;
use App\Models\Add_image;
use App\Models\Sub_category;
use App\Models\Add_image_next;
use App\Mail\ContactMail;
use Mail;

use App\Models\Customer;

use App\Models\Analytic;

use App\Models\Visitor;

use App\Models\User;
use Illuminate\Support\Facades\Hash;


use App\Models\Vendor;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function welcome()
    {
        return redirect(route('admin.home'));
        $category = Category::get();
        $category1 = Category::get()->toArray();
        $subCategory1 = Sub_category::get()->toArray();
        $i=0;

        // print_r($subCategory1);die();
        // print_r(array_unique($category));
        $subCategory = Sub_category::get();
        // print_r($subCategory);die();
        foreach($category as $categoryEach){
            $categoryArray[$i]['data'] = $categoryEach->category;
            $sub = Sub_category::where('category_type',$categoryEach->id)->get()->toArray();
            $categoryArray[$i]['sub_category'] = $sub;
            $i++;
        }

        // print_r($categoryArray);die;

        // dd($category[0]['id']);

        $data['sub_cat'] = Sub_category::where('category_type',$category[0]['id'])->get()->toArray();
        foreach ($category as $key => $cat) {
            $count=0;
            foreach ($subCategory as $key => $subCat) {
                if ($cat->id == $subCat->category_type) {
                    $count++;
                }
            }
            $cat['sub_count'] = $count;
        }

        $data['business'] = Business::get()->toArray();
        $data['add_image'] = Add_image::get()->toArray();
        $data['add_image_next'] = Add_image_next::get()->toArray();
        $data['category'] = $category;
        $data['category1'] = $category1;
        $data['subCategory'] = $subCategory;
        $data['subCategory1'] = $subCategory1;
        $data['active_Category'] = $category[0]['id'];
        $data['all_subCategory'] = $categoryArray;

        // print_r($data['all_subCategory'] );die();


        return view('welcome',compact('data'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {

        $admin = User::find(1);

        $vendor_count = DB::table('vendors')->count();

        $customer_count = DB::table('customers')->count();

        $business_count = DB::table('businesses')->count();

        $tendor_count = DB::table('tendor_requests')->count();


        $premium_vendor = DB::table('vendors')
    ->join('package_vendor', 'package_vendor.vendor_id', '=', 'vendors.id')
    ->where('package_vendor.package_id', '=', 4)
    ->count();

        return view('adminHome', ['tendor_count'=>$tendor_count, 'premium_vendor'=>$premium_vendor, 'business_count'=>$business_count, 'vendor_count'=>$vendor_count,'customer_count'=>$customer_count,'admin'=>$admin]);
    }


    public function admin_profile(){

        $admin = User::find(1);

        return view('Admin.admin_profile.profile_detail', ['admin'=>$admin]);
    }
    public function update_profile(Request $request){

        $this->validate($request,[

            // 'name'=>'required',
            // 'email'=>'required',
            // 'password'=>'required',




           ]);


           if((User::find(1))==null){
            $user =New User;

           }
        else {
            $user =User::find(1);
           }

            if($request->hasFile('profile_image')){

                $profile_image = $request->file('profile_image')->getClientOriginalName();
                $request->file('profile_image')->move(public_path('upload_images/admin_profile'), $profile_image);

                }
                if($request->hasFile('profile_image')){
                $user->profile=$profile_image;
                }

              $user->name = $request->name;
              $user->email = $request->email;
              $user->password =  Hash::make($request->password);

              $user->save();
              return redirect()->back()->with('SuccessMsg','Profile Successfully Added' );

    }


    public function analytic(){

        $view = Analytic::latest()->paginate(5);

        // $check = Analytic::find(1);

        // $add_view = New Analytic;

        // if($check == null){


        //     $add_view->views = 1;

        //     $add_view->save();

        // }

        // Analytic::increment('views');
        $admin = User::find(1);

        $customer_count = Customer::where('active_count',1)->count();
        $vendor_count = Vendor::where('active_count',1)->count();
        // print_r($customer_count); die();

        $business_count = DB::table('businesses')->count();

        $tendor_count = DB::table('tendor_requests')->count();


        $premium_vendor = DB::table('vendors')
    ->join('package_vendor', 'package_vendor.vendor_id', '=', 'vendors.id')
    ->where('package_vendor.package_id', '=', 4)
    ->count();


        return view('Admin.user_analytics',compact('view'),['tendor_count'=>$tendor_count, 'premium_vendor'=>$premium_vendor, 'business_count'=>$business_count,'admin'=>$admin,'customer_count'=>$customer_count,'vendor_count'=>$vendor_count]);

    }

    public function Mail(Request $request,$id){

        $vendor = Vendor::find($id);



        $details=[
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message

        ];

    Mail::to($vendor->email)->send(New ContactMail($details));
    return back()->with('SuccessMsg','Message sent Successfully');

    }


}
