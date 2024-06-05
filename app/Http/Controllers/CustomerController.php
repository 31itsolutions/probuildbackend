<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use App\Models\Sub_category;
use App\Models\Business;
use App\Models\Vendor;

use App\Models\Tendor;

use App\Models\Tendor_request;
use App\Models\Category;

use App\Models\Review;

use App\Models\Request_call;

use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CustomerController extends Controller
{


    public function customer_home(){

        $id = Auth::guard('customer')->id();

        $customer = Customer::find($id);

        $category = Category::all();


        $tendor = DB::table('tendor_requests')->select('sub_categories.*','vendors.*','tendor_requests.*', 'tendor_requests.id as tendorId', 'tendor_requests.updated_at as tendorend')
        ->join('sub_categories','sub_categories.id','=','tendor_requests.subcategory_id')
        ->join('tendor_req_actions','tendor_req_actions.tendor_req_id','=','tendor_requests.id')
        ->join('vendors','vendors.id','=','tendor_req_actions.vendor_req_id')
        ->where('customer_id',$id)
        ->get();

        return view('Customer.customer_home',compact('category','tendor'),['customer' => $customer]);
    }



    public function sub_category_load($id)
    {
        $sub_category = Sub_category::where('category_type',$id)->get();
        return response()->json($sub_category);
    }

    public function customer_company($id)
    {

        $customer_id = Auth::guard('customer')->id();

        $customer = Customer::find($customer_id);

        $category = DB::table('sub_categories')->join('businesses','businesses.business_category','=','sub_categories.id')->select('sub_category')
        ->where('businesses.id',$id)->get();

        // $sub_category = $category[0];
        // print_r($category[0]['sub_category']); die();


        $reviewOne = DB::table('reviews')->join('businesses','businesses.id','=','reviews.business_id')
                                         ->join('customers','customers.id','=','reviews.customer_id')
                                         ->where('businesses.id',$id)->take(2)->get();


        $reviewTwo = DB::table('reviews')->join('businesses','businesses.id','=','reviews.business_id')
        ->join('customers','customers.id','=','reviews.customer_id')
        ->where('businesses.id',$id)->skip(2)->take(1000)->get();

        $business = Business::find($id);

        $vendor_id = Vendor::find($business->vendor_id);


        $data = DB::table('businesses')
        ->join('vendors','vendors.id','=','businesses.vendor_id')
        ->join('sub_categories','sub_categories.id','=','businesses.business_category')
        ->join('products','products.business_id','=','businesses.id')
        ->where('businesses.id',$id)->get();

        $gallery_image = DB::table('businesses')
        ->join('galllery_images','galllery_images.business_id','=','businesses.id')
        ->where('businesses.id',$id)->get();




        // ->join('profiles','profiles.id','=','users.id')


        return view('Customer.company_profile' , compact('data','gallery_image','reviewOne', 'reviewTwo'),['category'=>$category, 'customer'=>$customer, 'business'=>$business,'vendor_id'=>$vendor_id]);
    }
    

    public function addImage(Request $request,$id){

        $this->validate($request,[

            'profile_image'=>'required',

           ]);

               $profile_image = $request->file('cu_profile')->getClientOriginalName();

               $request->file('cu_profile')->move(public_path('upload_images/customer_profile'), $profile_image);


              $customer =Customer::find($id);

              $customer->profile_image=$profile_image;

              $customer->save();
              return redirect()->back()->with('SuccessMsg','Profile Photo Updated Successfully' );



    }


     public function customer_profile_edit($id){

        $customer = Customer::find($id);
        return view('Customer.Edit_customer_profile',['customer' => $customer]);

    }

    public function update_profile_info(Request $request,$id){


            $this->validate($request,[

                'fname'=>'required',
                'lname'=>'required',
                'email'=>'required',
                'mobile'=>'required',
                'area'=>'required',
                'city'=>'required',
                'province'=>'required',
                'country'=>'required',

               ]);

               
                  $customer =Customer::find($id);

            if($request->hasFile('profile_image')){

              $profile_image = $request->file('profile_image')->getClientOriginalName();
              $request->file('profile_image')->storeAs('public/customer_profile/',$profile_image);
            //   $request->file('profile_image')->move(public_path('upload_images/customer_profile'), $profile_image);


              }
              if($request->hasFile('profile_image')){

              $customer->profile_image=$profile_image;
            }


                  $customer->name = $request->fname;
                  $customer->lname = $request->lname;
                  $customer->email = $request->email;
                  $customer->number = $request->mobile;
                  $customer->address_1 = $request->area;
                  $customer->address_2 = $request->city;
                  $customer->city = $request->province;
                  $customer->state = $request->country;

                  $customer->save();
                  return redirect(route('customer'))->with('SuccessMsg','Profile Successfully updated' );

    }


    public function wishlist(){

        $id = Auth::guard('customer')->id();

        $customer = Customer::find($id);

        return view('Customer.customer_wishlist',['customer' => $customer]);
    }

    public function tender(){

        $id = Auth::guard('customer')->id();

        $customer = Customer::find($id);

        return view('Customer.customer_tendor',['customer' => $customer]);
    }

    public function tender_req(Request $request, $id){


           $customer = Customer::find($id);

              $tendor =New Tendor_request;


              if($request->hasFile('sample_image')){

                $sample_image = $request->file('sample_image')->getClientOriginalName();
                $request->file('sample_image')->storeAs('public/tendor_sample_image/',$sample_image);
                //    $request->file('sample_image')->move(public_path('upload_images/tendor_sample_image'), $sample_image);


                }
                if($request->hasFile('sample_image')){

                $tendor->sample_image=$sample_image;
              }

              $tendor->tendor_title = $request->tendor_title;
              $tendor->tendor_description = $request->tendor_description;
              $tendor->category_id = $request->category;
              $tendor->subcategory_id = $request->subcategory;

              $customer->tendor_requests()->save($tendor);

              return redirect()->back()->with('SuccessMsg','Tendor Posted Successfully' );


    }
    

    public function get_sub_category(Request $request)
    {
      $id = $request->id;

      $data =  Sub_category::where('category_type',$id)->get();


      $view= view('Vendor.sub_category_load')->with(['sub_cat'=>$data])->render();
      // print_r($view);die();
        return response()->json(['html'=>$view,'code' => 'success']);

         // return view('Vendor.sub_category_load',compact('data'));
        // return response()->json($data);
    }
    public function subCategorys(Request $request)
    {
      # code...
      // print_r($request->id);die();
      $category = Category::get();
      $subcategory = Sub_category::get();
      $allSubCategory = Sub_category::where('id',$request->id)->get()->toArray();
      $data['arr'] = Business::where('business_category',$request->id)->get()->toArray();
      $business_location = Business::select('location')->get()->toArray();
      $business_location = array_column($business_location, 'location');
      $business_location = array_unique($business_location);
      // print_r($business_location);die();
      $data['category'] = $category;
      $data['subCategory'] = $subcategory;
      $data['allSubCategory'] = $allSubCategory;
      // $data['subBusiness'] = $subBusiness;
      $data['business_location'] = $business_location;

      return view('Vendor.searchList',compact('data'));

    }


    public function request_call($id){

       $customer_id = Auth::guard('customer')->id();

       $business = Business::find($id);

       $vendor = Vendor::find($business->vendor_id);

       $request_call =New Request_call;

       $request_call->business_call_id = $id;
       $request_call->vendor_call_id = $vendor->id;
       $request_call->customer_call_id = $customer_id;

       $request_call->save();
       return redirect()->back()->with('SuccessMsg','Request call sent succesfully' );

}


public function request_call_li(){

    $id = Auth::guard('customer')->id();

    $customer = Customer::find($id);


    // $tendor = DB::table('request_calls')->select('sub_categories.*','vendors.*','tendor_requests.*', 'tendor_requests.id as tendorId', 'tendor_requests.updated_at as tendorend')
    // ->join('sub_categories','sub_categories.id','=','request_calls.subcategory_id')
    // ->join('businesses','businesses.business_category','=','request_calls.business_call_id')
    // ->join('tendor_req_actions','tendor_req_actions.tendor_req_id','=','tendor_requests.id')
    // ->join('vendors','vendors.id','=','tendor_req_actions.vendor_req_id')
    // ->where('customer_id',$id)
    // ->get();


    $request_call_action = DB::table('request_calls')->select('businesses.*','sub_categories.*','vendors.*','request_call_actions.*','request_calls.*', 'request_call_actions.id as requestCallId', 'request_calls.id as tendorId', 'request_calls.updated_at as tendorend')
    ->join('businesses','businesses.business_category','=','request_calls.business_call_id')
    ->join('sub_categories','sub_categories.id','=','businesses.business_category')
    ->join('request_call_actions','request_call_actions.request_call_tendor_id','=','request_calls.id')
    ->join('vendors','vendors.id','=','request_call_actions.request_call_vendor_id')
    ->where('customer_call_id',$id)
   ->get();

    return view('Customer.request_call',['customer' => $customer],compact('request_call_action'));

}
}
