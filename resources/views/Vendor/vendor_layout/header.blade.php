
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
     @if($vendor->profile_image == null)
         <img class="logo-img" src="{{ asset('assets/images/man1.jpg') }}" alt="">  
     @else
         <img class="logo-img" src="{{ asset('storage/vendor_profile/'.$vendor->profile_image) }}" alt="">           
     @endif
          </a>
         
            <div class="dropdown-menu sm-menu">   
               {{-- <a class="dropdown-item" href="#">Dashboard</a> --}}
              <a class="dropdown-item" href="{{route('vendor')}}">My Profile</a>
                             <hr>


              <a class="dropdown-item" href="{{route('tendor_request',$vendor->id)}}">Tendor Request</a>
                             <hr>

                <a class="dropdown-item" href="{{route('request_call',$vendor->id)}}">Request Call</a>
                             <hr>


                  <a class = "dropdown-item" href="{{ route('vendor.logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"  >Logout</a>

                              <form id="logout-form" action="{{ route('vendor.logout') }}" method="POST" style="display: none;">
                               @csrf
                                 </form>


                     



            </div>
          </li>


          <li class="add_buisness">

          {{-- @if($vendor_bl >= $business_listing) --}}

            <a href="{{route('vendor_package',$plan_detail->id)}}">Add Buisness</a>
{{-- 
            @else
            <a href="{{route('add_business',$vendor->id)}}">Add Buisness</a>

            @endif --}}

          </li>
        


          </div>
</div>
</div>

<div class = "row">

<div class = "col-md-12">

<div class = "top_left_logo ">
<div class = "logo_bottom">
@if($vendor->profile_image == null)
 <img class="logo-bottom" src="{{ asset('assets/images/man1.jpg') }}" alt="">
@else
 <img class="logo-bottom" src="{{ asset('storage/vendor_profile/'.$vendor->profile_image) }}" alt="">
@endif
</div>

<div class = "logo_info">



<div class = "logo_name mt-5">
<h1>{{$vendor->name}} {{$vendor->lname}}</h1>
</div>




</div>
</div>



</div>


</div>
</div>
</div>