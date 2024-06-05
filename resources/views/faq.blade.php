<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>pro build final</title>
 

  

    <link href="{{ asset('assets/font/knife_princess/knife_princess/KnifePrincess-MMPY.ttf') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.default.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
      .businesses_css .active{
            width: 170px;
    margin-right: 10px;
      } 
      .btn-cart2 {
  height: 40px;
  color: #fff;
  line-height: 40px;
  border-radius: 50px;
  padding: 0 25px;
  background-color: #F4E059;
}

    
</style>
    
  </head>

<body>

  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>


 
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <a href="{{ route('index') }}" class="logo header-logo">

                <img class="logo-img" height="70px" width="30px" src="{{ asset('assets/images/logo.png') }}" alt="">
  
              </a>
            
            <ul class="nav">
              
                @if (Auth::guard('customer')->check())

                <li>
                    <div class="contact.html">
                      <b><a href="{{route('customer')}}">
                       <i class="bi bi-box-arrow-in-right"></i> &nbsp; Customer</a></b>
                    </div>
                </li>

                    @elseif(Auth::guard('vendor')->check())
          
                    <li>
                        <div class="contact.html">
                          <b><a href="{{route('vendor')}}">
                           <i class="bi bi-box-arrow-in-right"></i> &nbsp; Vendor</a></b>
                        </div>
                    </li>
                    @else
                    <li>
                        <div class="contact.html">
                          <b><a href="{{route('vendor_login')}}">
                           <i class="bi bi-box-arrow-in-right"></i> &nbsp; sign in</a></b>
                        </div>
                    </li>
                   
                    @endif
   
         
              
                    @if(Auth::guard('vendor')->check())

              <li><div class="main-white-button"><a href=""> Add a Buisness</a></div></li> 

              @elseif (Auth::guard('customer')->check())

              <li><div class="main-white-button"><a href="#"> Add a Buisness</a></div></li> 

              @else
              <li><div class="main-white-button"><a href="{{ route('vendor_login') }}"> Add a Buisness</a></div></li> 
@endif

            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
       
          </nav>
        </div>
      </div>
    </div>
  </header>

 
  <div class="main-banner" style="height: 650px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="top-text header-text">
            <img src="{{ asset('images/Build_Your_Dream.png') }}" style="height: 49px;width: 600px;margin-top: -162px;">
            <!-- <h2 style="margin-top: -136px;font-family:Knife Princess">BUILD YOUR DREAM</h2> -->
          </div>
        </div>
        <div class="col-lg-12">
          <form id="search-form" name="searchText" method="GET" role="search" action="{{ route('searchText') }}" style="">
            @csrf 
            <div class="row" >
              <div class="col-lg-3 align-self-center">
                  <fieldset>
                     <div class="selectlogo1"><img src="{{ asset('assets/images/search.png') }}" style="height: 20px;width: 20px;margin-top: 5px;"></div>
                     <input type="address" name="looking" class="searchText_1" placeholder=" what are you looking for?" autocomplete="on">   
                  </fieldset>
              </div>
              <div class="col-lg-3 align-self-center">
                  <fieldset>
                      <div class="selectlogo1"><img src="{{ asset('assets/images/location.png') }}" style="height: 20px;width: 20px;margin-top: 2px; margin-left: 8px;"></div>
                      <input type="address" name="location" class="searchText" placeholder=" location" autocomplete="on" >
                  </fieldset>
              </div>
              <div class="col-lg-3 align-self-center">
                  <fieldset>
                     <div class="selectlogo2"><img src="{{ asset('assets/images/shopping.png') }}" style="height: 20px;width: 20px;margin-top: 5px;"></div>
                      
                    <div class="dropdown cat_dropdown" style="text-align: left;">
                      <button class="btn btn-default dropdown-toggle cat_button" type="button" data-toggle="dropdown"><span>Category</span></button>
                      <ul class="dropdown-menu">
                        @foreach($data['category'] as $key=>$cat1)
                        <li class="dropdown-submenu" style="border-bottom: 1px solid #e0e4f6;display: block;background: #f8fafc;padding: inherit;">
                          <a class="test" tabindex="-1" href="#"> {{ $cat1['category'] }}<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            @foreach($data['subCategory'] as $key=>$subCat)
                            @if($cat1['id'] == $subCat['category_type'])
                            <li style=""><a tabindex="-1" href="{{ route('subCategorys',$subCat['id']) }}" >{{ $subCat['sub_category'] }}</a></li>
                            @endif
                            @endforeach
                          </ul>
                        </li>
                        @endforeach
                        
                      </ul>

                    </div>
                     
                  </fieldset>

                   @foreach($data['category'] as $key=>$cat)

                   @endforeach
                  
              </div>
              <div class="col-lg-3">                        
                  <fieldset>
                      <button class="main-button" type="submit" style="margin-bottom: 8px;margin-right: -51px;"><span>Search</span></button>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
        <!-- <div class="col-lg-10 offset-lg-1">
            <ul class="categories">
                @foreach( $data['category'] as $val )
                <li><a><span class="icon" onclick="sub_category({{$val['id']}})"><img src="{{asset('assets/images/'.$val['category_icon'])}}" alt="Home"></span> <span>{{ $val['category'] }}</span></a></li>
                @endforeach
              </ul>
        </div> -->

      <div id="testimonials" style="margin-top: 47px;margin-right: 6px; margin-bottom:15px;" class="container" style="padding-left: 80px">
        <div class="owl-carousel owl-theme category_carousel" id="">
          @foreach($data['category'] as $key=> $val)
            <div class="item" style="text-align:center;width: 66px;" ><a  onclick="sub_category({{$val['id']}})"  href="#" class="icon"><img class="icon" src="{{asset('assets/images/'.$val['category_icon'])}}" id="category_img" style="background: rgba(244, 224, 89, 0.53);margin-bottom:10px" ><span style="color: #FFFFFF;font-size: 17px;">{{ $val['category'] }}</span></a>
            </div>   
            @endforeach   
        </div>
      </div>
      

      </div>
    </div>
  </div>

<body style="background: #E5E5E5;">
        

        <div class="container">

          <div class="row">
            
         
            <div class="col-md-12" style="background: #FFFFFF;">
              <h3 class="" style="text-align: center;">FAQ</h3>
              <hr>
              <h3>Message Us</h3>
                <form action="{{ route('addFAQ_us') }}" id="contactForm_data" method="POST" enctype="multipart/form-data">
                   @csrf
                      <div class="col-md-12">
                          <p style="color: #495E96">Name</p>
                          <div class="form-group">
                            
                              <input type="text" style="background: rgba(215, 215, 215, 0.23);" id="lorem_ipsum1"
                                  class="form-control" value="{{ $data['faq']['title'] }}" name="lorem_ipsum1">
                                  
                          </div>

                      </div>
                      <div class="col-md-12">
                        <p>{{ $data['faq']['title_description'] }}
                        </p>
                      </div>

                      <div class="col-md-12">
                          <!-- <p style="color: #495E96">Email</p> -->
                          <div class="form-group">

                              <input type="text" style="background: rgba(215, 215, 215, 0.23);" name="contact_email" id="contact_email"
                                  class="form-control" value="{{ $data['faq']['title'] }}" name="lorem_ipsum2" multiple="">
                          </div>

                      </div>
                      <div class="col-md-12">
                          <!-- <p style="color: #495E96">Subject</p> -->
                          <div class="form-group">

                              <input type="text" style="border-radius: 3px;background: rgba(215, 215, 215, 0.23);" name="contact_subject" id="contact_email"
                                  class="form-control" value="{{ $data['faq']['title'] }}" name="lorem_ipsum3" multiple="">
                          </div>

                      </div>
                      <div class="col-md-12">
                          <!-- <p style="color: #495E96">Message</p> -->
                          <div class="form-group">

                              <input type="text" style="border: 1px solid #E1E1E1;height: 100px;background: rgba(215, 215, 215, 0.23);" name="contact_message" id="contact_email"
                                  class="form-control" value="{{ $data['faq']['title'] }}" name="lorem_ipsum4" multiple="">
                          </div>
                      </div>
                </form>
            </div>
         </div>
        </div>
        
        
    
    
</body>

    
<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3> Ready to get started ?<span></span></h3>
                 <button id="addb"> <a href="index2.html">Add Buisness</a></button>
           
                 <div class="terms"><a href="{{ route('termsAndConditions') }}"> Terms & Conditions</a> &nbsp; <a href="{{ route('privacyPolicy') }}"> Privacy Policy</a></div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Pro Buid</h4>
            <ul>
              <li> <a href="{{ route('about_usPage') }}">About us</a></li>
             
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Help</h4>
            <ul>
              <li><a href="{{ route('faq_page') }}">FAQs</a></li>
              <li><a href="{{ route('content_us') }}">contact us</a></li>
              
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Quick Links</h4>
             <ul>
              <li><a href="#">
              Browser category</a></li>
              <li><a href="#">Serch business</a></li>
              <li><a href="#">Login to your account</a></li>
             </ul>
            <div class="social-links mt-3">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
            
            </div>
          </div>
        </div>
      </div>
     </div>
  </footer>

<?php 
$host = url('http://localhost/mindnotix/admin/probuild/public/assets/images/');
 ?>

  <script type="text/javascript" src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/js/animation.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/js/imagesloaded.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/js/styles.js') }}"></script>
  <script type="text/javascript">
  
  function sub_category(id) {
      // var val = id;
      $('.subCat').addClass('hide');
      $('.cat_'+id).removeClass('hide');    
  }
  
    $('.sub_cat_carousel').owlCarousel({
                                    loop:true,
                                    margin:10,
                                    nav:false,
                                    dots:true,
                                    responsive:{
                                        0:{
                                            items:4
                                        },
                                        600:{
                                            items:4
                                        },
                                        1000:{
                                            items:4
                                        }
                                    }
                                });

     $('.category_carousel').owlCarousel({
                                    loop:false,
                                    margin:10,
                                    nav:true,
                                    dots:false,
                                    responsive:{
                                        0:{
                                            items:4
                                        },
                                        600:{
                                            items:4
                                        },
                                        1000:{
                                            items:5
                                        }
                                    }
                                });
  


// });
    </script>
     <script type="text/javascript">
              
        

     function modal_submit() {
       alert();
       var email = $('#email').val();
       var password = $('#password').val();
            $.ajax({
                url: '{{ url('login/vendor') }}',
                data: {
                    'email': email,
                    'password': password,
                },
                type: "POST",
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                success: function(data) {
                  location.reload();

                },

            });
     }
  </script>
    <script type="text/javascript">
      $('.business_carousel').owlCarousel({
                                    loop:false,
                                    margin:10,
                                    nav:true,
                                    dots:false,
                                    responsive:{
                                        0:{
                                            items:4
                                        },
                                        600:{
                                            items:4
                                        },
                                        1000:{
                                            items:4
                                        }
                                    }
                                });
    </script>
    <script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

</body>

</html>
