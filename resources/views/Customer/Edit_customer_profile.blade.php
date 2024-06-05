<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>customer Home</title>


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




@include('Customer.customer_layout.header')




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


     <div class="row cu_body">
        <div class="col-md-12">



            
<form action = "{{route('update_profile_info',$customer->id)}}" method = "POST" enctype="multipart/form-data">
@csrf
<div class = "body_tl">

    <div class = "body_header">
    <h1>Edit Profile Information</h1>
    <a href = "{{route('customer')}}">Back</a>
    </div>
    
    <hr>
    
    <div class = "body_form">
          
         <div class="row image_input">    
        <div class="col-md-12 ">  
            <label for="exampleInputEmail1">Profile Image </label>

              <input type="file" class="form-control" name = "profile_image"   value = "{{$customer->profile_image}}" id="exampleInputEmail1" placeholder="First Name" required>
               <p>{{$customer->profile_image}}</p>
        </div>
    </div>
        <br>
                                   
    
     <div class="form-group">
        <label for="exampleInputEmail1">Full Name</label>
        <input type="text" class="form-control"  name = "fname"  value = "{{$customer->name}} {{$customer->lname}}" id="exampleInputEmail1" placeholder="Enter First Name"required >
      </div>
    
    
    
     <div class="form-group">
        <label for="exampleInputEmail1">Last Name </label>
        <input type="email" class="form-control" name ="lname" value = "{{$customer->email}}" id="exampleInputEmail1" placeholder="Enter Last Name" required>
      </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Email </label>
        <input type="email" class="form-control" name ="email" value = "{{$customer->email}}" id="exampleInputEmail1" placeholder="Enter Email" required>
      </div>
    
    
    
     <div class="form-group">
        <label for="exampleInputEmail1">Mobile No</label>
        <input type="text" class="form-control" name = "mobile" value = "{{$customer->number}}"  id="exampleInputEmail1" placeholder="Enter Mobile.No" required>
      </div>
    
    
    
     <div class="form-group">
        <label for="exampleInputEmail1">Area</label>
        <input type="text" class="form-control" name = "area" value = "{{$customer->address_1}}"  id="exampleInputEmail1" placeholder="Enter Area" required>
      </div>
    
    
    
     <div class="form-group">
        <label for="exampleInputEmail1">City</label>
        <input type="text" class="form-control" name = "city" value = "{{$customer->city}}"  id="exampleInputEmail1" placeholder="Enter City" required>
      </div>
    
    
     <div class="form-group">
        <label for="exampleInputEmail1"> Province</label>
        <input type="text" class="form-control" name = "province" value = "{{$customer->state}}"  id="exampleInputEmail1" placeholder="Enter Province" required>
      </div>
    
    
    
     <div class="form-group">
        <label for="exampleInputEmail1">Country</label>
        <input type="text" class="form-control" name = "country" value = "{{$customer->country}}"  id="exampleInputEmail1" placeholder="Enter Country" required>
      </div>
    
    
    
    <br>
    
    <div class = "text-center profile_btn">
<button type="submit" class="btn btn-primary">save</button>
</div>
    
    </div>
    </div>
    

</form>
        </div>
     </div>



</div>{{--container--}}




@include('Customer.customer_layout.footer')
  
</body>
</html>