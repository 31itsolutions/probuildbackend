<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Tendor_req_action;


use Illuminate\Http\Request;

use App\Models\Package;

use App\Models\Business_information;

use App\Models\Customer;

use App\Models\Business;

use App\Models\HomeCategory;

use App\Models\Product;

use App\Models\User;

use App\Models\Bg_image;

use App\Models\Add_image;

use App\Models\Add_image_next;
use App\Models\Contact_us;

use App\Models\Analytic;

use App\Models\Category;

use App\Models\Galllery_image;

use App\Models\Sub_category;

use App\Models\About_us;

use App\Models\Terms_of_policy;

use App\Models\Faq;

use App\Models\Privacy_policy;

use App\Models\Review;

use App\Models\Tendor_request;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


use App\Models\Vendor;

class AdmindesignController extends Controller
{
    

 

    public function create_image(){

        $admin = User::find(1);


        if( !empty(Bg_image::find(1))){
            $image = Bg_image::find(1);

            $image_check = true;
            return view('Admin.Designs.image_update', ['admin' => $admin, 'image' => $image, 'image_check'=>$image_check]);

        }
        else {
            $image_check = false;

            return view('Admin.Designs.image_update' , ['admin' => $admin,'image_check'=>$image_check]);
        }

    }

    public function update_image( Request $request){


        if(empty(Bg_image::find(1))){

            $Bg_image = New Bg_image; 

        }
        else {
            $Bg_image =  Bg_image::find(1); 
        }



           
        if($request->hasFile('login_image')){
    
            $login_image = $request->file('login_image')->getClientOriginalName();
            // $request->file('login_image')->moveTo('public/banner_image/',$login_image);

            $hello = $request->file('login_image')->move(public_path('upload_images/banner_image'), $login_image);

        
            }
            if($request->hasFile('login_image')){
            $Bg_image->login_image=$login_image;
            }

            if($request->hasFile('home_image')){
    
                $home_image = $request->file('home_image')->getClientOriginalName();
                $request->file('home_image')->move(public_path('upload_images/banner_image'), $home_image);
            
                }
                if($request->hasFile('home_image')){
                $Bg_image->home_image=$home_image;
                }

                if($request->hasFile('vendor_image')){
    
                    $vendor_image = $request->file('vendor_image')->getClientOriginalName();
                    $request->file('vendor_image')->move(public_path('upload_images/banner_image'), $vendor_image);
                
                    }
                    if($request->hasFile('vendor_image')){
                    $Bg_image->vendor_image=$vendor_image;
                    }

                    if($request->hasFile('customer_image')){
    
                        $customer_image = $request->file('customer_image')->getClientOriginalName();
                        $request->file('customer_image')->move(public_path('upload_images/banner_image'), $customer_image);
                    
                        }
                        if($request->hasFile('customer_image')){
                        $Bg_image->customer_image=$customer_image;
                        }

                $Bg_image->save();

                return redirect()->back()->with('SuccessMsg','Image Successfully updated' );




    }



    // advertisement
    public function advertisement(){




        $get_add_image = Add_image::all();
        $get_add_image_next = Add_image_next::all();

            $add_image1 = DB::table('add_images')->count();

            $add_image2 = DB::table('add_image_nexts')->count();

            $admin = User::find(1);

            // print_r($get_add_image_next); die();


            return view('Admin.Designs.advertisement', ['admin'=>$admin, 'add_image1'=>$add_image1, 'add_image2'=>$add_image2], compact('get_add_image', 'get_add_image_next'));


 
    }


    public function update_advertisement( Request $request){
        

            $Add_image = New Add_image; 
           
        if($request->hasFile('add_image')){
    
            $add_image = $request->file('add_image')->getClientOriginalName();
            $request->file('add_image')->move(public_path('upload_images/advertisement_images'), $add_image);
        
            }

                  if($request->hasFile('add_image')){
                    $Add_image->add_image=$add_image;
            }

            $Add_image->save();


        
           return redirect()->back()->with('SuccessMsg','Addvertisement Image Successfully updated' );

    }
    




    // edit top advertisement 
    public function update_edited_advertisement( Request $request, $id){
        

        $Add_image =  Add_image::find($id); 
       
    if($request->hasFile('add_image')){

        $add_image = $request->file('add_image')->getClientOriginalName();
        $request->file('add_image')->move(public_path('upload_images/advertisement_images'), $add_image);

    
        }

              if($request->hasFile('add_image')){
                $Add_image->add_image=$add_image;
        }

        $Add_image->save();

       return redirect()->back()->with('SuccessMsg','Addvertisement Image Successfully updated' );

}

public function delete_advertisement($id){
    
    Add_image::find($id)->delete();
    return redirect()->back()->with('SuccessMsg','Advertisement Deleted Successfully' );
    
}

    public function update_advertisement_next( Request $request){

        $Add_image_next = New Add_image_next; 

        if($request->hasFile('add_image_next')){

            $add_image_next = $request->file('add_image_next')->getClientOriginalName();
            $request->file('add_image_next')->move(public_path('upload_images/advertisement_images'), $add_image_next);

        
            }
          
            $Add_image_next->add_image_next=$add_image_next;

            $Add_image_next->save();
    
            return redirect()->back()->with('SuccessMsg','Addvertisement Image Successfully updated' );

    
    }


    public function edit_advertisement(){


        $add_image = Add_image::all();

        $admin = User::find(1);


        return view('Admin.Designs.edit_advertisement',['admin'=>$admin] ,compact('add_image'));


    }

    public function edit_advertisement_next(){


        $add_image = Add_image_next::all();

        $admin = User::find(1);


        return view('Admin.Designs.edit_advertisement_next',['admin'=>$admin] ,compact('add_image'));


    }


       // edit middle advertisement 
       public function update_edited_advertisement_next( Request $request, $id){
        

        $Add_imagenext =  Add_image_next::find($id); 
       
    if($request->hasFile('add_image_next')){

        $add_image_next = $request->file('add_image_next')->getClientOriginalName();
        $request->file('add_image_next')->move(public_path('upload_images/advertisement_images'), $add_image_next);

    
        }

              if($request->hasFile('add_image_next')){
                $Add_imagenext->add_image_next=$add_image_next;
        }

        $Add_imagenext->save();

       return redirect()->back()->with('SuccessMsg','Addvertisement Image Successfully updated' );

}

public function delete_advertisement_next($id){
    
    // print_r($id); die();
    Add_image_next::find($id)->delete();

    return redirect()->back()->with('SuccessMsg','Advertisement Deleted Successfully' );
    
}






    public function main_category(){

        $category_count = DB::table('categories')->count();

        $admin = User::find(1);


        return view('Admin.Designs.category', ['category_count' => $category_count,'admin' => $admin]);
    }

    public function update_category( Request $request){




        $check_priority = Category::where('priority', '=', $request->priority)->get();

        foreach($check_priority as $check_priority_child){

        if(($check_priority_child) !=null){
            return redirect()->back()->with('SuccessMsg','Priority listing already Exist');
        }
    }
        
     $this->validate($request,[
     
        'category'=>'required',
        'priority'=>'required',
        'category_description'=>'required',
        'category_icon'=>'required',

   
       ]);



     
          $category_type =  New Category; 

          if($request->hasFile('category_icon')){
    
            $category_icon = $request->file('category_icon')->getClientOriginalName();
            $request->file('category_icon')->move(public_path('upload_images/category_icon'), $category_icon);

        
            }

                  if($request->hasFile('category_icon')){
                    $category_type->category_icon=$category_icon;
            }
          
          
          $category_type->category = $request->category;
          $category_type->category_description = $request->category_description;
          $category_type->priority = $request->priority;

          $category_type->save();

          return redirect()->back()->with('SuccessMsg','Category Successfully updated' );

    }


    public function view_category(){

        $category =  Category::all(); 

        $admin = User::find(1);


        return view('Admin.Designs.view_category',['admin'=>$admin] ,compact('category'));
    }

    public function delete_category($id){
        category::find($id)->delete();
        return redirect()->back()->with('SuccessMsg','Category deleted Successfully' );
    }

    public function delete_sub_category_now($id){
        Sub_category::find($id)->delete();
        return redirect()->back()->with('SuccessMsg','Category deleted Successfully' );
    }
    

    public function edit_category($id){

        $category_update = Category::find($id);

        $admin = User::find(1);

        return view('Admin.Designs.edit_category', ['category_update'=>$category_update,'admin'=>$admin]);
    }

    public function update_edited_category(Request $request, $id){

        
        
     $this->validate($request,[
     
        'category'=>'required',
        'priority'=>'required',
        'category_description'=>'required',
        'category_icon'=>'required',

   
       ]);



     
          $category_type =   Category::find($id); 

          if($request->hasFile('category_icon')){

            $category_icon = $request->file('category_icon')->getClientOriginalName();
            $request->file('category_icon')->move(public_path('upload_images/category_icon'), $category_icon);


        
            }

                  if($request->hasFile('category_icon')){
                    $category_type->category_icon=$category_icon;
            }
          
          
       
          $category_type->category = $request->category;
          $category_type->priority = $request->priority;
          $category_type->category_description = $request->category_description;

          $category_type->save();
          return redirect(route('view_category'))->with('SuccessMsg','Category Updated Successfully');

    }

    
    public function sub_category(){

        $category_count = DB::table('sub_categories')->count();

        $category_type = Category::all();

        $admin = User::find(1);

        return view('Admin.Designs.sub_category', ['category_count'=>$category_count,'admin'=>$admin], compact('category_type'));
    }

    public function update_sub_category(Request $request){


        

        
     $this->validate($request,[
     
        'sub_category'=>'required',
        'category_type'=>'required',
        'priority' => 'required',
        'sub_category_description'=>'required',
        'sub_category_icon'=>'required',
        'premium'=>'required',

   
       ]);



     
       $sub_category_type =  New Sub_category; 

  


        if($request->hasFile('sub_category_icon')){
    
               $sub_category_icon = $request->file('sub_category_icon')->getClientOriginalName();
            $request->file('sub_category_icon')->move(public_path('upload_images/sub_category_icon'), $sub_category_icon);

        
            }

                  if($request->hasFile('sub_category_icon')){
                    $sub_category_type->sub_category_icon=$sub_category_icon;
            }
          
      
          
       
       $sub_category_type->sub_category = $request->sub_category;
       $sub_category_type->category_type = $request->category_type;
          $sub_category_type->priority = $request->priority;
          $sub_category_type->sub_category_description = $request->sub_category_description;
          $sub_category_type->premium = 1;

          $sub_category_type->save();

          return redirect()->back()->with('SuccessMsg','Sub Category Type Successfully updated' );


    }


    public function view_sub_category(){

        $sub_category =  Sub_category::all();


        $data = Category::join('sub_categories', 'sub_categories.category_type', '=', 'categories.id')

        ->get();

        $admin = User::find(1);

        return view('Admin.Designs.view_sub_category',['admin'=>$admin] ,compact('data'));
    }


    public function delete_sub_category($id){

        Sub_category::find($id)->delete();
        return redirect()->back()->with('SuccessMsg','Sub Category deleted Successfully' );
        
        
    }

    public function edit_sub_category($id){

        $sub_category = Sub_category::find($id);
      $category_type = Category::all();
      $category_object = Category::find($sub_category->category_type);

      $admin = User::find(1);

        return view('Admin.Designs.edit_sub_category', ['sub_category' => $sub_category,'category_object' => $category_object,'admin' => $admin], compact('category_type'));


    }

    public function update_edited_sub_category(Request $request, $id){

        
        
     $this->validate($request,[
     
        // 'sub_category'=>'required',
        // 'category_type'=>'required',
        // 'priority' => 'required',
        // 'sub_category_description'=>'required',
        // 'sub_category_icon'=>'required',
        // 'premium'=>'required',

   
       ]);

       

     
       $sub_category_type =  Sub_category::find($id);

       if($request->hasFile('sub_category_icon')){
    
        $sub_category_icon = $request->file('sub_category_icon')->getClientOriginalName();
        $request->file('sub_category_icon')->move(public_path('upload_images/sub_category_icon'), $sub_category_icon);

    
        }

              if($request->hasFile('sub_category_icon')){
                $sub_category_type->sub_category_icon=$sub_category_icon;
                // print_r($sub_category_icon); die();
        }
      
       
          
       
       $sub_category_type->sub_category = $request->sub_category;
       $sub_category_type->category_type = $request->category_type;
          $sub_category_type->priority = $request->priority;
          $sub_category_type->sub_category_description = $request->sub_category_description;
          $sub_category_type->premium = $request->premium;


          $sub_category_type->save();

          return redirect(route('view_sub_category'))->with('SuccessMsg','Sub Category Type Successfully updated' );
}


    




public function add_business_admin(Request $request, $id){

    $sub_category = $request->business_category;

    $sub_category_dtail = Sub_category::where('id', $sub_category)->select('category_type')->get()->toArray();
    
    $sub_category_detail = Category::where('id', $sub_category_dtail[0])->select('id')->get()->toArray();

    // print_r ($sub_category_detail[0]['category']);
    // die();

    $vendor = Vendor::find($id);
  
    $business =New Business;    


    if($request->hasFile('business_document')){
    
        $document = $request->file('business_document')->getClientOriginalName();
        $request->file('business_document')->move(env('AD_IMG_URL').'upload_images/business_document', $document);


    

    
        }

              if($request->hasFile('business_document')){
                $business->business_document=$document;
        }


        if($request->hasFile('business_brochure')){
    
            $brochure = $request->file('business_brochure')->getClientOriginalName();
            $request->file('business_brochure')->move(env('AD_IMG_URL').'upload_images/business_document', $brochure);


        
            }
    
                  if($request->hasFile('business_brochure')){
                    $business->business_brochure=$brochure;
            }

            if($request->hasFile('business_image')){
    
                $business_image = $request->file('business_image')->getClientOriginalName();
                $request->file('business_image')->move(env('AD_IMG_URL').'upload_images/business_image', $business_image);


            
                }
        
                      if($request->hasFile('business_image')){
                        $business->business_image=$business_image;
                }

                if($request->hasFile('business_logo')){
    
                    $business_logo = $request->file('business_logo')->getClientOriginalName();
                    $request->file('business_logo')->move(env('AD_IMG_URL').'upload_images/business_logo', $business_logo);
    
    
                
                    }
            
                          if($request->hasFile('business_logo')){
                            $business->business_logo=$business_logo;
                    }

    $business->business_title = $request->business_title;
    $business->business_category = $request->business_category;
    $business->category = $sub_category_detail[0]['id'];
    $business->business_description = $request->business_description;
    $business->recommended = $request->recommended;

    $business->country = $request->country;
    $business->city = $request->province;
    $business->location = $request->area;
    $business->lat = $request->lat;
    $business->lang = $request->lang;
    $business->status = $request->status;
    
    $business->facebook = $request->facebook;
    $business->linkedin = $request->linkedin;
    $business->twitter = $request->twitter;
    $business->instagram = $request->instagram;

    $business->monday_from = $request->monday_to;
    $business->monday_to = $request->monday_to;
    $business->tuesday_from = $request->tuesday_from;
    $business->tuesday_to = $request->tuesday_to;
    $business->wednesday_from = $request->wednesday_from;
    $business->wednesday_to = $request->wednesday_to;
    $business->thursday_from = $request->thursday_from;
    $business->thursday_to = $request->thursday_to;
    $business->friday_from = $request->friday_from;
    $business->friday_to = $request->friday_to;
    $business->saturday_from = $request->saturday_from;
    $business->saturday_to = $request->saturday_to;
    $business->sunday_from = $request->sunday_from;
    $business->sunday_to = $request->sunday_to;
  
    $business->website = $request->website;
    $business->email = $request->email;
    $business->fax_no = $request->fax_no;
    $business->mobile_no = $request->mobile;
    
    $vendor->businesses()->save($business);     
    
    



        return redirect(route('add_product_image', $business->id))->with('SuccessMsg','Business Successfully updated');
    
    
    }
// update bu information
    public function update_business_admin(Request $request,$id){

        $sub_category = $request->business_category;

        $sub_category_dtail = Sub_category::where('id', $sub_category)->select('category_type')->get()->toArray();
        
        $sub_category_detail = Category::where('id', $sub_category_dtail[0])->select('id')->get()->toArray();

          
    $business = Business::find($id);    

    
    if($request->hasFile('business_document')){
    
        $document = $request->file('business_document')->getClientOriginalName();
        $request->file('business_document')->move(env('AD_IMG_URL').'upload_images/business_document', $document);


        }

              if($request->hasFile('business_document')){
                $business->business_document=$document;
        }


        if($request->hasFile('business_brochure')){
    
            $brochure = $request->file('business_brochure')->getClientOriginalName();
            $request->file('business_brochure')->move(env('AD_IMG_URL').'upload_images/business_document', $brochure);


            }
    
                  if($request->hasFile('business_brochure')){
                    $business->business_brochure=$brochure;
            }

            if($request->hasFile('business_image')){
    
                $business_image = $request->file('business_image')->getClientOriginalName();
                $request->file('business_image')->move(env('AD_IMG_URL').'upload_images/business_image', $business_image);


                }
        
                      if($request->hasFile('business_image')){
                        $business->business_image=$business_image;
                }


                if($request->hasFile('business_logo')){
    
                    $business_logo = $request->file('business_logo')->getClientOriginalName();
                    $request->file('business_logo')->move(env('AD_IMG_URL').'upload_images/business_logo', $business_logo);
    
    
                
                    }
            
                          if($request->hasFile('business_logo')){
                            $business->business_logo=$business_logo;
                    }

    $business->business_title = $request->business_title;
    $business->business_category = $request->business_category;
    $business->category = $sub_category_detail[0]['id'];

    $business->business_description = $request->business_description;
    $business->recommended = $request->recommended;


    $business->country = $request->country;
    $business->city = $request->province;
    $business->location = $request->area;
    $business->lat = $request->lat;
    $business->lang = $request->lang;

    $business->facebook = $request->facebook;
    $business->linkedin = $request->linkedin;
    $business->twitter = $request->twitter;
    $business->instagram = $request->instagram;
    $business->status = $request->status;


    $business->monday_from = $request->monday_to;
    $business->monday_to = $request->monday_to;
    $business->tuesday_from = $request->tuesday_from;
    $business->tuesday_to = $request->tuesday_to;
    $business->wednesday_from = $request->wednesday_from;
    $business->wednesday_to = $request->wednesday_to;
    $business->thursday_from = $request->thursday_from;
    $business->thursday_to = $request->thursday_to;
    $business->friday_from = $request->friday_from;
    $business->friday_to = $request->friday_to;
    $business->saturday_from = $request->saturday_from;
    $business->saturday_to = $request->saturday_to;
    $business->sunday_from = $request->sunday_from;
    $business->sunday_to = $request->sunday_to;
  
    $business->website = $request->website;
    $business->email = $request->email;
    $business->fax_no = $request->fax_no;
    $business->mobile_no = $request->mobile;
    $business->save();        



        return redirect()->back()->with('SuccessMsg','Business Successfully updated');
        
    }





public function add_product_admin(Request $request, $id){




    

            $business_check =DB::table('businesses')->latest('id')->first();

            $business = Business::find($business_check->id);

            $product =New Product;  

            if($request->hasFile('product_image')){
    
                $product_image = $request->file('product_image')->getClientOriginalName();
                $request->file('product_image')->move(env('AD_IMG_URL').'upload_images/product_image', $product_image);


                }
        
                      if($request->hasFile('product_image')){
                        $product->product_image=$product_image;
                }


            $product->product_name = $request->product_name;
            $product->product_price_from = $request->product_price_from;
            $product->product_price_to = $request->product_price_to;
            $product->product_description = $request->product_description;


           
            $business->products()->save($product);


            return redirect()->back()->with('SuccessMsg','Product Successfully updated');
    
    
    
}

public function add_more_product_admin(Request $request, $id){


    $business = Business::find($id);

    $product =New Product;   

    if($request->hasFile('product_image')){
    
        $product_image = $request->file('product_image')->getClientOriginalName();
        $request->file('product_image')->move(env('AD_IMG_URL').'upload_images/product_image', $product_image);


    
        }

              if($request->hasFile('product_image')){
                $product->product_image=$product_image;
        }

    $product->product_name = $request->product_name;
    $product->product_price_from = $request->product_price_from;
    $product->product_price_to = $request->product_price_to;
    $product->product_description = $request->product_description;


   
    $business->products()->save($product);


    return redirect()->back()->with('SuccessMsg','Product Successfully updated');



}

public function update_product_admin(Request $request,$id){

    



    $product = Product::find($id);   

    if($request->hasFile('product_image')){
    
        $product_image = $request->file('product_image')->getClientOriginalName();
        $request->file('product_image')->move(env('AD_IMG_URL').'upload_images/product_image', $product_image);


    
        }

              if($request->hasFile('product_image')){
                $product->product_image = $product_image;
        }

    $product->product_name = $request->product_name;
    $product->product_price_from = $request->product_price_from;
    $product->product_price_to = $request->product_price_to;
    $product->product_description = $request->product_description;


   
    $product->save();


    return redirect()->back()->with('SuccessMsg','Product Successfully updated');

}


public function delete_product($id){
    Product::find($id)->delete();
    return redirect()->back()->with('SuccessMsg','Product deleted Successfully' );
    

}

public function delete_image($id){
    Galllery_image::find($id)->delete();
    return redirect()->back()->with('SuccessMsg','Product Image deleted Successfully' );
    

}

public function add_image_admin(Request $request, $id){


    $business_check =DB::table('businesses')->latest('id')->first();

    $business = Business::find($business_check->id);
    $gallery_image_add = New Galllery_image;

    if($request->hasFile('gallery_image')){
    
          
        $gallery_image = $request->file('gallery_image')->getClientOriginalName();
        $request->file('gallery_image')->move(env('AD_IMG_URL').'upload_images/gallery_image', $gallery_image);


        }

              if($request->hasFile('gallery_image')){
                $gallery_image_add->gallery_image=$gallery_image;
        }
      
           $business->galllery_images()->save($gallery_image_add);

           return redirect()->back()->with('SuccessMsg','Image Successfully updated');
    
           
}


// update product image admin
public function update_image_admin(Request $request, $id){
    


    $gallery_image_add =  Galllery_image::find($id);

    if($request->hasFile('gallery_image')){
    
          
        $gallery_image = $request->file('gallery_image')->getClientOriginalName();
        $request->file('gallery_image')->move(env('AD_IMG_URL').'upload_images/gallery_image', $gallery_image);

        }

              if($request->hasFile('gallery_image')){
                $gallery_image_add->gallery_image=$gallery_image;
        }
      
           $gallery_image_add->save();

           return redirect()->back()->with('SuccessMsg','Image Successfully updated');
    

}


// update more product image admin
public function update_more_image_admin(Request $request, $id){

    $business = Business::find($id);

    $gallery_image_add = new  Galllery_image;

    if($request->hasFile('gallery_image')){
    
          
        $gallery_image = $request->file('gallery_image')->getClientOriginalName();
        $request->file('gallery_image')->move(env('AD_IMG_URL').'upload_images/gallery_image', $gallery_image);

        }

              if($request->hasFile('gallery_image')){
                $gallery_image_add->gallery_image=$gallery_image;
        }
      
           $business->galllery_images()->save($gallery_image_add);

           return redirect()->back()->with('SuccessMsg','Image Successfully updated');
    

}

public function delete_business($id){

    Business::find($id)->delete();
    return redirect()->back()->with('SuccessMsg','Business deleted Successfully' );
}


public function edit_company_profile(Request $request, $id){

    $business_id = Business::find($id);

    $vendor_id = $business_id->vendor_id;

    $vendor_account = Vendor::find($vendor_id);

    $product_detail = Product::where('business_id', '=', $id)->get();
    $image_detail = Galllery_image::where('business_id', '=', $id)->get();

    $product_count = Product::where('business_id', '=', $id)->count();
    $image_count = Galllery_image::where('business_id', '=', $id)->count();

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
          $vendor_bl = Business::where('vendor_id',$id)->count();
         
        
        $business = $plan_detail->business_listing;
        $product = $plan_detail->product_listing;
        $gallery_image = $plan_detail->gallery_image;
        $contact = $plan_detail->contact;
        $location = $plan_detail->location;
        $social_media = $plan_detail->social_media;
    



    $sub_category_type =   Sub_category::all(); 

    $category_type =   Sub_category::all(); 


    // //   check vendor item
    // $business_check = Business::find('business_id');


    if(Product::where('business_id',$business_id->id)->count() == null){

        $product_count = 0;
        
    } 
    else {
        
        $product_count = Product::where('business_id',$business_id->id)->count();
    }  
    if(Galllery_image::where('business_id',$business_id->id)->count() == null){

        $image_count = 0;
        
    } 
    else {
        
        $image_count = Galllery_image::where('business_id',$business_id->id)->count();
    }   

    $admin = User::find(1);


    return view('Admin.Vendor.edit_company_profile',compact('sub_category_type', 'product_detail', 'image_detail'),[ 'image_count'=>$image_count,'product_count'=>$product_count, 'business_id'=>$business_id, 'product'=>$product ,'gallery_image' => $gallery_image,'contact'=>$contact,'location'=>$location ,'social_media'=>$social_media,'image_count' => $image_count, 'product_count'=>$product_count,'vendor_account'=>$vendor_account,'admin'=>$admin]);

}




// footer detail


public function about_us(){

    $about_count = About_us::count();
    $admin = User::find(1);
    $about = About_us::all();


    return view('Admin.footer_dtail.about_us', ['about_count'=>$about_count,'admin'=>$admin],compact('about'));
}

public function update_about_us(Request $request){
    $this->validate($request,[
     
    
        'title' => 'required',
        'title_description'=>'required',
   
       ]);
     
       $about = New About_us;

       $about->title = $request->title;
       $about->title_description = $request->title_description;

       $about->save();

       return redirect()->back()->with('SuccessMsg','Details Successfully updated');

   

}
public function edit_about(){

    $admin = User::find(1);
    $about = About_us::all();
    return view('Admin.footer_dtail.edit_about_us', ['admin'=>$admin],compact('about'));

}
public function update_edited_about_us(Request $request, $id){
    $this->validate($request,[
     
    
        'title' => 'required',
        'title_description'=>'required',
   
       ]);
     
       $about =  About_us::find($id);

       $about->title = $request->title;
       $about->title_description = $request->title_description;

       $about->save();

       return redirect(route('about_us'))->with('SuccessMsg','Details Successfully updated');


}


//FAQ
public function faq(){

    $admin = User::find(1);

    $faq = Faq::all();

    $faq_count = Faq::count();

    return view('Admin.footer_dtail.faq',['admin'=>$admin,'faq_count'=>$faq_count],compact('faq'));
}
public function update_faq(Request $request){
    $this->validate($request,[
     
    
        'title' => 'required',
        'title_description'=>'required',
   
       ]);
     
       $faq = New Faq;

       $faq->title = $request->title;
       $faq->title_description = $request->title_description;

       $faq->save();

       return redirect()->back()->with('SuccessMsg','Details Successfully updated');

   

}


public function edit_faq(){
    $admin = User::find(1);

    $faq  = Faq::all();
    return view('Admin.footer_dtail.edit_faq',['admin'=>$admin], compact('faq'));

}
public function update_edited_faq(Request $request, $id){

$this->validate($request,[
     
    
    'title' => 'required',
    'title_description'=>'required',

   ]);
 
   $faq =  Faq::find($id);

   $faq->title = $request->title;
   $faq->title_description = $request->title_description;

   $faq->save();

   return redirect(route('faq'))->with('SuccessMsg','Details Successfully updated');


}



//term of
public function terms_of_use(){
    $admin = User::find(1);

    $term  = Terms_of_policy::all();
    $term_count  = Terms_of_policy::count();

    return view('Admin.footer_dtail.terms_of_policy',['admin'=>$admin,'term_count'=>$term_count], compact('term'));
}


public function update_terms_of_use(Request $request){
    $this->validate($request,[
     
    
        'title' => 'required',
        'title_description'=>'required',
   
       ]);
     
       $about = New Terms_of_policy;

       $about->title = $request->title;
       $about->title_description = $request->title_description;

       $about->save();

       return redirect()->back()->with('SuccessMsg','Details Successfully updated');

   

}


public function edit_terms_of_use(){
    $admin = User::find(1);

    $term  = Terms_of_policy::all();
    return view('Admin.footer_dtail.edit_terms_of_us',['admin'=>$admin], compact('term'));

}
public function update_edited_terms_of_use(Request $request, $id){

$this->validate($request,[
     
    
    'title' => 'required',
    'title_description'=>'required',

   ]);
 
   $about =  Terms_of_policy::find($id);

   $about->title = $request->title;
   $about->title_description = $request->title_description;

   $about->save();

   return redirect(route('terms_of_use'))->with('SuccessMsg','Details Successfully updated');


}



//privacy policy

public function privacy_policy(){
    $admin = User::find(1);

    $privacy = Privacy_policy::all();

    $privacy_count = Privacy_policy::count();

    return view('Admin.footer_dtail.privacy_policy',['admin'=>$admin,'privacy_count'=>$privacy_count],compact('privacy'));
}

public function update_privacy_policy(Request $request){



$this->validate($request,[
     
    
    'title' => 'required',
    'title_description'=>'required',

   ]);
 
   $about = New Privacy_policy;

   $about->title = $request->title;
   $about->title_description = $request->title_description;

   $about->save();

   return redirect()->back()->with('SuccessMsg','Details Successfully updated');

}


public function edit_privacy_policy(){
    $admin = User::find(1);

    $privacy  = Privacy_policy::all();
    return view('Admin.footer_dtail.edit_privacy_policy',['admin'=>$admin], compact('privacy'));

}
public function update_edited_privacy_policy(Request $request, $id){

$this->validate($request,[
     
    
    'title' => 'required',
    'title_description'=>'required',

   ]);
 
   $about =  Privacy_policy::find($id);

   $about->title = $request->title;
   $about->title_description = $request->title_description;

   $about->save();

   return redirect(route('privacy_policy'))->with('SuccessMsg','Details Successfully updated');


}



public function contact_us(){
    $contact_us = Contact_us::paginate(10);
    $admin = User::find(1);

    // $contact =New Contact_us;

    // $contact->name = 'Rajkumar';
    // $contact->email = 'Rajkumar@gmail.com';
    // $contact->subject = 'I need help from admin';
    // $contact->message = 'I trying to contact for page loading';
    //  $contact->save();
    return view('Admin.footer_dtail.contact_us',['admin'=>$admin], compact('contact_us'));
}




// public function update_review(Request $request, $id){

//     // $this->validate($request,[
         
        
//     //     'name' => 'required',
//     //     'email'=>'required',
//     //     'review'=>'required',
//     //     'rating'=>'required',
    
//     //    ]);
//     $customer_id = Auth::guard('customer')->id();

//        $business = Business::find($id);
     
//        $review = New Review;
    
//        $review->customer_name = $request->name;
//        $review->email = $request->email;
//        $review->review = $request->review;
//        $review->rating = $request->rating;
//        $review->customer_id = $customer_id;
    
//        $business->reviews()->save($review);
    
//        return redirect()->back()->with('SuccessMsg','Review Successfully updated');
    
    
//     }

    public function tendor_detail(){
        $admin = User::find(1);

        $tendor = DB::table('tendor_requests')->select('customers.*','tendor_requests.*', 'tendor_requests.id as tendorId', 'tendor_requests.updated_at as tendorend')
        // ->join('businesses','businesses.business_category','=','tendor_requests.subcategory_id')
        ->join('sub_categories','sub_categories.id','=','tendor_requests.subcategory_id')
        ->join('customers','customers.id','=','tendor_requests.customer_id')
        // ->join('tendor_req_actions','tendor_req_actions.tendor_req_id','=','tendor_requests.id')
       ->paginate(4);

 

        return view('Admin.tendor_request.tendor_request',compact('tendor'),['admin'=>$admin]);
    }
    public function edit_tendor_req($id){
        
        $category = Category::all();
        $admin = User::find(1);
        

        $tendor = DB::table('tendor_requests')->select('customers.*','tendor_requests.*', 'sub_categories.*','categories.*','tendor_requests.id as tendorId', 'tendor_requests.updated_at as tendorend')
        ->join('businesses','businesses.business_category','=','tendor_requests.subcategory_id')
        ->join('sub_categories','sub_categories.id','=','tendor_requests.subcategory_id')
        ->join('categories','categories.id','=','sub_categories.category_type')
        ->join('customers','customers.id','=','tendor_requests.customer_id')
        ->where('tendor_requests.id',$id)
       ->get();

    //    print_r($tendor['sample_image']); die();

       return view('Admin.tendor_request.edit_tendor_request',compact('tendor','category'),['admin'=>$admin]);


    }
    public function view_tendor_req($id){
        $admin = User::find(1);

        $tendor = DB::table('tendor_requests')->select('customers.*','customers.name as cu_name','customers.lname as cu_lname', 'tendor_requests.*', 'sub_categories.*','categories.*','tendor_requests.id as tendorId', 'tendor_requests.updated_at as tendorend')
        ->join('businesses','businesses.business_category','=','tendor_requests.subcategory_id')
        ->join('sub_categories','sub_categories.id','=','tendor_requests.subcategory_id')
        ->join('categories','categories.id','=','sub_categories.category_type')
        ->join('customers','customers.id','=','tendor_requests.customer_id')
        ->OrWhere('tendor_requests.id','=',$id)
       ->get();

       $vendor_id = Tendor_req_action::where('tendor_req_id',$id)->pluck('vendor_req_id')->toArray();

    //    print_r($vendor_id); die();

       $vendor_li = Vendor::whereIn('id',$vendor_id)->get();


       return view('Admin.tendor_request.view_tendor_req',compact('tendor','vendor_li'),['admin'=>$admin]);

    }

    public function update_tendor_req(Request $request, $id){

        $tendor = Tendor_request::find($id);    


        if($request->hasFile('sample_image')){
        
          $sample_image = $request->file('sample_image')->getClientOriginalName();
          $request->file('sample_image')->move(env('AD_IMG_URL').'upload_images/tendor_sample_image', $sample_image);
          

          }
          if($request->hasFile('sample_image')){

          $tendor->sample_image=$sample_image;
        }

        $tendor->tendor_title = $request->tendor_title;
        $tendor->tendor_description = $request->tendor_description;
        $tendor->category_id = $request->category;
        $tendor->subcategory_id = $request->subcategory;

        $tendor->save();
        return redirect()->back()->with('SuccessMsg','Tendor Successfully updated');

    }


    
public function sub_category_home(){

    $admin = User::find(1);

    $category = DB::table('home_categories')
    ->select('home_categories.*','sub_categories.*', 'sub_categories.sub_category as name','home_categories.id as home_id')
    ->join('sub_categories','sub_categories.id','=','home_categories.sub_category')->get();

    return view('Admin.Designs.sub_category_home', compact('category'),['admin'=>$admin]);

}

public function delete_category_home($id){

    HomeCategory::find($id)->delete();
    return redirect()->back()->with('SuccessMsg','Category Deleted Successfully' );

}

public function add_home_category(){
    $admin = User::find(1);

    $category_li = Sub_category::all();

    return view('Admin.Designs.add_sub_category_home',compact('category_li'),['admin'=>$admin]);

}

public function add_category_home(Request $request){

    
    $add_cat = New HomeCategory;

    if($request->hasFile('background_image')){
        
        $background_image = $request->file('background_image')->getClientOriginalName();
        $request->file('background_image')->move(env('AD_IMG_URL').'upload_images/category_home_image', $background_image);
        $add_cat->background_image=$background_image;


        }

        
    if($request->hasFile('centered_image')){
        
        $centered_image = $request->file('centered_image')->getClientOriginalName();
        $request->file('centered_image')->move(env('AD_IMG_URL').'upload_images/category_home_image', $centered_image);
        $add_cat->centered_image=$centered_image;


        }
        $add_cat->place = $request->place;

        $check_place = HomeCategory::where('place',$request->place)->get();

        if(sizeof($check_place)){
            return redirect()->back()->with('SuccessMsg','Place Already Exist');
        }
        

        $add_cat->sub_category = $request->sub_category;
     
        $add_cat->save();
  
        return redirect()->back()->with('SuccessMsg','Category Successfully Added');

}

public function edit_home_category($id){

    $admin = User::find(1);

    $category_li = Sub_category::all();

    $category = HomeCategory::find($id);

    // print_r($category->sub_category); die();
    $cate_main = Sub_category::find($category->sub_category);

    return view('Admin.Designs.edit_home_category',compact('category_li'), ['admin'=>$admin,'category'=>$category, 'cate_main'=>$cate_main]);

}


public function update_category_home(Request $request, $id){


    $update =  HomeCategory::find($id);
    $update_check =  HomeCategory::find($id);

    if($request->hasFile('background_image')){
        
        $background_image = $request->file('background_image')->getClientOriginalName();
        $request->file('background_image')->move(env('AD_IMG_URL').'upload_images/category_home_image', $background_image);
        $update->background_image=$background_image;


        }

        
    if($request->hasFile('centered_image')){
        
        $centered_image = $request->file('centered_image')->getClientOriginalName();
        $request->file('centered_image')->move(env('AD_IMG_URL').'upload_images/category_home_image', $centered_image);
        $update->centered_image=$centered_image;


        }
        $update->place = $request->place;

        if ($update_check->place != $request->place) {

            $check_place = HomeCategory::where('place',$request->place)->get();

            if(sizeof($check_place)){
                return redirect()->back()->with('SuccessMsg','Place Already Exist');
            }
           
        }

        $update->sub_category = $request->sub_category;
     
        $update->save();
  
        return redirect()->back()->with('SuccessMsg','Category Successfully Updated');
}
     


public function business_analytics(){

    $admin = User::find(1);

    $business = Business::all();

    return view('Admin.analytics.business_analytics',compact('business'),['admin'=>$admin]);

}

public function view_business_analytics($id){

    $admin = User::find(1);

    $data1 = DB::table('business_analytics')->select('business_analytics.*','vendors.*','businesses.*', 'business_analytics.updated_at as date')
    ->join('vendors','vendors.id' , '=' , 'business_analytics.user_info')
    ->join('businesses','businesses.id' , '=' ,  'business_analytics.business_id')->where('business_id',$id)
    ->where('role', 'Vendor')->get();

    $data2 = DB::table('business_analytics')->select('business_analytics.*','customers.*','businesses.*', 'business_analytics.updated_at as date')
    ->join('customers','customers.id' , '=' , 'business_analytics.user_info')
    ->join('businesses','businesses.id' , '=' ,  'business_analytics.business_id')->where('business_id',$id)
    ->where('role', 'Customer')->get();

    $data3 = DB::table('business_analytics')->select('business_analytics.*','businesses.*', 'business_analytics.updated_at as date')
    ->join('businesses','businesses.id' , '=' ,  'business_analytics.business_id')->where('business_id',$id)
    ->where('role', 'Unknown')->get();

    $click_tl = DB::table('business_analytics')->where('business_id',$id)
    ->get()->sum('clicks');

    $lead_tl = DB::table('business_analytics')->where('business_id',$id)
    ->get()->sum('leads');

    $analytical = Analytic::find(1)->get();

    foreach ($analytical as $count){
        if($click_tl =! 0){
       $click_through = round(($click_tl/$count->views));
        }
        else{
            $click_through = 0;
        }
    }
    if($click_tl != 0){
    $c_r = $lead_tl / $click_tl;
    }
    else{
       $c_r = 0; 
    }

    return view('Admin.analytics.view_business_analytics',compact('data1', 'data2', 'data3') ,['c_r'=>$c_r,'click_through'=>$click_through,'analytical'=>$analytical,'click_tl'=>$click_tl,'lead_tl'=>$lead_tl,'admin'=>$admin]);

}
}