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
    <!-- <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
  <style>
      .businesses_css .active{
            width: 170px;
    margin-right: 10px;
      } 
    
</style>
    
  </head>

<body class="searchList">

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
              <div class="col-lg-3 align-self-center" style="margin-top: 14px;">
                  <fieldset>
                     <div class="selectlogo1"><img src="{{ asset('assets/images/search.png') }}" style="height: 20px;width: 20px;margin-top: 5px;"></div>
                     <input type="address" name="looking" class="searchText_1" placeholder=" what are you looking for?" autocomplete="on" required>   
                  </fieldset>
              </div>
              <div class="col-lg-3 align-self-center" style="margin-top: 14px;">
                  <fieldset>
                      <div class="selectlogo1"><img src="{{ asset('assets/images/location.png') }}" style="height: 20px;width: 20px;margin-top: 2px; margin-left: 8px;"></div>
                      <input type="address" name="location" class="searchText" placeholder=" location" autocomplete="on" >
                  </fieldset>
              </div>
              <div class="col-lg-3 align-self-center" style="margin-top: 8px;">
                  <fieldset>
                     <div class="selectlogo2"><img src="{{ asset('assets/images/shopping.png') }}" style="height: 20px;width: 20px;margin-top: 5px;"></div>
                      <!-- <select name="price" class="form-select category-li" aria-label="Default select example"  id="chooseCategory"  onchange="this.form.click()">
                          <option class="choose" selected>Choose category</option>
                          @foreach( $data['category'] as $val )
                          <option value="{{ $val['id'] }}" >{{ $val['category'] }}</option>
                          @endforeach
                      </select> -->
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

       <div id="testimonials" style="margin-top: 137px;margin-right: 6px; margin-bottom:15px;" class="" style="padding-left: 80px">
        <div class="owl-carousel owl-theme category_carousel" id="">
          @foreach($data['category'] as $key=> $val)
            <div class="item" style="text-align:center;" >
              <a  onclick="sub_category({{$val['id']}})"  href="#" class="icon">
                <p class="carosal_css" style="">
              <img class="icon" src="{{asset('assets/images/'.$val['category_icon'])}}" id="category_img" style="display: block;width: 30px;margin-bottom:10px;margin: 0 auto;" >
              </p>
              <span style="color: #FFFFFF;font-size: 17px;">{{ $val['category'] }}</span>
              
            </a>
            </div>   
            @endforeach   
        </div>
      </div>
      

      </div>
    </div>
  </div>

  <div class="container">
      <div class="popular">
          <section id="about">
            <div class="container">
              <div class="row about-cols">
                <div class="row">
                  <div class="col-md-6">
                    <h1 style="margin-left: 150px;text-align: center;margin-top: -10px;font-weight: bold;font-size: 26px;">Search For Result</h1>
                  </div>
                  <div class="col-md-5">
                    <button type="button" data-toggle="modal" data-target="#myModal" class="filter" ><i class="bi bi-funnel-fill" style="font-size: 20px"></i><span style="font-size:18px">Filter</span></button>
                  </div>
                </div> 
                <div class="container">
                      <div class="modal fade modal_css" id="myModal" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="clear_filter" id="clear_filter" data-dismiss="modal"><span style="font-size:18px">Clear Filter</span></button>
                              <!-- <h4 class="modal-title">Modal Header</h4> -->
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-md-6">
                                    <ul class="nav nav-tabs filter_nav">
                                      <li class="active"><a data-toggle="tab" href="#rating" style="color:#565657">Rating</a></li>
                                      <li><a data-toggle="tab" href="#location" style="color:#565657">Location</a></li>
                                      <li><a data-toggle="tab" href="#category" style="color:#565657">Category</a></li>
                                      <li><a data-toggle="tab" href="#probuild_verifi" style="color:#565657">Probuild Verified</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6" style="height: 37px;">
                                    <div class="tab-content">
                                      <div id="rating" class="tab-pane fade in active">
                                        <label>Rating</label>
                                        <div>
                                          <input type="radio" name="rating_search" value="5">
                                          <label>4 <i class="fa fa-star" aria-hidden="true"></i> &above</label>
                                        </div>
                                        <div>
                                        <input type="radio" name="rating_search" value="4">
                                        <label>3 <i class="fa fa-star" aria-hidden="true"></i>& above</label>
                                        </div>
                                        <div>
                                        <input type="radio" name="rating_search" value="3">
                                        <label>2 <i class="fa fa-star" aria-hidden="true"></i> &above</label>
                                        </div>
                                        <div>
                                        <input type="radio" name="rating_search"value="2">
                                        <label>1 <i class="fa fa-star" aria-hidden="true"></i> &above</label>
                                        </div>
                                      </div>
                                      <div id="location" class="tab-pane fade">
                                        <label>Location</label>
                                        <select id="filter_location" name="filter_location">
                                          <option selected >Select</option>
                                          @foreach($data['business_location'] as $key=>$val)
                                          <option value="{{ $val }}">{{ $val }}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                      <div id="category" class="tab-pane fade">
                                        <label>Category</label>
                                        <select id="filter_category" name="filter_category">
                                          <option selected >Select</option>
                                          @foreach($data['category'] as $key=>$cat)
                                          <option value="{{ $cat['id'] }}">{{ $cat['category'] }}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                      <div id="probuild_verifi" class="tab-pane fade">
                                        <h3>Menu 3</h3>
                                        <p>Product verifi</p>
                                      </div>
                                    </div>
                                </div>

                              </div>
                            </div>
                            <div class="modal-footer">
                              <div class="row">
                                <div class="col-md-6" style="">
                                  <p>456</p>
                                  <p style="color: #939393;font-size: 10px;">Listing Found</p>
                                </div>
                                <div class="col-md-6">
                                  <button type="button" class="apply_filter" onclick="filter_apply()" id="filter_apply" data-dismiss="modal">Apply</button>
                                </div>
                                
                                
                              </div>
                              
                            </div>
                          </div>
                          
                        </div>
                      </div> 
                </div> 
                <div id="filter_data">
                @foreach($data['arr'] as $key => $val)
              <div class="col-md-3" data-aos="fade-up" data-aos-delay="50">
                <div class="about-col">
                  <div class="img">
                    <img src="{{asset('assets/images/'.$subCat->sub_category_icon)}}" alt="" class="img-fluid zoom_img">
                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                  </div>
                  <h2 class="title"><a href="#">{{ $val['business_title'] }}</a></h2>
                            <div class="rate">
                               <input type="radio" id="star5" name="rate" value="5" />
                               <label for="star5" title="text">5 stars</label>
                               <input type="radio" id="star4" name="rate" value="4" />
                               <label for="star4" title="text">4 stars</label>
                               <input type="radio" id="star3" name="rate" value="3" />
                               <label for="star3" title="text">3 stars</label>
                               <input type="radio" id="star2" name="rate" value="2" />
                               <label for="star2" title="text">2 stars</label>
                               <input type="radio" id="star1" name="rate" value="1" />
                               <label for="star1" title="text">1 star</label>
                            </div>
                            <br>
                            <div class="location">{{ $val['city'] }},{{ $val['location'] }},{{ $val['country'] }}</div>
                          @if (Auth::guard('customer')->check())
                          <p> <b><a href="#">views</a></b></p>
                          @else
                          <p> <b><a href="{{ route('customer_login') }}">view</a></b></p>
                          @endif
                </div>
              </div>
              @endforeach
              </div>
                
              </div>
            </div>
          </section>
        </div>
  </div>


    
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

  <!-- <script type="text/javascript" src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
$('#clear_filter').on('click',function() {
      $('input[name="rating_search"]').prop('checked', false);
      $('#filter_location').val('');
      $("#filter_category option").prop("selected", false);
})
function filter_apply() { 

  var rating = $('input[name="rating_search"]:checked').val();
  var location = $('#filter_location').val();
  var category = $('#filter_category').val();
  // alert(rating);
  // alert(location);
  // alert(category);
  $.ajax({
           url: '{{url("search_filter")}}',
           data: {'rating':rating,'location':location,'category':category},
           type: "GET",
           headers: {
               'X-CSRF-Token': '{{ csrf_token() }}',
           },
           success: function(data){
            // alert(JSON.stringify(data));
            if(data.code === 'success')
                {
                    $('#filter_data').empty().append(data._view);
                    $( "#clear_filter" ).trigger( "click" );
                }
            

           },

         }); 


}
</script>

</body>

</html>
