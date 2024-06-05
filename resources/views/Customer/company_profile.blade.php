<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Company profile</title>


  {{-- Css from assets --}}
  <link href="{{ asset('assets/css/company_profile.css') }}" rel="stylesheet">

{{-- bootsnipp CDN link --}}
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->




	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
  {{-- boot icon --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">


    <!-- Fontawsome icon CDN-->
        {{-- google map --}}
<script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js"></script>
<link
href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css"
rel="stylesheet" />

 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


</head>
<body>

{{-- -----------------------header portion----------------------- --}}


<div class="container-fluid bg-no-overlay"   style="background-image:url({{asset('assets/images/cons2.jpg')}});    background-repeat: no-repeat;
background-size: cover; background-position: center center;    left: 0;right: 0;color: #fff;  height: 471px; width:100%;">




<div class = "row">
<div class ="col-md-12">

<div class = "logo"> 

  <img class="logo-img" src="{{ asset('assets/images/logo.png') }}" alt="">

</div>




<div class = "profile_menu d-flex">
<li class="nav-item dropdown dmenu">
        <a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown">
 @if($customer->profile_image == null)
     <img class="logo-img" src="{{ asset('assets/images/man1.jpg') }}" alt="">  
 @else
     <img class="logo-img" src="{{ asset('storage/customer_profile/'.$customer->profile_image) }}" alt="">           
 @endif
      </a>
     
        <div class="dropdown-menu sm-menu">   
           {{-- <a class="dropdown-item" href="#">Dashboard</a> --}}
          <a class="dropdown-item" href="{{route('vendor')}}">My Profile</a>
                         <hr>


          <a class="dropdown-item" href="#">Tendor </a>
                         <hr>


        
     <a class = "dropdown-item" href="{{ route('customer_logout') }}" onclick="event.preventDefault();
     document.getElementById('logout-form').submit();"  >Logout</a>

 <form id="logout-form" action="{{ route('customer_logout') }}" method="POST" style="display: none;">
  @csrf
    </form>



        </div>
      </li>

{{-- 
      <li class="add_buisness">

      @if($vendor_bl >= $business_listing)

        <a href="{{route('vendor_package',$plan_detail->id)}}">Add Buisness</a>

        @else
        <a href="{{route('add_business')}}">Add Buisness</a>

        @endif

      </li> --}}
    


      </div>
</div>
</div>

<div class = "row">

<div class = "col-md-12">

<div class = "top_left_logo ">

<div class = "logo_bottom">
@if($customer->profile_image == null)
<img class="logo-bottom" src="{{ asset('assets/images/man1.jpg') }}" alt="">
@else
<img class="logo-bottom" src="{{ asset('storage/customer_profile/'.$customer->profile_image) }}" alt="">
@endif
</div>

<div class = "logo_info">
<div class = "logo_name mt-5">
<h1>{{$customer->name}} {{$customer->lname}}</h1>
</div>
</div>
</div>

<div class = top_right>
<div class = "rq_call">
<h1><a href = "{{route('request_call',$business->id)}}">Request Call</a></h1>
</div>

<div class = "view_broch">
<h1>View Brochure</h1>
</div>

</div>



</div>


</div>
</div>
</div>

{{-- -----------------------header end--------------------------- --}}

<div class  = "container body_top">

 <div class="row">
                                    <div class="col-md-12">
                                        <div class="m-2">
                    
                                            @if (session('SuccessMsg'))
                    
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    
                                                {{ session('SuccessMsg') }}
                    
                                            </div>
                                            @endif
                    
                                        </div>
                                    </div>
                                </div>

<div class = "row">
<div class = "col-md-8 ">

<div class = "body_part">
<div class = "business_detail mt-3">

<br>
<br>


<div class = "business_title">

<h1>Discription</h1>

</div>
<hr>

<div class = "business_image">
 <img class="logo-bottom rounded" src="{{ asset('storage/business_image/'.$business->business_image) }}" alt="">

</div>

<div class = "business_para">

<p>{{$business->business_description}}</p>
</div>
<br>
<br>




</div>
</div>


<div class = "product_part">
<br>
<div class = "product ">



<div class = "product_title ">

<h1>Product and services </h1>

</div>


<div class = "product_dtail">

<table class="table table-responsive">
  <thead>
    <tr>
      <th class = "p_title"  scope="col">Product/service</th>
      <th class = "p_cat"  scope="col">Category</th>
      <th class = "p_d"  scope="col">Discription</th>
      <th class = "p_price"  scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($data as $key => $item)

    <tr>
      <td class = "title"> <img class="product_logo_td" src="{{ asset('storage/product_image/'.$item->product_image) }}" alt="">
        {{$item->product_name}}</td>
      <td class = "category">{{$item->sub_category}}</td>
      <td class = "d">{{$item->product_description}}</td>
      <td class = "price">{{$item->product_price_from}} - {{$item->product_price_to}}</td>
    </tr>

    @endforeach
  
   
  </tbody>
</table>
<br>
<br>

</div>
</div>
</div>


<div class = "row">

<div class = "col-md-12">

<div class = "gallery">

<div class = "gallery_main">
<br>
<br>

<div class = "gallery_title mb-2">

<h1>Gallery</h1>

</div>
<hr>
<div class = "gallery_image mt-3 mb-5">
  @foreach ($gallery_image as $key => $image)


<img class="product_logo_td" src="{{ asset('storage/gallery_image/'.$image->gallery_image) }}" alt="">

@endforeach


</div>
<br>
<br>

</div>

</div>

</div>
</div>










<div class = "row">

<div class = "col-md-12">

<div class = "gallery">

<div class = "gallery_main">
<br>

<div class = "gallery_title">

<h1>Item Reviews</h1>

</div>
<div class = "comment ">
@foreach($reviewOne as $item_one)
<div class = "comment_li mt-2">
<div class = "comment_flex d-flex ">

<div class = "u_image">
@if($item_one->profile_image == null)
<img class="" src="{{ asset('assets/images/man1.jpg') }}" alt="">

@else
<img class="" src="{{ asset('storage/customer_profile/'.$item_one->profile_image) }}" alt="">
@endif
</div>
<div class = "u_d ml-2 mx-5 ">

<div class= "d-flex">

<div class= "u_name">
<h1>{{$item_one->customer_name}}</h1>
</div>
<div class = "u_date">
<h1><i class="fa fa-calendar" aria-hidden="true"></i> {{$item_one->updated_at}}</h1>
</div>
</div>

<div id="stars-existing" class="starrr" data-rating='{{$item_one->rating}}'></div>
</p>{{$item_one->review}}</p>
</div>
</div>
</div>

@endforeach

</div>




</div>

@foreach($reviewTwo as $item_two)
<div id="read_more"  class = "comment_li mt-2 mb-4">
<div class = "comment_flex d-flex  "  >

<div class = "u_image">
@if($item_two->profile_image == null)
<img class="" src="{{ asset('assets/images/man1.jpg') }}" alt="">

@else
<img class="" src="{{ asset('storage/customer_profile/'.$item_two->profile_image) }}" alt="">
@endif
</div>
<div class = "u_d ml-2 mx-5 ">

<div class= "d-flex">

<div class= "u_name">
<h1>{{$item_two->name}}</h1>
</div>
<div class = "u_date">
<h1><i class="fa fa-calendar" aria-hidden="true"></i> {{$item_two->updated_at}}</h1>
</div>
</div>

<div id="stars-existing" class="starrr" data-rating='{{$item_two->rating}}'></div>
</p> {{$item_two->review}}</p>
</div>
</div>
</div>

@endforeach

<br>
<br>



</div>



</div>


</div>

<div id = "more" class = "view_more mt-5">
<button onclick="read_comment()">View More</button>
</div>

<div id = "less"  class = "view_more mt-5">
<button onclick="read_comment()">View Less</button>
</div>



<form action = "{{route('update_review',$business->id)}}" method = "POST" >
@csrf
{{-- item review --}}
<div class = "item_tl">
<div class = "item_br ">
<br>
<br>

<div class = "item_header">
<h1>Item Review</h1>
</div>
<hr>

<div class = "rating">
<p>Rating</p>

   <div class="row lead">
        {{-- <div id="stars" class="starrr "></div> --}}
         {{-- <h1 class = "" name = "rating" id="count"> --}}
                        {{-- <input type="text" class="form-control" id="count" name = "rating"  placeholder="" required> --}}
    <input id="input-1" name="rating" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="2">


	</div>

</div>

<div class = "comment_area">
<div class = "comment_li">
  <div class="row">
    <div class="col">
        <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" name = "name" placeholder="Your Name" required>
    </div>
    <div class="col">
          <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name = "email" placeholder="Your Email" required>
    </div>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Review</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name = "review" placeholder = "send review" rows="3" required></textarea>
  </div>




</div>


</div>

<div class = "mt-2 mb-2">
<br>
<br>
    <button type = "submit" class = "review-btn mt-2" href = "" class = "">Submit Review</button>
    <br><br>
    <br>
    </div>

</div>
</div>


</form>{{--review form end--}}



</div>{{--col-md-8 end  --}}


<div class = "col-md-4">
@if($vendor_id->verified_vendor == 1)
<div class = "verify">
<h1><span><i class="fa fa-check" aria-hidden="true"></i>
 Verified Listing</span></h1>
</div>
@endif

<div class = "right_tl">
<div class = "right_mge">
<div class = "right_li d-flex">

<div>
@if ($vendor_id->profile_image==null)
    
<img class="" src="{{ asset('assets/images/man1.jpg') }}" alt="">
@else
  <img class="" src="{{ asset('storage/vendor_profile/'.$vendor_id->profile_image) }}" alt="">
 @endif

 </div>

 <div class = "u_name"> 
  <h1>{{$vendor_id->name}} {{$vendor_id->lname}}</h1>
  </div>

  </div>

  </div>

  <div class = "mge_row">
  <form id="contact-form" name="contact-form" action="{{ route('contactmail',$vendor_id->id) }}"  method="POST" enctype="multipart/form-data">
                @csrf

    <div class="form-group change_input">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control" style = "font-size:15px;"  id="exampleInputEmail1" name = "name" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
    <div class="form-group change_input">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" class="form-control" style = "font-size:15px;" id="exampleInputEmail1" name = "email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
    <div class="form-group change_input_mge">
    <label for="exampleInputEmail1">Messages</label>
    <textarea class="form-control" style = "font-size:15px;" id="exampleFormControlTextarea1" name = "message" rows="3" placeholder = "Send a Message....."></textarea>
  </div>

  <div class = "mge_btn">
<h1>
  <button type = "submit" class = "btn ">Send Message</button>
</h1>
</div>

      </form>

<br>
<br>


</div>
</div>



<div class = "time_tl">

<div class = "time_br">
<div class = "time_header d-flex">

<div class = "open_time">
<h1>Opening Time</h1>
<p>{{$business->monday_from}} to {{$business->monday_to}}</p>
</div>

<div class = "open">
<p><span>Open</span></p>
</div>

</div>
</div>



<div class = "d-flex day_time">
<div class = "day">
<p>Monday</p>
</div>
<div class = "timing">
<p>{{$business->monday_from}} to {{$business->monday_to}}</p>
</div>
</div>

<hr>


<div class = "d-flex day_time">
<div class = "day">
<p>Tuesday</p>
</div>
<div class = "timing">
<p>{{$business->tuesday_from}} to {{$business->tuesday_to}}</p>
</div>
</div>

<hr>


<div class = "d-flex day_time">
<div class = "day">
<p>Wednesday</p>
</div>
<div class = "timing">
<p>{{$business->wednesday_from}} to {{$business->wednesday_to}}</p>
</div>
</div>
<hr>


<div class = "d-flex day_time">
<div class = "day">
<p>Thursday</p>
</div>
<div class = "timing">
<p>{{$business->thursday_from}} to {{$business->thursday_to}}</p>
</div>
</div>
<hr>


<div class = "d-flex day_time">
<div class = "day">
<p>Friday</p>
</div>
<div class = "timing">
<p>{{$business->friday_from}} to {{$business->friday_to}}</p>
</div>
</div>
<hr>


<div class = "d-flex day_time">
<div class = "day">
<p>Saturday</p>
</div>
<div class = "timing">
<p>{{$business->staurday_from}} to {{$business->staurday_to}}</p>
</div>
</div>
<hr>
<div class = "d-flex day_time">
<div class = "day">
<p>Sunday</p>
</div>
<div class = "timing">
<p>{{$business->sunday_from}} to {{$business->sunday_to}}</p>
</div>

</div>

</div>
{{-- timing end --}}

{{-- location --}}

<div class = "location_tl">
<div class = "location_br">
<br>
<br>

<div class = "location_header">

<h1>Location</h1>

</div>
<hr>

<div class = "location_map">


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
                                        <br>

</div>

</div>
</div>








{{-- listing end --}}


<div class = "info">
<div class = "info_br">
<br>

<div class= "info_header">
<h1>listing Info</h1>
</div>
<hr>
<div class = "add_info">
<p><i class="fa fa-map-marker" aria-hidden="true"></i> {{$business->location}}, {{$business->city}}, {{$business->country}}</p>
</div>
<br>

</div>
</div>

{{-- location end --}}


<div class = "media_tl">
<div class = "media_br">
<br>

<div class = "media_li">

<a class = "share" href=""><i class="bi bi-share"></i> </a><b></b>
<a href="{{$business->facebook}}"><i class="fab fa-facebook-f"></i></a>
<a href="{{$business->twitter}}"> <i class="fab fa-twitter"></i></a>
<a href="{{$business->instagram}}"><i class="fab fa-instagram"></i></a>
<a href="{{$business->linkedin}}"><i class="fab fa-linkedin"></i></a>

</div>
    <br>

</div>
</div>



</div>
</div>
</div>
</div>

@include('Customer.customer_layout.footer')

</body>
</html>