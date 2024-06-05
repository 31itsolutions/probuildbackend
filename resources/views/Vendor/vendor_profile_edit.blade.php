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
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="{{ asset('app-assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/bootstrap-extended.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('app-assets/css/colors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/components.min.css') }}" rel="stylesheet"> --}}



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

                                   <div class="row mt-4 mx-5">
                                  
                                          <div class="col-sm-12 ">
                              @if (session('SuccessMsg'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button>
               
                <p>
                   <span class="glyphicon glyphicon-ok"></span> {{ session('SuccessMsg') }}</p>
            </div>
                    
                           @endif
                  </div>
                   </div>
                    

     <div class="row">
        <div class="col-md-12">

<div class = "row plan_row">
<div class = "col-md-12 ">

<div class = "plan_tl">
<div class = "plan_br plan_col">
<div class = "plan_header">
<h1>My Plan</h1>
</div>

<div class = "plan_detail ">



<div class = "plan_left">

<h1>{{$plan_detail->package_name}}</h1>

<p>Exp in - {{$end_date}}</p>
</div>

<div class = "plan_right">
<a href = "{{route('vendor_package')}}">Upgrade</a>
</div>


</div>

</div>
</div>

</div>
</div>







<div class = "row body_col">
<div class = "col-md-12 ">

<div class = "body_tl">

<div class = "body_header">
<h1>My Profile</h1>
<a href = "{{route('vendor')}}">Back</a>
</div>

<hr>


<form action = "{{route('update_vendor_profile',$vendor->id)}}" method = "POST" enctype="multipart/form-data">
@csrf
<div class = "body_form">

      
      <div class="row image_input">    
        <div class="col-md-12 ">  
            <label for="exampleInputEmail1">Profile Image </label>

              <input type="file" class="form-control" name = "profile_image"   value = "{{$vendor->profile_image}}" id="exampleInputEmail1" placeholder="First Name" >
               <p>{{$vendor->profile_image}}</p>
        </div>
    </div>


    <br>

 <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" name = "fname"   value = "{{$vendor->name}}" id="exampleInputEmail1" placeholder="First Name" >
  </div>

  
 <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" name = "lname"   value = " {{$vendor->lname}}" id="exampleInputEmail1" placeholder="Last Name" >
  </div>



 <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" class="form-control" name = "email" value = "{{$vendor->email}}" id="exampleInputEmail1" placeholder="Email" >
  </div>



 <div class="form-group">
    <label for="exampleInputEmail1">Mobile No</label>
    <input type="text" class="form-control" name = "number" value = "{{$vendor->number}}"  id="exampleInputEmail1" placeholder="Mobile No" >
  </div>



 <div class="form-group">
    <label for="exampleInputEmail1">Area</label>
    <input type="text" class="form-control" name =  "area" value = "{{$vendor->address_1}}"  id="exampleInputEmail1" placeholder="Area" >
  </div>



 <div class="form-group">
    <label for="exampleInputEmail1">City</label>
    <input type="text" class="form-control" name = "city" value = "{{$vendor->address_2}}"  id="exampleInputEmail1" placeholder="City" >
  </div>


 <div class="form-group">
    <label for="exampleInputEmail1"> Province</label>
    <input type="text" class="form-control" name  = "province" value = "{{$vendor->city}}"  id="exampleInputEmail1" placeholder="Province" >
  </div>



 <div class="form-group">
    <label for="exampleInputEmail1">Country</label>
    <input type="text" class="form-control" name = "country" value = "{{$vendor->state}}"  id="exampleInputEmail1" placeholder="Country" >
  </div>



<br>

<div class = "text-center profile_btn">
<button type="submit" class="btn btn-primary">save</button>
</div>

</form>


</div>
</div>


<div class = "company_tl">
<div class = "company_br">
<div class = "company_header">
<h1>My Business</h1>
</div>


<div class = "company_table">

<table class="table ">
  <thead>
  
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Availability</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
     @foreach($business as $key => $item)
         <tr>
      <td>{{$item->business_title}}</td>
      <td>
      
         <div class="custom-control custom-switch custom-switch-glow custom-control-inline">
       <input type="checkbox" class="custom-control-input" {{$item->status == 1 ? 'checked' : ''}}
        value="{{$item->id}}"  onchange="change_status(this.value, 'businesses', '#customSwitchGlow{{$key}}', 'id');" id="customSwitchGlow{{$key}}" >
        <label class="custom-control-label" for="customSwitchGlow{{$key}}">
         </label>
         </div>
      
      
      
      </td>
      <td class = "action">
      <a href = "{{route('vendor_company_profile',$item->id)}}">View</a>
      <a href = "">Edit</a>
      <a href = "">Delete</a>
      
      </td>
    </tr> 
    @endforeach

   
  </tbody>
</table>

</div>



</div>
</div>








</div>
</div> 








        </div>
     </div>



</div>{{--container--}}




@include('Vendor.vendor_layout.footer')

  
</body>
</html>