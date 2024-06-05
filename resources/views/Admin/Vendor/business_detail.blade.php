<!DOCTYPE html>
<!--
Template Name: Frest HTML Admin Template
Author: :Pixinvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/pixinvent_portfolio
Renew Support: https://1.envato.market/pixinvent_portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<!-- Mirrored from www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/ltr/vertical-menu-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Aug 2021 13:05:15 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description"
        content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Admin-Home</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/facon.png') }}">
    <link href="{{ asset('assets/images/facon.png') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link href="{{ asset('app-assets/vendors/css/vendors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/vendors/css/charts/apexcharts.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/vendors/css/extensions/swiper.min.css') }}" rel="stylesheet">
    <!-- END: Vendor CSS-->

        {{-- google map --}}
<script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js"></script>
<link
href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css"
rel="stylesheet" />

    <!-- BEGIN: Theme CSS-->
    <link href="{{ asset('app-assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/bootstrap-extended.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/colors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/components.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/themes/dark-layout.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/themes/semi-dark-layout.min.css') }}" rel="stylesheet">

    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/pages/dashboard-ecommerce.min.css') }}" rel="stylesheet">

    <!-- END: Page CSS-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


    <!-- BEGIN: Custom CSS-->
    <link href="{{ asset('assets/css/adminstyle.css') }}" rel="stylesheet">

    <!-- END: Custom CSS-->
        {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
@include('Admin.admin_layout.header')




                    <div class="row ">
                            <!-- Detail Starts -->
 
               <div class = "back-option mt-1">     
           <h1> <i class="fas fa-home text-light"></i>  <i class="fas fa-chevron-right text-light"></i> <a class="text-light" href="{{ route('admin.home') }}">Home</a>
    <i class="fas fa-chevron-right text-light"></i> <a class="text-light" href="{{ route('vendor_accounts', $vendor_account) }}" >Vendor Accounts</a>
         {{-- <i class="fas fa-chevron-right text-light"></i> <a class="text-light" href="{{ url()->previous() }}" > Vendor Account</a> --}}
         <i class="fas fa-chevron-right text-light"></i> <a class="active_url" href="#" >Business Details</a>
    </h1>
        </div>

                            <div class="col-md-12 card mt-1">
                           

                            <div  class = "cu_header row mx-1 mt-1">
                            <div class = "col-4 px-0 header-cu">
                            <a href = "{{route('vendor_account', $vendor_account)}}">
                            <h1 >Profile Details</h1>
                            </a>

                            </div>
                            <div class = "col-4 px-0 header-cu">
                            <a href = "{{route('company_profile', $vendor_account)}}">
                            <h1 class = "cu_active">Company Details</h1>
                            </a>

                            </div>
                              
                            <div class = "col-4 px-0 header-cu">
                            <a href = "{{route('tendor_detail', $vendor_account)}}">
                            <h1>Tendor Details</h1>
                            </a>

                            </div>
                            </div>
                              <div class="row">
                                    <div class="col-md-12">
                                        <div class="mt-1 ml-2 mr-2">
                    
                                            @if (session('SuccessMsg'))
                    
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    
                                                {{ session('SuccessMsg') }}
                    
                                            </div>
                                            @endif
                    
                                        </div>
                                    </div>
                                </div>


                 


                                <div class="pack-head  m-2">
                                    <h1> Business Details</h1>
                                    
                                </div>




                                
                                <div class = "row border mx-2 mb-2">

                               <div class = 'date'>
                                <p><span>Update date : {{$business->created_at}}</span></p>
                                </div>

                                <div class = 'b_no '>
                                <p><span>Business No : {{$business->id}}</span></p>
                                </div>

                                
                                      
                   

                                <div class = "col-md-12 mt-2">

                    <a href="{{route('company_review',$business->id)}}">

                 <button  type = "submit" class="btn btn-sm btn-primary glow mt-1 mb-1 ml-2 mt-md-2 ">View Review</button>
 
                       </a>


                                
                                    <div class = "row mx-2 mt-0">
                                    
                                  <div class="col-sm-6 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Business recommended </label>
                                 <div class="">

                                 @if($business->recommended == 1)

                                   <P class = " ">Active</p>

                                   @else
                                   <P class = " ">De-active</p>

                                   @endif
                                   </div>
                                   </div>
                                   </div>
                                   </div>



                                   
                                    <div class = "row mx-2 mt-0">
                                    
                                  <div class="col-sm-6 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Business Document </label>
                                 <div class="">
                                   @if($business->business_document == null)

                                   <P class = "ml-2 text-danger">-</p>

                                   @else




                                   
        <p type="button" class="" data-toggle="modal" data-target="#myModal"><b class = "text-primary">View</b> ({{$business->business_document}})</p>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">

<iframe src="{{env('IMG_URL').'upload_images/business_document/'.$business->business_document}}" width="100%" height="600px" frameborder="0"></iframe>


<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        






                                 @endif
                                 </div>
                                 </div>
                                   </div>

                                       <div class="col-sm-6 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Business Brochure </label>
                                 <div class="">
                                   @if($business->business_brochure == null)

                                   <P class = "ml-2 text-danger">-</p>

                                   @else


                                   

                                   
        <p type="button"  data-toggle="modal" data-target="#myModal"><b class = "text-primary">View</b> ({{$business->business_brochure}})</p>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">

<iframe src="{{env('IMG_URL').'upload_images/business_document/'.$business->business_document}}" width="100%" height="600px" frameborder="0"></iframe>

                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        




                                 @endif
                                 </div>
                                 </div>
                                   </div>

                                   </div>
                        

                        

                                <p class = "mt-1 ml-2 header_cp">Business Detail</p>



                                    <div class = "row mx-2 mt-0">
                                    
                                  <div class="col-sm-3 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Business Name</label>
                                 <div class="">
                                 <p> {{$business->business_title}} </p>
                                 </div>
                                 </div>
                                   </div>

                                      <div class="col-sm-3 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Business Category</label>
                                 <div class="">
                                 <p> {{$business->business_category}} </p>
                                 </div>
                                 </div>
                                   </div>

                                     <div class="col-sm-6 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Business Description</label>
                                 <div class="">
                                 <p>  {{$business->business_description}} </p>
                                 </div>
                                 </div>
                                   </div>

                                   </div>


                                   
                                    <label for="staticEmail" class="ml-2 col-form-label">Business Image</label>

                                <div class = "row mt-1 ml-2 mb-2">
                            <div class = "col-sm-12">

                                    <img class="header-img" width = "150px" height = "100px" src="{{env('IMG_URL').'upload_images/business_image/'.$business->business_image}}">
                                    

                               </div>
                               </div>

                                     <hr>

                                <p class = "ml-2 header_cp">Product Detail</p>

                                        @foreach($product as $productchild)



                                    <div class = "border">

                                    <div class = "row mx-2 mt-0">
                                  <div class="col-sm-3 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Product Name</label>
                                 <div class="">
                                 <p> {{$productchild->product_name}} </p>
                                 </div>
                                 </div>
                                   </div>

                                      <div class="col-sm-3 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Product Price To</label>
                                 <div class="">
                                 <p> {{$productchild->product_price_from}} </p>
                                 </div>
                                 </div>
                                   </div>

                                     <div class="col-sm-3 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Product Price To</label>
                                 <div class="">
                                 <p>  {{$productchild->product_price_to}} </p>
                                 </div>
                                 </div>
                                   </div>

                                   <div class="col-sm-3 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Product Category</label>
                                 <div class="">
                                 <p> {{$productchild->product_category}} </p>
                                 </div>
                                 </div>
                                   </div>
                                   </div>
                                  <label for="staticEmail" class="ml-2 col-form-label">Product Image</label>

                                     <div class = "row mt-1 ml-2 mb-2">
                            <div class = "col-sm-12">

                                    <img class="header-img" width = "150px" height = "100px" src="{{env('IMG_URL').'upload_images/product_image/'.$productchild->product_image}}">
                                    

                               </div>
                               </div>
             


                                     
                                    <div class = "row mx-2 mt-0">
                               
                                     <div class="col-sm-12 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Product Description</label>
                                 <div class="">
                                 <p>  {{$productchild->product_description}} </p>
                                 </div>
                                 </div>
                                   </div>
                                   </div>
                                    </div>

                                   @endforeach

                                      <hr>
                                <p class = "ml-2 header_cp">Location</p>

                                     @if($business->lat == null)

                                   <P class = "ml-2 text-danger">-</p>

                                   @else



                                    <div class = "row mx-2 mt-0">
                                    
                                  <div class="col-sm-4 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Area </label>
                                 <div class="">
                                 <p> {{$business->city}} </p>
                                 </div>
                                 </div>
                                   </div>

                                      <div class="col-sm-4 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Province</label>
                                 <div class="">
                                 <p> {{$business->location}} </p>
                                 </div>
                                 </div>
                                   </div>

                                     <div class="col-sm-4 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Country</label>
                                 <div class="">
                                 <p>  {{$business->country}} </p>
                                 </div>
                                 </div>
                                   </div>

                                   </div>


                                   <div class = "mx-2">
                              
                                    <div class = "mt-1 mb-2  " style = "width:100%; height:250px;" id="map"></div>

                                </div>
                                <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js"></script>

                                    <script>

                                         var lat = '{{$business->lang}}';
                                         var lang = '{{$business->lat}}';
                                        mapboxgl.accessToken = 'pk.eyJ1IjoibWF0aGFua3VtYXIzNSIsImEiOiJja3Qyemk4enYwcGV0MnZ1bDNxOTRtanI0In0.OfSbMc8knznVzjackzbycw';
                           
                                        const map = new mapboxgl.Map({
                                        container: 'map', // HTML container id
                                        style: 'mapbox://styles/mapbox/streets-v11', // style URL
                                        center: [lat, lang], // starting position as [lng, lat]
                                        zoom: 13
                                        });
                   
                                        const popup = new mapboxgl.Popup().setHTML(
                                        `<h3>Reykjavik Roasters</h3><p>A good coffee shop</p>`
                                        );
                                         
                                        const marker = new mapboxgl.Marker()
                                        .setLngLat([lat, lang])
                                        .setPopup(popup)
                                        .addTo(map);
                                        </script>
        

@endif
                                   <hr>

                                <p class = "ml-2 header_cp">Contact</p>

                                   
                                    <div class = "row mx-2 mt-0">
                                    
                                  <div class="col-sm-3 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Email </label>
                                 <div class="">
                                 

                               @if($business->email == null)

                                   <P class = "ml-2 text-danger">-</p>

                                   @else
                                 <p> {{$business->email}} </p>
                                 @endif
                                 </div>
                                 </div>
                                   </div>

                                      <div class="col-sm-3 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Mobile.No</label>
                                 <div class="">
                                   @if($business->mobile_no == null)

                                   <P class = "ml-2 text-danger">-</p>

                                   @else
                                 <p> {{$business->mobile_no}} </p>
                                 @endif
                                 </div>
                                 </div>
                                   </div>

                                     <div class="col-sm-3 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Website</label>
                                 <div class="">
                                    @if($business->website == null)

                                   <P class = "ml-2 text-danger">-</p>

                                   @else
                                 <p>{{$business->website}}<a href = "{{$business->website}}" > (view)</a>  </p>
                                 @endif
                                 </div>
                                 </div>
                                   </div>

                                   <div class="col-sm-3 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Fax No</label>
                                 <div class="">
                                     @if($business->fax_no == null)

                                   <P class = "ml-2 text-danger">-</p>

                                   @else
                                 <p>  {{$business->fax_no}} </p>
                                 @endif
                                 </div>
                                 </div>
                                   </div>

                                   </div>





                                   <hr>



                                <p class = "ml-2 header_cp">Social Media</p>


                           

                                   
                                    <div class = "row mx-2 mt-0">
                                    
                                  <div class="col-sm-3 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Facebook </label>
                                 <div class="">
                                   @if($business->faxfacebook_no == null)

                                   <P class = "ml-2 text-danger">-</p>

                                   @else
                                 <p> <a href = "{{$business->facebook}}" > view</a> </p>
                                 @endif
                                 </div>
                                 </div>
                                   </div>

                                      <div class="col-sm-3 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Twitter</label>
                                 <div class="">
                                    @if($business->twitter == null)

                                   <P class = "ml-2 text-danger">-</p>

                                   @else
                                 <p> <a href = "{{$business->twitter}}" > view</a>  </p>
                                 @endif
                                 </div>
                                 </div>
                                   </div>

                                     <div class="col-sm-3 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">LinkedIn</label>
                                 <div class="">
                                      @if($business->linkedin == null)

                                   <P class = "ml-2 text-danger">-</p>

                                   @else
                                 <p><a href = "{{$business->linkedin}}" > view</a>  </p>
                                 @endif
                                 </div>
                                 </div>
                                   </div>

                                   <div class="col-sm-3 px-0">

                                    <div class="form-group ">
                                  <label for="staticEmail" class=" col-form-label">Instagram</label>
                                 <div class="">
                                     @if($business->instagram == null)

                                   <P class = "ml-2 text-danger">-</p>

                                   @else
                                 <p><a href = " {{$business->instagram}}">view</a></p>
                                 @endif
                                 </div>
                                 </div>
                                   </div>

                                   </div>
                             
     
                                </div>
                                </div>


                            </div>

                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


    
 {{--------------------------------------------------------  --}}

 <style>

    #map {
    top: 0;
    bottom: 0;
    max-width: 100%;
    }
    .marker {
    background-image: url('mapbox-icon.png');
    background-size: cover;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    cursor: pointer;
    }
    .mapboxgl-popup {
    max-width: 200px;
    }
    .mapboxgl-popup-content {
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    }
    </style>


    
  


    
    
    
    

    
    
        {{-- ------------------------------------------------------- --}}


    <!-- BEGIN: Customizer-->
    <div class="customizer d-none d-md-block"><a class="customizer-toggle" href="javascript:void(0);"><i
                class="bx bx-cog bx bx-spin white"></i></a>
        <div class="customizer-content p-2">
            <h4 class="text-uppercase mb-0">Theme Customizer</h4>
            <small>Customize & Preview in Real Time</small>
            <a href="javascript:void(0)" class="customizer-close">
                <i class="bx bx-x"></i>
            </a>
            <hr>
            <!-- Theme options starts -->
            <h5 class="mt-1">Theme Layout</h5>
            <div class="theme-layouts">
                <div class="d-flex justify-content-start">
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="layoutOptions" value="false" id="radio-light"
                                    class="layout-name" data-layout="" checked>
                                <label for="radio-light">Light</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="layoutOptions" value="false" id="radio-dark"
                                    class="layout-name" data-layout="dark-layout">
                                <label for="radio-dark">Dark</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="layoutOptions" value="false" id="radio-semi-dark"
                                    class="layout-name" data-layout="semi-dark-layout">
                                <label for="radio-semi-dark">Semi Dark</label>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <!-- Theme options starts -->
            <hr>

            <!-- Menu Colors Starts -->
            <div id="customizer-theme-colors">
                <h5>Menu Colors</h5>
                <ul class="list-inline unstyled-list">
                    <li class="color-box bg-primary selected" data-color="theme-primary"></li>
                    <li class="color-box bg-success" data-color="theme-success"></li>
                    <li class="color-box bg-danger" data-color="theme-danger"></li>
                    <li class="color-box bg-info" data-color="theme-info"></li>
                    <li class="color-box bg-warning" data-color="theme-warning"></li>
                    <li class="color-box bg-dark" data-color="theme-dark"></li>
                </ul>
                <hr>
            </div>
            <!-- Menu Colors Ends -->
            <!-- Menu Icon Animation Starts -->
            <div id="menu-icon-animation">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="icon-animation-title">
                        <h5 class="pt-25">Icon Animation</h5>
                    </div>
                    <div class="icon-animation-switch">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" checked id="icon-animation-switch">
                            <label class="custom-control-label" for="icon-animation-switch"></label>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <!-- Menu Icon Animation Ends -->
            <!-- Collapse sidebar switch starts -->
            <div class="collapse-sidebar d-flex justify-content-between align-items-center">
                <div class="collapse-option-title">
                    <h5 class="pt-25">Collapse Menu</h5>
                </div>
                <div class="collapse-option-switch">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="collapse-sidebar-switch">
                        <label class="custom-control-label" for="collapse-sidebar-switch"></label>
                    </div>
                </div>
            </div>
            <!-- Collapse sidebar switch Ends -->
            <hr>

            <!-- Navbar colors starts -->
            <div id="customizer-navbar-colors">
                <h5>Navbar Colors</h5>
                <ul class="list-inline unstyled-list">
                    <li class="color-box bg-white border selected" data-navbar-default=""></li>
                    <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
                    <li class="color-box bg-success" data-navbar-color="bg-success"></li>
                    <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
                    <li class="color-box bg-info" data-navbar-color="bg-info"></li>
                    <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
                    <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
                </ul>
                <small><strong>Note :</strong> This option with work only on sticky navbar when you scroll page.</small>
                <hr>
            </div>
            <!-- Navbar colors starts -->
            <!-- Navbar Type Starts -->
            <h5>Navbar Type</h5>
            <div class="navbar-type d-flex justify-content-start">
                <div class="hidden-ele mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="navbarType" value="false" id="navbar-hidden">
                            <label for="navbar-hidden">Hidden</label>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="navbarType" value="false" id="navbar-static">
                            <label for="navbar-static">Static</label>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="navbarType" value="false" id="navbar-sticky" checked>
                            <label for="navbar-sticky">Fixed</label>
                        </div>
                    </fieldset>
                </div>
            </div>
            <hr>
            <!-- Navbar Type Starts -->

            <!-- Footer Type Starts -->
            <h5>Footer Type</h5>
            <div class="footer-type d-flex justify-content-start">
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="footerType" value="false" id="footer-hidden">
                            <label for="footer-hidden">Hidden</label>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="footerType" value="false" id="footer-static" checked>
                            <label for="footer-static">Static</label>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="footerType" value="false" id="footer-sticky">
                            <label for="footer-sticky" class="">Sticky</label>
                        </div>
                    </fieldset>
                </div>
            </div>
            <!-- Footer Type Ends -->
            <hr>

            <!-- Card Shadow Starts-->
            <div class="card-shadow d-flex justify-content-between align-items-center py-25">
                <div class="hide-scroll-title">
                    <h5 class="pt-25">Card Shadow</h5>
                </div>
                <div class="card-shadow-switch">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" checked id="card-shadow-switch">
                        <label class="custom-control-label" for="card-shadow-switch"></label>
                    </div>
                </div>
            </div>
            <!-- Card Shadow Ends-->
            <hr>

            <!-- Hide Scroll To Top Starts-->
            <div class="hide-scroll-to-top d-flex justify-content-between align-items-center py-25">
                <div class="hide-scroll-title">
                    <h5 class="pt-25">Hide Scroll To Top</h5>
                </div>
                <div class="hide-scroll-top-switch">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="hide-scroll-top-switch">
                        <label class="custom-control-label" for="hide-scroll-top-switch"></label>
                    </div>
                </div>
            </div>
            <!-- Hide Scroll To Top Ends-->
        </div>

    </div>
    <!-- End: Customizer-->

    {{-- <!-- Buynow Button-->
    <div class="buy-now"><a href="https://1.envato.market/frest_admin" target="_blank" class="btn btn-danger">Buy Now</a>

    </div> --}}
    <!-- demo chat-->
    <div class="widget-chat-demo">
        <!-- widget chat demo footer button start -->
        {{-- <button class="btn btn-primary chat-demo-button glow px-1"><i class="livicon-evo"
    data-options="name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;"></i></button> --}}
        <!-- widget chat demo footer button ends -->
        <!-- widget chat demo start -->
        <div class="widget-chat widget-chat-demo d-none">
            <div class="card mb-0">
                <div class="card-header border-bottom p-0">
                    <div class="media m-75">
                        <a href="JavaScript:void(0);">
                            <div class="avatar mr-75">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images"
                                    width="32" height="32">
                                <span class="avatar-status-online"></span>
                            </div>
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Kiara Cruiser</a></h6>
                            <span class="text-muted font-small-3">Active</span>
                        </div>
                    </div>
                    <div class="heading-elements">
                        <i class="bx bx-x widget-chat-close float-right my-auto cursor-pointer"></i>
                    </div>
                </div>
                <div class="card-body widget-chat-container widget-chat-demo-scroll">
                    <div class="chat-content">
                        <div class="badge badge-pill badge-light-secondary my-1">today</div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>How can we help? 😄</p>
                                    <span class="chat-time">7:45 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat chat-left">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>Hey John, I am looking for the best admin template.</p>
                                    <p>Could you please help me to find it out? 🤔</p>
                                    <span class="chat-time">7:50 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>Stack admin is the responsive bootstrap 4 admin template.</p>
                                    <span class="chat-time">8:01 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-top p-1">
                    <form class="d-flex" onsubmit="widgetChatMessageDemo();" action="javascript:void(0);">
                        <input type="text" class="form-control chat-message-demo mr-75" placeholder="Type here...">
                        <button type="submit" class="btn btn-primary glow px-1"><i
                                class="bx bx-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- widget chat demo ends -->

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>




    <!-- BEGIN: Vendor JS-->
    <script type="text/javascript" src="{{ URL::asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ URL::asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}">
    </script>

    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script type="text/javascript" src="{{ URL::asset('app-assets/vendors/js/extensions/swiper.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/vendors/js/extensions/swiper.min.js') }}"></script>

    <!-- END: Page Vendor JS-->


    <!-- BEGIN: Theme JS-->
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/scripts/configs/vertical-menu-light.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/core/app-menu.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/core/app.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/scripts/components.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/scripts/footer.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/scripts/customizer.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <!-- END: Theme JS-->
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/scripts/pages/dashboard-ecommerce.min.js') }}">
    </script>

    <!-- BEGIN: Page JS-->

</body>
<!-- END: Body-->

<!-- Mirrored from www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/ltr/vertical-menu-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Aug 2021 13:05:18 GMT -->

</html>
