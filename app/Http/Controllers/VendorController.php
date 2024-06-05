<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Package;

use App\Models\Galllery_image;

use App\Models\Vendor;

use App\Models\Vendorplan;

use App\Models\Category;


use App\Models\Product;

use App\Models\Business;
use App\Models\Request_call_action;

use App\Models\Tendor;
use App\Models\Tendor_req_action;
use Illuminate\Support\Facades\DB;


use DateTime;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class VendorController extends Controller
{


    public function vendor_Home(Request $request){

 

        $id = Auth::guard('vendor')->id();
        $date = Carbon::now();

        $vendor = Vendor::find($id);

        $business = Business::where('vendor_id',$id)->get();

        // print_r($business); die();
        
            $current_date = Carbon::now();

            $package_vendor = DB::table('package_vendor')
            ->where('vendor_id',$id)
            ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();

             foreach ($package_vendor as $key => $value) {


                 $plan_id = $value->package_id; 

                $plan_detail = Package::find($plan_id);

                $end_date = $value->ends_date;         
  
        }
            

                  //check  business_listing
                  $business_listing = $plan_detail->bussiness_listing;
                  $vendor_bl = Business::where('vendor_id',$id)->count();
                 
                 
        //  }


                return view('Vendor.vendor_home', compact('business'),[ 'vendor' => $vendor,'vendor_bl'=>$vendor_bl,'business_listing'=> $business_listing,'end_date' =>$end_date, 'plan_detail' => $plan_detail]);


               
        

}


public function vendor_profile_edit(Request $request,$id){

 

    $id = Auth::guard('vendor')->id();
    $date = Carbon::now();

    $vendor = Vendor::find($id);

    $business = Business::where('vendor_id',$id)->get();

    // print_r($business); die();
    


        $current_date = Carbon::now();

        $package_vendor = DB::table('package_vendor')
        ->where('vendor_id',$id)
        ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();

         foreach ($package_vendor as $key => $value) {


             $plan_id = $value->package_id; 

            $plan_detail = Package::find($plan_id);

            $end_date = $value->ends_date;         

    }

            //   //check  business_listing
            //   $business_listing = $plan_detail->bussiness_listing;
            //   $vendor_bl = Business::where('vendor_id',$id)->count();
             
             
     


            return view('Vendor.vendor_profile_edit', compact('business'),[ 'vendor' => $vendor,'vendor_bl'=>$vendor_bl,'business_listing'=> $business_listing,'end_date' =>$end_date, 'plan_detail' => $plan_detail]);


           
    

}

   


    

    public function update_vendor_profile(Request $request,$id){


        // $this->validate($request,[
    
        //     'fname'=>'required',
        //     'lname'=>'required',
        //     'email'=>'required',
        //     'number'=>'required',
        //     'area'=>'required',
        //     'city'=>'required',
        //     'province'=>'required',
        //     'country'=>'required',
       
        //    ]);


        $vendor =Vendor::find($id);    
 
              if($request->hasFile('profile_image')){
              
              $profile_image = $request->file('profile_image')->getClientOriginalName();
              $request->file('profile_image')->storeAs('public/vendor_profile/',$profile_image);
            //   $request->file('profile_image')->move(public_path('upload_images/vendor_profile'), $profile_image);

          
              }

            //   print_r($profile_image); die();
      
                    if($request->hasFile('profile_image')){
                      $vendor->profile_image=$profile_image;
              }
          


              $vendor->name = $request->fname;
              $vendor->lname = $request->lname;
              $vendor->email = $request->email;
              $vendor->number = $request->number;
              $vendor->address_1 = $request->area;
              $vendor->address_2 = $request->city;
              $vendor->city = $request->province;
              $vendor->state = $request->country;
            
              $vendor->save();
              return redirect()->back()->with('SuccessMsg','Profile Successfully updated' );


    }

    public function vendor_company_profile($id){
        $auth_id = Auth::guard('vendor')->id();


        $date = Carbon::now();

        $vendor = Vendor::find($auth_id);
    
        $business = Business::where('vendor_id',$auth_id)->get();
    
        // print_r($business); die();
        
    
    
            $current_date = Carbon::now();


            $package_vendor = DB::table('package_vendor')
            ->where('vendor_id',$id)
            ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();

             foreach ($package_vendor as $key => $value) {


                $plan_id = $value->package_id; 

                $plan_detail = Package::find($plan_id);

                $end_date = $value->ends_date;         
  
        }
 
    
                  //check  business_listing
                  $business_listing = $plan_detail->bussiness_listing;
                  $vendor_bl = Business::where('vendor_id',$id)->count();
                 
                 
         


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

        $vendor= Vendor::find($auth_id);


        $data = DB::table('businesses')
        ->join('vendors','vendors.id','=','businesses.vendor_id')
        ->join('sub_categories','sub_categories.id','=','businesses.business_category')
        ->join('products','products.business_id','=','businesses.id')
        ->where('businesses.id',$id)->get();

        $gallery_image = DB::table('businesses')
        ->join('galllery_images','galllery_images.business_id','=','businesses.id')     
        ->where('businesses.id',$id)->get();


        
        // ->join('profiles','profiles.id','=','users.id')
        

        return view('Vendor.view_company_profile' , compact('data','gallery_image','reviewOne', 'reviewTwo'),['business_listing'=>$business_listing,'vendor_bl'=>$vendor_bl, 'category'=>$category,  'business'=>$business,'vendor'=>$vendor]);
  

    }



    public function vendor_package(){

        $vendor_id = Auth::guard('vendor')->id();
        $date = Carbon::now();

        $vendor = Vendor::find($vendor_id);
    
        $business = Business::where('vendor_id',$vendor_id)->get();
    
        // print_r($business); die();
        
    
    
        
            $current_date = Carbon::now();

            $package_vendor = DB::table('package_vendor')
            ->where('vendor_id',$vendor_id)
            ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();

             foreach ($package_vendor as $key => $value) {


                 $plan_id = $value->package_id; 

                $plan_detail = Package::find($plan_id);

                $end_date = $value->ends_date;         
  
        }
          
    
                  //check  business_listing
                  $business_listing = $plan_detail->bussiness_listing;
                  $vendor_bl = Business::where('vendor_id',$vendor_id)->count();
                 
                  
         

                  $package_detail = Package::where('package_type','Y')->take(30)->get();
    
        return view('Vendor.vendor_package_yearly',compact('package_detail'),['vendor' => $vendor,'vendor_bl' => $vendor_bl,'end_date'=>$end_date, 'business_listing' => $business_listing,'plan_detail'=>$plan_detail]);
    }

    public function vendor_package_monthly(){

        $vendor_id = Auth::guard('vendor')->id();
        $date = Carbon::now();

        $vendor = Vendor::find($vendor_id);
    
        $business = Business::where('vendor_id',$vendor_id)->get();
    
        // print_r($business); die();
        
    
    
            $current_date = Carbon::now();

            $package_vendor = DB::table('package_vendor')
            ->where('vendor_id',$vendor_id)
            ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();

             foreach ($package_vendor as $key => $value) {


                 $plan_id = $value->package_id; 

                $plan_detail = Package::find($plan_id);

                $end_date = $value->ends_date;         
  
        }
    
    
                  //check  business_listing
                  $business_listing = $plan_detail->bussiness_listing;
                  $vendor_bl = Business::where('vendor_id',$vendor_id)->count();
                 
                 
         

        $package_detail = Package::where('package_type','M')->skip(1)->take(30)->get();
    
        return view('Vendor.vendor_package_monthly',compact('package_detail'),['vendor' => $vendor,'vendor_bl' => $vendor_bl,'end_date'=>$end_date, 'business_listing' => $business_listing,'plan_detail'=>$plan_detail]);
    }

    public function tendor_request($id){


          // print_r($business); die();

          $vendor = Vendor::find($id);
        
    
    
            $current_date = Carbon::now();
    
            $package_vendor = DB::table('package_vendor')
            ->where('vendor_id',$id)
            ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();

             foreach ($package_vendor as $key => $value) {


                 $plan_id = $value->package_id; 

                $plan_detail = Package::find($plan_id);

                $end_date = $value->ends_date;         
  
        }
    
                  //check  business_listing
                  $business_listing = $plan_detail->bussiness_listing;
                  $vendor_bl = Business::where('vendor_id',$id)->count();
                 
                 
         

        $vendor = Vendor::find($id);

        $tendor_id = Tendor_req_action::where('vendor_req_id',$id)->pluck('tendor_req_id')->toArray();

        

        // print_r($tendor_action_check); die();

        $tendor = DB::table('tendor_requests')->select('businesses.*','sub_categories.*','customers.*','tendor_requests.*', 'tendor_requests.id as tendorId', 'tendor_requests.updated_at as tendorend')
        ->join('businesses','businesses.business_category','=','tendor_requests.subcategory_id')
        ->join('sub_categories','sub_categories.id','=','tendor_requests.subcategory_id')
        ->join('customers','customers.id','=','tendor_requests.customer_id')
        // ->join('tendor_req_actions','tendor_req_actions.tendor_req_id','=','tendor_requests.id')
        ->where('vendor_id',$id)
        ->whereNotIn('tendor_requests.id',$tendor_id)
       ->get();

        // print_r($tendor); die();

        $tendor_action = DB::table('tendor_requests')
        ->join('businesses','businesses.business_category','=','tendor_requests.subcategory_id')
        ->join('sub_categories','sub_categories.id','=','tendor_requests.subcategory_id')
        ->join('customers','customers.id','=','tendor_requests.customer_id')->
        join('tendor_req_actions','tendor_req_actions.tendor_req_id','=','tendor_requests.id')
        ->where('vendor_id',$id)
        ->where('tendor_req_removed', '!=','removed')
        ->select('businesses.*','sub_categories.*','customers.*','tendor_req_actions.*','tendor_requests.*', 'tendor_requests.id as tendorId','tendor_req_actions.id as tendoractionId','tendor_requests.updated_at as tendorend')->get();

        // print_r($tendor); die();

        


        return view('Vendor.tendor_request',compact('tendor','tendor_action'),['tendor_req_actions.*','plan_detail'=>$plan_detail, 'vendor' => $vendor,'business_listing' => $business_listing,'vendor_bl' => $vendor_bl]);

    
    }

    // tendor accepted

public function tendor_action_accepted($id){

    $vendor_id = Auth::guard('vendor')->id();

    $tendor_action = New Tendor_req_action;

    $tendor_action->tendor_req_action = 1;
    $tendor_action->tendor_req_id = $id;
    $tendor_action->vendor_req_id = $vendor_id;
    $tendor_action->tendor_req_removed = 'NIL';
    $tendor_action->save();
   
    return redirect()->back()->with('SuccessMsg','tendor action Successfully updated' );

}

    // tendor rejected

public function tendor_action_rejected($id){

    $vendor_id = Auth::guard('vendor')->id();

    $tendor_action = New Tendor_req_action;

    $tendor_action->tendor_req_action = 0;
    $tendor_action->tendor_req_id = $id;
    $tendor_action->vendor_req_id = $vendor_id;
    $tendor_action->tendor_req_removed = 'NIL';
    $tendor_action->save();
    
    return redirect()->back()->with('SuccessMsg','tendor action Successfully updated' );

}



public function tendor_request_removed($id){

    $vendor_id = Auth::guard('vendor')->id();

    $tendor_action = New Tendor_req_action;

    $tendor_action->tendor_req_action = 'removed';
    $tendor_action->tendor_req_id = $id;
    $tendor_action->vendor_req_id = $vendor_id;
    $tendor_action->tendor_req_removed = 'removed';
    $tendor_action->save();
    
    return redirect()->back()->with('SuccessMsg','tendor action Successfully removed' );

}


public function tendor_action_removed($id){

    $vendor_id = Auth::guard('vendor')->id();

    $tendor_action =  Tendor_req_action::find($id);

    // $tendor_action->tendor_req_action = 'removed';
    // $tendor_action->tendor_req_id = $id;
    // $tendor_action->vendor_req_id = $vendor_id;
    $tendor_action->tendor_req_removed = 'removed';
    $tendor_action->save();
    
    return redirect()->back()->with('SuccessMsg','tendor action Successfully removed' );

}


    public function package_checkout(){

        $id = Auth::guard('vendor')->id();

        $vendor_id = Auth::guard('vendor')->id();
        $date = Carbon::now();

        $vendor = Vendor::find($vendor_id);
    
        $business = Business::where('vendor_id',$vendor_id)->get();
    
        // print_r($business); die();
            
            $current_date = Carbon::now();

            $package_vendor = DB::table('package_vendor')
            ->where('vendor_id',$id)
            ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();

             foreach ($package_vendor as $key => $value) {


                 $plan_id = $value->package_id; 

                $plan_detail = Package::find($plan_id);

                $end_date = $value->ends_date;         
  
        }
       
    
                  //check  business_listing
                  $business_listing = $plan_detail->bussiness_listing;
                  $vendor_bl = Business::where('vendor_id',$id)->count();
                 
                 
         

        return view('Vendor.package_checkout',['vendor' => $vendor,'vendor_bl' => $vendor_bl, 'business_listing' => $business_listing,'plan_detail'=>$plan_detail]);

    }

    public function add_business(){

        $id = Auth::guard('vendor')->id();

        $vendor = Vendor::find($id);

                

        $current_date = Carbon::now();

      
        $package_vendor = DB::table('package_vendor')
        ->where('vendor_id',$id)
        ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();

         foreach ($package_vendor as $key => $value) {


             $plan_id = $value->package_id; 

            $plan_detail = Package::find($plan_id);

            $end_date = $value->ends_date;         

    }
        
        //check  business_listing
        $check_product = $plan_detail->product_listing;

        $check_image = $plan_detail->gallery_image;

        if($plan_detail->contact == '1'){

            $contact = true;
        }
        else {
            $contact = false;
        }
        
        if($plan_detail->location == '1'){
            $location = true;
        }
        else {
            $location = false;
        }

        if($plan_detail->social_media == '1'){
            $social_media = true;
        }
        else {
            $social_media = false;
        }

        return view('Vendor.add_bussiness',['vendor' => $vendor, 'social_media'=>$social_media, 'location'=>$location, 'check_product' =>$check_product, 'check_image' => $check_image, 'contact' => $contact]);


    
}






    
public function request_call($id){

    
    $id = Auth::guard('vendor')->id();

    $vendor = Vendor::find($id);


    $business = Business::where('vendor_id',$id)->get();
    
    // print_r($business); die();
        
        $current_date = Carbon::now();

        $package_vendor = DB::table('package_vendor')
        ->where('vendor_id',$id)
        ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();

         foreach ($package_vendor as $key => $value) {


             $plan_id = $value->package_id; 

            $plan_detail = Package::find($plan_id);

            $end_date = $value->ends_date;         

    }
   

              //check  business_listing
              $business_listing = $plan_detail->bussiness_listing;
              $vendor_bl = Business::where('vendor_id',$id)->count();

              $reques_call_id = Request_call_action::where('request_call_vendor_id',$id)->pluck('request_call_tendor_id')->toArray();

        

              // print_r($tendor_action_check); die();
      
      
              $request_call = DB::table('request_calls')->select('businesses.*','sub_categories.*','customers.*','request_calls.*', 'request_calls.id as tendorId', 'request_calls.updated_at as tendorend')
              ->join('businesses','businesses.business_category','=','request_calls.business_call_id')
              ->join('sub_categories','sub_categories.id','=','businesses.business_category')
              ->join('customers','customers.id','=','request_calls.customer_call_id')
              // ->join('tendor_req_actions','tendor_req_actions.tendor_req_id','=','tendor_requests.id')
              ->where('vendor_id',$id)
              ->whereNotIn('request_calls.id',$reques_call_id)
             ->get();


             
             $request_call_action = DB::table('request_calls')->select('businesses.*','sub_categories.*','customers.*','request_call_actions.*','request_calls.*', 'request_call_actions.id as requestCallId', 'request_calls.id as tendorId', 'request_calls.updated_at as tendorend')
             ->join('businesses','businesses.business_category','=','request_calls.business_call_id')
             ->join('sub_categories','sub_categories.id','=','businesses.business_category')
             ->join('customers','customers.id','=','request_calls.customer_call_id')
             ->join('request_call_actions','request_call_actions.request_call_tendor_id','=','request_calls.id')
             ->where('vendor_id',$id)
             ->where('request_call_removed', '!=','removed')
            ->get();

             


       return view('Vendor.request_call',compact('request_call','request_call_action'),['vendor'=>$vendor,'business_listing'=>$business_listing,'vendor_bl'=>$vendor_bl,'plan_detail'=>$plan_detail]);

    }


      // tendor accepted
      
public function request_action_accepted($id){

    $vendor_id = Auth::guard('vendor')->id();

    $request_action = New Request_call_action;

    $request_action->request_call_action = 1;
    $request_action->request_call_tendor_id = $id;
    $request_action->request_call_vendor_id = $vendor_id;
    $request_action->request_call_removed = 'NIL';
    $request_action->save();

   
    return redirect()->back()->with('SuccessMsg','Request call Successfully updated' );

}



public function request_action_rejected($id){

    $vendor_id = Auth::guard('vendor')->id();

    $request_action = New Request_call_action;

    $request_action->request_call_action = 0;
    $request_action->request_call_tendor_id = $id;
    $request_action->request_call_vendor_id = $vendor_id;
    $request_action->request_call_removed = 'NIL';
    $request_action->save();

   
    return redirect()->back()->with('SuccessMsg','Request call Successfully updated' );

}

    // tendor rejected







public function request_call_removed($id){

    $vendor_id = Auth::guard('vendor')->id();

    $request_action = New Request_call_action;

    $request_action->request_call_action = 'removed';
    $request_action->request_call_tendor_id = $id;
    $request_action->request_call_vendor_id = $vendor_id;
    $request_action->request_call_removed = 'removed';
    $request_action->save();

   
    return redirect()->back()->with('SuccessMsg','Request call Successfully removed' );

}




public function request_action_removed($id){

    $vendor_id = Auth::guard('vendor')->id();

    $request_action =  Request_call_action::find($id);

    $request_action->request_call_removed = 'removed';
    $request_action->save();
    
    return redirect()->back()->with('SuccessMsg','request action Successfully removed' );

}




}