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
{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   

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
        <div class="col-md-8">

<div class = "left_body">
<div class = "left_body_tl">
<div class = "left_body_header">
<h1>Checkout</h1>
</div>
<hr>

<div class = "checkout_form">
  <div class="form-row">
    <div class="col-sm">
        <label for="exampleInputEmail1">First Name*</label>
      <input type="text" name = "f_name" class="form-control" placeholder="First name">
    </div>
    <div class="col-sm">
        <label for="exampleInputEmail1">Last Name*</label>
      <input type="text" name = "l_name" class="form-control" placeholder="Last name">
    </div>
  </div>
   <div class="form-row">
    <div class="col-sm">
        <label for="exampleInputEmail1">Country</label>
      <input type="text" name = "country" class="form-control" placeholder="First name">
    </div>
    <div class="col-sm">
        <label for="exampleInputEmail1">Address 1</label>
      <input type="text" name = "address" class="form-control" placeholder="Last name">
    </div>
  </div>
   <div class="form-row">
    <div class="col-sm">
        <label for="exampleInputEmail1">City</label>
      <input type="text" name = "city" class="form-control" placeholder="First name">
    </div>
    <div class="col-sm">
        <label for="exampleInputEmail1">Province/State</label>
      <input type="text" name = "state" class="form-control" placeholder="Last name">
    </div>
  </div>
<br>
  <hr>
<br>
<div class = "credit">

<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Credit Card <i class="fas fa-angle-down"></i>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">

       <div class="form-group">
    <label for="exampleInputEmail1">Card Holder Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Card Holder Name">
  </div>


 <div class="row">
    <div class="col-md">
        <label for="exampleInputEmail1">Expiry Month*</label>
      <input type="text" name = "expiry_date" class="form-control" placeholder="MM">
    </div>
    <div class="col-md">
        <label for="exampleInputEmail1">Expiry Month*</label>
      <input type="text" name = "expiry_month" class="form-control" placeholder="YYYY">
    </div>

      <div class="col-md">
          <label for="exampleInputEmail1">Security Code*</label>
      <input type="text" name = "code" class="form-control" placeholder="CCC">
    </div>
  </div>


      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Debit Card <i class="fas fa-angle-down"></i>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">


             <div class="form-group">
    <label for="exampleInputEmail1">Card Holder Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Card Holder Name">
  </div>


 <div class="row">
    <div class="col-md">
        <label for="exampleInputEmail1">Expiry Month*</label>
      <input type="text" name = "expiry_date" class="form-control" placeholder="MM">
    </div>
    <div class="col-md">
        <label for="exampleInputEmail1">Expiry Month*</label>
      <input type="text" name = "expiry_month" class="form-control" placeholder="YYYY">
    </div>

      <div class="col-md">
          <label for="exampleInputEmail1">Security Code*</label>
      <input type="text" name = "code" class="form-control" placeholder="CCC">
    </div>
  </div>


      </div>
    </div>
  </div>
  
</div>

</div>





  
</div>


</div>
</div>
    

        </div>


           <div class="col-md-4 right_body">

           <div class = "body_right_tl">
           <div class = "body_right_header">
           <h1>Order Summary</h1>
           </div>
           <hr>

           <div class = "card right_card">

           <h1>Pro Build Subscription</h1>

           <p>Individual (Monthly plan)</p>
           <p>Billed Monthly at 750₹</p>
           
           </div>


           <div class = "card_bottom">
           <p>Your subscription will automatically renew each month at the price below.</p>
           <div class = "flex_p">
           <p>Price</p>
           <p class = "right_element">750 BHD</p>
           </div>
              <div class = "flex_p">
           <p>Tax</p>
           <p class = "right_element">0.00</p>
           </div>
              <div class = "flex_p">
           <p>Total</p>
           <p class = "right_element">750 BHD</p>
           </div>
           </div>


                      <h1 class="order_btn">Complete Order</h1>

           
           </div>

    

        </div>
     </div>



</div>{{--container--}}




@include('Vendor.vendor_layout.footer')

  
</body>
</html>