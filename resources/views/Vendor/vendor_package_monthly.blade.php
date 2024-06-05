<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vendor Package</title>


  {{-- Css from assets --}}
  <link href="{{ asset('assets/css/company_profile.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/vendor.css') }}" rel="stylesheet">

{{-- bootsnipp CDN link --}}
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="{{ asset('app-assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/bootstrap-extended.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/colors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/components.min.css') }}" rel="stylesheet">

{{-- w3 icon --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!------ Include the above in your HEAD tag ---------->

   {{-- toggle --}}
     <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">


	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">

  {{-- boot icon --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">


        {{-- google map --}}
<script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js"></script>
<link
href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css"
rel="stylesheet" />

 
    <!-- Fontawsome icon CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


</head>
<body>

@include('Vendor.vendor_layout.header')



<div class  = "container ">

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


     <div class="row">
        <div class="col-md-12">
   
        <div class = "package_header">
        <div  class = "package_h">
         <h1>Choose Your Plans</h1>
        </div>
        </div>
        </div>
     </div>




        <div class="row">
        <div class="col-md-12 package_type_pack">

        <div class = "package_type">
        <a class = "active_type" href = "{{route('vendor_package_monthly')}}">Monthly</a>

        <a class = "y" href = "{{route('vendor_package')}}">Yearly</a>
        </div>

        </div>
     </div>



<div class = "package_tl">
            <div class="row ">
            @foreach ($package_detail as $item)
                
        <div class="col-md-4 package_type_col">
        
        <div class = "package_body">
        <div class = "package_br">

        <div class = "package_name">
        <h1>{{$item->package_name}}  
{{--         
@if ($plan_detail->package_name == $item->package_name && $item->package_type =="M" )

   (Current Package)
@endif --}}


        </h1>
        </div>

        <div class = "package_price">
        <h1>
        {{$item->selling_price}} 
        @if($item->price>0)
        <s>{{$item->price}}</s>
        @endif
        </h1>
        </div>

        <div class = "package_dtail">
        @if ($item->bussiness_listing >0)
          <p><i class="fa fa-check" aria-hidden="true"></i> {{$item->business_listing}} Business listing</p>
        @endif
        @if ($item->product_listing >0)
         <p><i class="fa fa-check" aria-hidden="true"></i> {{$item->product_listing}} Product / Service for each business listing</p>
        @endif
          @if ($item->gallery_image >0)
         <p><i class="fa fa-check" aria-hidden="true"></i>  {{$item->gallery_image}} Images in Gallery for each business listing </p>
        @endif
          @if ($item->company_profile ==1 )
        <p><i class="fa fa-check" aria-hidden="true"></i>  Company Profile </p>
        @endif
          @if ($item->contact == 1)
          <p><i class="fa fa-check" aria-hidden="true"></i>  Contact </p>
        @endif
          @if ($item->Location == 1)
         <p><i class="fa fa-check" aria-hidden="true"></i>  Location </p>
        @endif
          @if ($item->social_media == 1)
        <p><i class="fa fa-check" aria-hidden="true"></i>  Social Media </p>
        @endif
          @if ($item->priority_listing == 1)
        <p><i class="fa fa-check" aria-hidden="true"></i>  Priority in listing </p>
        @endif
          @if ($item->probuild_verify == 1)
          <p><i class="fa fa-check" aria-hidden="true"></i>  Probuild Verified listing </p>
        @endif
         @if ($item->tendor_board == 1)
        <p><i class="fa fa-check" aria-hidden="true"></i>  Tender Board </p>
        @endif

        </div>

        <div class = "package_btn">
        <a href = "">Choose Plan</a>
        </div>


        
        </div>
        </div>
        
        </div>

                    @endforeach
                    </div>

        </div>



</div>{{--container--}}




@include('Vendor.vendor_layout.footer')

  
</body>
</html>