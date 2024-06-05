<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Packages</title>

    <!-- Font Icon -->

    <link href="{{ asset('assets/fonts/material-icon/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--fontawesome-->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style1.css') }}" rel="stylesheet">


</head>
<body>
  <div class="total">
    <div class="main">

      <div class="header">
        <img class="logo-img" src="{{ asset('assets/images/logo.png') }}" alt="">
        <div class="right-div" style="display: flex;">
          <a href="#" style="margin: auto;">
            
            
                      
            @if (empty($vendor->profile_image))
            <img class="header-img" src="{{ asset('assets/images/man1.jpg') }}" alt="" onclick="myFunc1()"
                onkeyup="filterFunc1()" id="myInt1">
            @else
            <img class="header-img" src="{{asset('storage/vendor_profile/'. $vendor->profile_image)}}"
                alt="" onclick="myFunc1()" onkeyup="filterFunc1()" id="myInt1">
            @endif
            
            </a>
          <div class="drop1">
            <div id="myDrop1" class="drop-content1"
              style="width: 100px; height: 230px;line-height: 45px;border-radius: 10px;">
              <div style="width: 150px;">
                <li style="border-bottom: 1px solid black;"><a href="{{ route('vendor') }}"
                  style="width: 100px; color:black; margin-left:15px;">Dashboard</a></li>
                  <li style="border-bottom: 1px solid black;"><a href="{{route('vendor_profile') }}"
                          style="width: 100px; color: black; margin-left:15px;">Profile</a></li>
                <li style="border-bottom: 1px solid black;"><a href="{{ route('tendor_request') }}" style="width: 100px; color:black; margin-left:5px;">Tender</a></li>
                <li style="border-bottom: 1px solid black;">
                <a href="Request_call.html" style="width: 100px; color:black; margin-left:5px;">Request call</a></li>
                    
                <li>
                                  
                    <a href="{{ route('vendor.logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"  style="width: 100px; color:black; margin-left:5px;">Logout</a>

                <form id="logout-form" action="{{ route('vendor.logout') }}" method="POST" style="display: none;">
                 @csrf
                   </form>
                  
                  
                  </li>   

            </div>
            </div>
          </div>
                            
                  <div class="form_submit" style="padding:20px;">
                    <button class="SandR"><a href="Add_a_buisness.html" target="_self" style="color:#fff">Add a Buisness</a></li></button>
                </div>
              </div>
          </div>
          <div class="container">
            <h1>BUILD YOUR DREAM</h1>
            <form id="booking-form" class="booking-form" method="POST">
                <div class="form-group" style="display:inline-block">
                    <div class="form-destination">                        
                        <div class="search_icon"><i class="fas fa-search" style="color: #f0c349; padding: 0px; margin-left: 10px;"></i></div>
                        <div class="drop"></div>
                        <div class="search_width"><input type="text" id="myInt"  placeholder="What are you looking for? " onclick="myFunc()" onkeyup="filterFunc()">                                             
                          <div id="myDrop" class="drop-content">
                            <ul>
                            <li><a href="#">Architecture & engineering consultants</a></li>
                            <li><a href="#">Civil</a></li>
                            <li><a href="#">Mep</a></li>
                            <li><a href="#">Landscape</a></li>
                            <li><a href="#">Contractors</a></li>
                            <li><a href="#">General maintainence companies</a></li>
                            <li><a href="#">Excavation & piling </a></li>
                            <li><a href="#">Finishing & Painting</a></li>
                            <li><a href="#">Landscaping</a></li>
                            <li><a href="#">Electrical</a></li>
                            <li><a href="#">HVAC Systems</a></li>
                            <li><a href="#">Drainage & Plumbing</a></li>
                            <li><a href="#">Fire fighting </a></li>
                            <li><a href="#">Gas</a></li>
                            <li><a href="#">Cctv systems</a></li>
                            <li><a href="#">Suppliers</a></li>
                            <li><a href="#">General Construction materials <br>
                             (Block, Ready mix, Cement, Aggregate, Glue and etc.)</a></li>
                            <li><a href="#">General Hardware & machinery</a></li>
                            <li><a href="#">Smart home</a></li>
                            <li><a href="#">Furniture</a></li>
                            <li><a href="#">Curtains</a></li>
                            <li><a href="#">Wallpaper</a></li>
                            </ul>
                            <ul>
                            <li><a href="#">Electrical</a></li>
                            <li><a href="#">Steel</a></li>
                            <li><a href="#">Wood</a></li>
                            <li><a href="#">Aluminum & glass</a></li>
                            <li><a href="#">Parquet</a></li>
                            <li><a href="#">Tiles</a></li>
                            <li><a href="#">Marble</a></li>
                            <li><a href="#">Kitchen</a></li>
                            <li><a href="#">Sanitary ware</a></li>
                            <li><a href="#">Plumbing & Drainage</a></li>
                            <li><a href="#">Doors</a></li>
                            <li><a href="#">Lights</a></li>
                            <li><a href="#">Gypsum & Insulation </a></li>
                            <li><a href="#">Paint</a></li>
                            <li><a href="#">Safety & Security</a></li>
                            <li><a href="#">Intercom systems</a></li>
                            <li><a href="#">Cctv</a></li>
                            <li><a href="#">Elevators</a></li>
                            <li><a href="#">Swimming pools</a></li>
                            <li><a href="#">Signage</a></li>
                            <li><a href="#">Garden & Landscaping</a></li>
                            <li><a href="#">Ac / Heaters</a></li>
                            </ul>
                            <ul>
                            <li><a href="#">Shades</a></li>
                            <li><a href="#">Manpower (subscription):</a></li>
                            <li><a href="#">General manpower (brick mason, tiles mason & etc.)</a></li>
                            <li><a href="#">Packers & movers</a></li>
                            <li><a href="#">Plumber</a></li>
                            <li><a href="#">Electrical</a></li>
                            <li><a href="#">Carpenter</a></li>
                            <li><a href="#">Welder</a></li>
                            <li><a href="#">Painting</a></li>
                            <li><a href="#">Real estate & properties Services: (subscription):</a></li>
                            <li><a href="#">Property renting & selling</a></li>
                            <li><a href="#">Property Evaluation</a></li>
                            <li><a href="#">Property Management</a></li>
                            <li><a href="#">Property Consultation</a></li>
                            <li><a href="#">Property Renovation</a></li>
                            <li><a href="#">Freelance architects & interior designer (free):</a></li>
                            <li><a href="#">Tender board (subscription):</a></li>
                            </ul>
                          </div>
                          </div>
                    </div>
                    
                          
                                               
                    </div>
                    <div class="form-date-from form-icon" style="display:inline-block">
                        <label for="date_from"><br></label>
                        <div class="location_icon"><i class="fas fa-map-marker-alt" style="color: #f0c349;"></i></div>
                        <div class="location_width"><input type="text" id="" class="" placeholder="Location" /></div>                      
                    </div>
                    <div class="form-date-to form-icon" style="display:inline-block">
                        <label for="date_to"><br></label>
                        <div class="category_width"><span class=""><i class="fas fa-shopping-bag" style="color: #f0c349;"></i></span>
                          <div class="dropdown"></div>
                        <input type="text" id="myInput" class="" placeholder="Category" onclick="myFunction()" onkeyup="filterFunction()" /></div>                         
                          <div id="myDropdown" class="dropdown-content">
                            <a href="#">Architecture & engineering consultants</a>
                            <a href="#">Contractors</a>
                            <a href="#">Suppliers</a>
                            <a href="#">Manpower</a>
                            <a href="#">Property Maintainence</a>
                            <a href="#">Freelancers</a>
                            <a href="#">Packers and Movers</a>
                            <a href="#">Tender board</a>
                          </div>
                        </div>
                      
                  
                  
                  <div class="form-submit" style="display:inline-block">
                      <input type="submit" id="submit" class="submit" value="Search" />
                  </div>
              </div>
          </form>
          
        

    

            <div class="icons-new">
                <div class="icons1">
                    <div class="icon1"><a class="fb" href="#"><i class="fas fa-user-alt" style="color: #fff;"></i></a></div>
                    <div class="size"><h3><b>ManPower</b></h3></div>
                </div>
                <div class="icons2">
                    <div class="icon2"><a class="fb" href="#"><i class="fas fa-car-side" style="color: #fff;"></i></a></div>
                    <div class="size"><h3><b>Transportation</b></h3></div>
                </div>
                <div class="icons3">
                    <div class="icon3"><a class="linkedin" href="#"><i class="fas fa-home" style="color: #fff;"></i></a></div>
                    <div class="size"><h3><b>Real Estate</b></h3></div>
                </div>

                <div class="icons5">
                    <div class="icon5"><a class="linkedin" href="#"><i class="fas fa-hard-hat" style="color: #fff;"></i></a></div>
                    <div class="size"><h3><b>Architecture</b></h3></div>
                </div>
                   <div class="icons5">
                    <div class="icon5"><a class="linkedin" href="#"><i class="fas fa-pen-square" style="color: #fff;"></i></a></div>
                    <div class="size"><h3><b>Tender Request</b></h3></div>
                </div>
                
            </div>
    </div>
    </div>
    




    <div class="content">
      <div class="cyp">
          <h2>Choose Your Plans</h2>
      </div>
    
    
    <div >      
    <div class="container">
      <div class="row">
 
          <div class="col-sm-4 Total_cyp1 ">       
                     <div class="pack-gap">
   
            <div class="pack1"><a class="fb" href="#"><i class="far fa-window-restore" ></i></a></div>
           
          <div class="starter">PLATINUM</div>
          <div class="rupee">₹</div>
          <div> Company profile</div>
          <div> Bussiness</div>
          <div> Product listing</div>
          <div> Product Images</div>
          <div> Contact</div>
          <div> Location</div>
          <div> social media</div>
          <div> Priority listing</div>
          <div>Location</div>
          <div>  tendor_board</div>
          <div> Month Validity</div>
          <div>7x24 Fully Support</div>
            
          <div>
            <button class="btn btn-primary package-btn  text-dark"><a class="text-dark" href="{{ route('package_checkout') }}">Upgrade </a></button>
          </div>

            </div>
</div>

                   <div class="col-sm-4 Total_cyp1  ">     
                         <div class="pack-gap1">
     
            <div class="pack1"><a class="fb" href="#"><i class="far fa-star" ></i></a></div>
           
          <div class="starter">PLATINUM</div>
          <div class="rupee">₹</div>
          <div> Company profile</div>
          <div> Bussiness</div>
          <div> Product listing</div>
          <div> Product Images</div>
          <div> Contact</div>
          <div> Location</div>
          <div> social media</div>
          <div> Priority listing</div>
          <div>Location</div>
          <div>  tendor_board</div>
          <div> Month Validity</div>
          <div>7x24 Fully Support</div>
            
          <div>
            <button class="btn btn-primary package-btn  text-dark"><a class="text-dark" href="{{ route('package_checkout') }}">Upgrade </a></button>
          </div>

            </div>
            </div>

            <div class="col-sm-4 Total_cyp ">  
               <div class="pack-gap">
  
      
              <div class="pack"><a class="fb" href="#"><i class="far fa-window-restore" ></i></a></div>              
              <div class="starter">STANDARD</div>
          <div class="rupee">₹</div>
          <div> Company profile</div>
          <div> Bussiness</div>
          <div> Product listing</div>
          <div> Product Images</div>
          <div> Contact</div>
          <div> Location</div>
          <div> social media</div>
          <div> Priority listing</div>
          <div>Location</div>
          <div>  tendor_board</div>
          <div> Month Validity</div>
          <div>7x24 Fully Support</div>
              <div>7x24 Fully Support</div>
              <div>
                <button class="btn btn-primary package-btn"><a class="mb-1 text-dark" href="{{ route('package_checkout') }}">Upgrade</a></button>
              </div>
              </div>
            


</div>
          </div>
          </div>
        </div>
        </div>
        




          


    
        <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 ">
              <h6>Ready to get Started ?</h6>
              <div class="form_submit" style="padding:20px;">
                <button class="SandR"><a href="Add_a_buisness.html" target="_self" style="color:#fff">Add a Buisness</a></button>
                <div class="terms"><a href="{{ route('termsAndConditions') }}"> Terms & Conditions</a> &nbsp; <a href="{{ route('privacyPolicy') }}"> Privacy Policy</a></div>
            </div>
            </div>
  
            <div class="col-sm-3 ">
              <div class="foot_text"><h6>Pro Build</h6></div>
              <ul class="footer-links">
                <li> <a href="{{ route('about_usPage') }}">About us</a></li>
              </ul>
            </div>

            <div class="col-sm-3 ">
                <div class="foot_text"><h6>Help</h6></div>
                <ul class="footer-links">
                  <li><a href="{{ route('faq_page') }}">FAQs</a></li>
                  <li><a href="{{ route('content_us') }}">Contact Us</a></li>
                </ul>
              </div>
  
            <div class="col-sm-3 ">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="#">Browse Category</a></li>
                <li><a href="#">Search Buisness</a></li>
                <li><a href="login.html">Login to your account</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">
                <a href="Terms_of_use.html" target="_self" style="padding: 20px;">Terms and conditions</a>
                <a href="privacy_policy.html" target="_self">Privacy Policy</a>
              </p>
            </div>
  
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="fab fa-facebook "></i></a></li>
                <li><a class="twitter" href="#"><i class="fab fa-twitter-square "></i></a></li>
                <li><a class="dribbble" href="#"><i class="fab fa-instagram "></i></a></li>
                <li><a class="linkedin" href="#"><i class="fab fa-linkedin "></i></a></li>   
              </ul>
            </div>
          </div>
        </div>
  </footer>

    <!-- JS -->
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/main.js') }}"></script>

    

  <script>
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    
    function filterFunction() {
      var input, filter, ul, li, a, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      div = document.getElementById("myDropdown");
      a = div.getElementsByTagName("a");
      for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          a[i].style.display = "";
        } else {
          a[i].style.display = "none";
        }
      }
    }
    
    function myFunc1() {
          document.getElementById("myDrop1").classList.toggle("show");
        }
        
        function filterFunc1() {
          var input, filter, ul, li, a, i;
          input = document.getElementById("myInt1");
          filter = input.value.toUpperCase();
          div = document.getElementById("myDrop1");
          a = div.getElementsByTagName("a");
          for (i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              a[i].style.display = "";
            } else {
              a[i].style.display = "none";
            }
          }
        }
    
        function myFunc() {
          document.getElementById("myDrop").classList.toggle("show");
        }
        
        function filterFunc() {
          var input, filter, ul, li, a, i;
          input = document.getElementById("myInt");
          filter = input.value.toUpperCase();
          div = document.getElementById("myDrop");
          a = div.getElementsByTagName("a");
          for (i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              a[i].style.display = "";
            } else {
              a[i].style.display = "none";
            }
          }
        }
    
    
    </script> 

    

    </body>
    </html>