<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vendor Home</title>


  {{-- Css from assets --}}
  <link href="{{ asset('assets/css/company_profile.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/vendor.css') }}" rel="stylesheet">

{{-- bootsnipp CDN link --}}
{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="{{ asset('app-assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/bootstrap-extended.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/colors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/components.min.css') }}" rel="stylesheet">



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

  
   <div class = "req_header">
   <h1>Tender Request</h1>
   <p></p>
   </div>

 <div class = "req_body">
   <div class = "req_br">
 

<div class = "react_title">
<h1>Current Request Call</h1>
</div>
<br><br>

@foreach($request_call as $key => $item)



<div class="card reqcall">
<div class = "tendor_inner_header">
<h1> Request Call</h1>
<p>{{$item->sub_category}}</p>
</div>
      <div class = "right_rq">
      <p class = "date_time">{{ $item->tendorend }}</p>
      <p>
    <A href = "{{route('request_call_removed',$item->tendorId)}}">  <i class="fas fa-times"></i></a>
      </p>
      </div>

    <div class="card-header" id="headingTwo{{$item->tendorId}}"> 
      <div class="mb-0 tendor_req_drop">

<div class = "cu_req_call">
        <div class = "cu_info">
        @if ($item->profile_image == null)
            <img class="" src="{{ asset('assets/images/man1.jpg') }}" alt="">           

        @else
    <img class="" src="{{ asset('storage/customer_profile/'.$item->profile_image) }}" alt="">           
        @endif
<p>{{$item->name}} {{$item->lname}}</p>
</div>
</div>
@if($plan_detail->tendor_board == 1)
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo{{$item->tendorId}}" aria-expanded="false" aria-controls="collapseTwo{{$item->tendorId}}">
           <p class = "view">View Details<p> <p><i class="fas fa-star"></i></p>
        </button>
        @else
        <a href = "{{route('vendor_package',$vendor->id)}}">
  <button class="btn btn-link collapsed" >
           <p class = "view">View Details<p> <p><i class="fas fa-star"></i></p>
        </button>
        </a>
        @endif

    

      </div>
    </div>
    <div id="collapseTwo{{$item->tendorId}}" class="collapse" aria-labelledby="headingTwo{{$item->tendorId}}" data-parent="#accordion">
      <div class="card-body">



<div class = "tendor_inner_req">




<div class = "cu_contact">
<h1><i class="fa fa-phone" aria-hidden="true"></i> {{$item->number}} </h1>

<h1><i class="fa fa-map-marker" aria-hidden="true"></i> {{$item->email}}</h1>

<h1><i class="far fa-envelope"></i> {{$item->address_1}}, {{$item->address_2}}, {{$item->state}}</h1>

</div>



<div class = "action_btn">
 

<a type = "submit" class = "accept" href = "{{ route('request_action_accepted', $item->tendorId) }}">Call Back</a>

<a class = "reject" href = "{{ route('request_action_rejected', $item->tendorId) }}">Reject</a>
</div>


</div>



      </div>
    </div>
  </div>
{{-- @endif --}}
{{--   @endforeach --}}
  @endforeach







<div class = "react_title">
<h1>Reacted Request Call</h1>
</div>
<br><br>

@foreach($request_call_action as $key => $item)



<div class="card reqcall">
<div class = "tendor_inner_header">
<h1> Request Call</h1>
<p>{{$item->sub_category}}</p>
</div>
      <div class = "right_rq">
      <p class = "date_time">{{ $item->tendorend }}</p>
      <p>
    <A href = "{{route('request_action_removed',$item->requestCallId)}}">  <i class="fas fa-times"></i></a>
      </p>
      </div>

<div class = "request_call">
         @if( $item->request_call_action ==  1)
        <p
         class = "accepted">Accepted</p>
        @else
        <p class = "rejected">Rejected</p>
        @endif

        </div>

    <div class="card-header" id="headingTwo{{$item->tendorId}}"> 
      <div class="mb-0 tendor_req_drop">

<div class = "cu_req_call">
        <div class = "cu_info">
        @if ($item->profile_image == null)
            <img class="" src="{{ asset('assets/images/man1.jpg') }}" alt="">           

        @else
    <img class="" src="{{ asset('storage/customer_profile/'.$item->profile_image) }}" alt="">           
        @endif
<p>{{$item->name}} {{$item->lname}}</p>
</div>
</div>
@if($plan_detail->tendor_board == 1)
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo{{$item->tendorId}}" aria-expanded="false" aria-controls="collapseTwo{{$item->tendorId}}">
           <p class = "view">View Details<p> <p><i class="fas fa-star"></i></p>
        </button>
        @else
        <a href = "{{route('vendor_package',$vendor->id)}}">
  <button class="btn btn-link collapsed" >
           <p class = "view">View Details<p> <p><i class="fas fa-star"></i></p>
        </button>
        </a>
        @endif

    

      </div>
    </div>
    <div id="collapseTwo{{$item->tendorId}}" class="collapse" aria-labelledby="headingTwo{{$item->tendorId}}" data-parent="#accordion">
      <div class="card-body">



<div class = "tendor_inner_req">




<div class = "cu_contact">
<h1><i class="fa fa-phone" aria-hidden="true"></i> {{$item->number}} </h1>

<h1><i class="fa fa-map-marker" aria-hidden="true"></i> {{$item->email}}</h1>

<h1><i class="far fa-envelope"></i> {{$item->address_1}}, {{$item->address_2}}, {{$item->state}}</h1>

</div>


{{-- 
<div class = "action_btn">
 

<a type = "submit" class = "accept" href = "{{ route('tendor_action_accepted', $item->tendorId) }}">Call Back</a>

<a class = "reject" href = "{{ route('tendor_action_rejected', $item->tendorId) }}">Reject</a>
</div> --}}


</div>



      </div>
    </div>
  </div>
{{-- @endif --}}
{{--   @endforeach --}}
  @endforeach






   </div>
   </div>












        </div>
     </div>



</div>{{--container--}}




@include('Vendor.vendor_layout.footer')
  
</body>
</html>