<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--fontawesome-->

    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style1.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">


</head>

</head>

<body>
    <div class="total">
        <div class="main1">

            <div class="header">
                <img class="logo-img" src="{{ asset('assets/images/logo.png') }}" alt="">
                <div class="right-div" style="display: flex;">
                    <a href="#" style="margin: auto;">



                        @if (empty($customer->profile_image))
                        <img class="header-img" src="{{ asset('assets/images/man1.jpg') }}" alt="" onclick="myFunc1()"
                            onkeyup="filterFunc1()" id="myInt1">
                        @else
                        <img class="header-img" src="{{asset('storage/ProfileImage/'. $customer->profile_image)}}"
                            alt="" onclick="myFunc1()" onkeyup="filterFunc1()" id="myInt1">
                        @endif







                    </a>
                    <div class="drop1">
                        <div id="myDrop1" class="drop-content1"
                            style="width: 100px; height: 230px;line-height: 45px;border-radius: 10px; margin-top:70px; margin-left:-100px;">
                            <div style="width: 130px; margin-left:15px;">
                                <li style="border-bottom: 1px solid black;"><a href="{{ route('customer') }}"
                                    style="width: 80px; color: black; margin-left:15px;">My Profile</a></li>
                            <li style="border-bottom: 1px solid black; "><a href="{{ route('customer_wishlist') }}"
                                    style="width: 100px; color:black; margin-left:15px;">Wishlist</a></li>
                                    <li style="border-bottom: 1px solid black;"><a href="{{ route('customer_tendor') }}"
                                        style="width: 100px; color:black; margin-left:15px;">Tender</a></li>
                                <li style="border-bottom: 1px solid black;"><a href="{{ route('tendor_request') }}"
                                        style="width: 100px; color:black; margin-left:15px;">Request call</a></li>
                                <li>
                                    
                                    <a href="{{ route('customer_logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"  style="width: 100px; color:black; margin-left:15px;">Logout</a>
  
                                <form id="logout-form" action="{{ route('customer_logout') }}" method="POST" style="display: none;">
                                 @csrf
                                   </form>
                                
                                </li>
                            </div>
                        </div>
                        <div class="form_submit" style="padding:20px;">


                        </div>
                    </div>
                </div>
            </div>
        
            <a href="#" style="margin: auto;">

                @if (empty($customer->profile_image))
               <img class="header-img" src="{{ asset('assets/images/man1.jpg') }}"
                   style="float: left;padding: 0%;margin-left: 50px;margin-top: 100px;">
               @else
               <img class="header-img" src="{{asset('storage/ProfileImage/'. $customer->profile_image)}}"
                   style="float: left;padding: 0%;margin-left: 50px;margin-top: 100px;">
               @endif
           </a>
       
           <label class = "ml-2" style="margin-top: 120px;padding-left: 25px;color: #fff;font-size: 17px;">{{ $customer->name }}
               {{ $customer->lname }}</label>
       
           </div>
           </div>



            </a>
            <label style="margin-top: 120px;padding-left: 15px;color: #fff;font-size: 17px;">{{ $customer->name }}
                {{ $customer->lname }}</label>
        </div>
    </div>



    <!-- JS -->
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/main.js') }}"></script>


    </div>


    <div class="Total_Con">
        <div class="container" style="padding-left: 50px;margin-left: 100px;margin: auto;">

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
                <div class="col-sm-12 ">
                    <div class="mf">
                        <div class="privacy" style="height: 80px;">
                            <h2>Tendor Submission</h2>
                        </div>
                        <div class="container">
                            <div class="">




                                <form action="{{ route('post_tendor',$customer->id) }}" method="POST">
                                    @csrf
                                    <div  class="row ">
                    
                                        <div class="col-md-12 ">
                    
                    
                                          <div class="td-address mx-3">
                                            <h4 class=""><b>Contact Information</b></h4>
                    
                    
                                                <div class="row ">
                                                    <label for="inputAddress">Name</label>
                                                    <div class="form-group col-md-12">
                                                        <input type="text" name="name" value="{{ $customer->name }}" class="form-control" id="inputAddress"
                                                            placeholder="1234 Main St">
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                <label for="inputAddress2">Last Name</label>
                                                    <div class="form-group col-md-12">
                                                        <input type="text" name="lname" value="{{ $customer->lname }}" class="form-control" id="inputAddress2"
                                                            placeholder="Apartment, studio, or floor">
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <label for="inputCity">Email</label>
                                                    <div class="form-group col-md-12">
                                                        <input type="text" name="email" value="{{ $customer->email }}" class="form-control" id="inputCity">
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <label for="state">Mobile.No</label>
                                                    <div class="form-group col-md-12">
                                                        <input type="text" name="number" value="{{ $customer->number }}" class="form-control" id="state">
                                                    </div>

                                                    
                                    
                                                </div>

                                              
                    
                                        </div>
                    
                    
                    
                    
                    
                                            <div class="td-address px-3">
                                                <h4 class=""><b>Address Information</b></h4>
                    
                    
                                                    <div class="row">
                                                        <label for="inputAddress">Address 1</label>
                                                        <div class="form-group col-md-12">
                                                            <input type="text" name="address_1" value="{{ $customer->address_1 }}" class="form-control" id="inputAddress"
                                                                placeholder="1234 Main St">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label for="inputAddress2">Address 2</label>
                                                        <div class="form-group col-md-12">
                                                            <input type="text" name="address_2" value="{{ $customer->address_2 }}" class="form-control" id="inputAddress2"
                                                                placeholder="Apartment, studio, or floor">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label for="inputCity">City</label>
                                                        <div class="form-group col-md-12">
                                                            <input type="text" name="city" value="{{ $customer->city }}" class="form-control" id="inputCity" placeholder="City">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label for="state">State</label>
                                                            <div class="form-group col-md-12">
                                                            <input type="text" name="state" value="{{ $customer->state }}" class="form-control" id="state" placeholder="State">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                            <label for="inputZip">Zip</label>
                                                            <div class="form-group col-md-12">
                                                            <input type="text" name="zip" value="{{ $customer->zip }}" class="form-control" id="inputZip" placeholder="Zip">
                                                        </div>
                                                    </div>



                                                    <div class="row">
                                                     <label for="">Choose Category</label>
                                                    <div class="col-md-12">
                                                        <fieldset>
                                                           <div class="selectlogo2 "></div>                                                          
                                                           <div class="mb-3 form-content">
                                                            <select name="category" class="form-select " aria-label="Default select example"  id="chooseCategory"  onchange="this.form.click()">
                                                              
                                      
                                                                <option selected>Choose.... </option>
                                                                
                                                                <option value="Architecture & engineering consultants" >Architecture & engineering consultants</option>
                                                                <option value="Contractors">Contractors</option>
                                                                <option value="Suppliers">Suppliers</option>
                                                                <option value="Manpower">Manpower</option>
                                                                <option value="Property Maintenance">Property Maintenance</option>
                                                                <option value="Freelancers">Freelancers</option>
                                                                <option value="Packers and Movers">Plumber</option>
                                                                <option value="Packers and Movers">Electrical</option>
                                                                <option value="Packers and Movers">Carpenter</option>
                                                                <option value="Packers and Movers">Welder</option>
                                                                <option value="Packers and Movers">Real-estate & properties Services: (subscription):</option>
                                                                <option value="Packers and Movers">Property renting & selling</option>
                                                                <option value="Packers and Movers">Property Evaluation</option><hr>
                                                                <option value="Packers and Movers">Property Management</option>
                                                                <option value="Packers and Movers">Property Consultation</option>
                                                                <option value="Packers and Movers">Property Renovation</option>
                                                                <option value="Packers and Movers">Freelance architects & interior designer (free):</option>
                                                                <option value="Packers and Movers"> Available Tender board (subscription):</option>
                                                                
                                                               
                                      
                                                              </div>
                                      
                                                            </select>
                                                          </div>
                                                        </fieldset>
                                                        
                                                    </div>
                                            </div>


                                        <div class="row">
                                            <label for="exampleFormControlTextarea1">Tendor description</label>
                                            <div class="form-group col-md-12">
                                                <textarea class="form-control" name="tender_description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                                                                              
                                        </div>

                                        <div class="row">
                                            <label for="inputZip">Tendor end date</label>
                                            <div class="form-group col-md-12">
                                            <input type="date" name="end_date" value="{{ $customer->zip }}" class="form-control" id="inputZip" placeholder="Zip">
                                        </div>
                                    </div>



                                                   

                                                    <div class="col-md-12 mt-4">
                                                        <button type="submit" class="btn btn-primary">Post a Tendor </button>
                                                </div>
                    
                                            </div>
                    
                                        </div>
                                        <!-- Contact Section -->
                    
                                    </div>
                    
                                </form>




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
                        <button class="SandR"><a href="Add_a_buisness.html" target="_self" style="color:#fff">Add a
                                Buisness</a>
                            </li></button>
                    </div>
                </div>

                <div class="col-sm-3 ">
                    <div class="foot_text">
                        <h6>Pro Build</h6>
                    </div>
                    <ul class="footer-links">
                        <li><a href="about_us.html" target="_self">About Us</a></li>
                    </ul>
                </div>

                <div class="col-sm-3 ">
                    <div class="foot_text">
                        <h6>Help</h6>
                    </div>
                    <ul class="footer-links">
                        <li><a href="FAQ.html">FAQ's</a></li>
                        <li><a href="Contact_Us.html">Contact Us</a></li>
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

        {

            var modal = document.getElementById("myModal");

            var btn = document.getElementById("myBtn");

            var label = document.getElementsByClassName("close1")[0];

            btn.onclick = function () {
                modal.style.display = "block";
            }

            label.onclick = function () {
                modal.style.display = "none";
            }

            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        }

    </script>

</body>

</html>
