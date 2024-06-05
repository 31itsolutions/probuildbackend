<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vendor Profile</title>

    <!-- Font Icon -->

    <link href="{{ asset('assets/fonts/material-icon/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">


    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!--fontawesome-->

    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">
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
                            style="width: 100px; height: 230px;  line-height: 45px;border-radius: 10px;">
                            <div style="width: 150px;">
                                <li style="border-bottom: 1px solid black;"><a href="{{ route('vendor') }}"
                                    style="width: 100px; color:black; margin-left:15px;">Dashboard</a></li>
                                    <li style="border-bottom: 1px solid black;"><a href="{{route('vendor_profile') }}"
                                            style="width: 100px; color: black; margin-left:15px;">Profile</a></li>
                                <li style="border-bottom: 1px solid black;"><a href="{{ route('tendor_request') }}"
                                        style="width: 100px; color:black; margin-left:15px;">Tender</a></li>
                                <li style="border-bottom: 1px solid black;">
                                    <a href="Request_call.html"
                                        style="width: 100px; color:black; margin-left:15px;">Request call</a></li>
                                <li>


                                <li>

                                    <a href="{{ route('vendor.logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                                        style="width: 100px; color:black; margin-left:15px;">Logout</a>

                                    <form id="logout-form" action="{{ route('vendor.logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>


                                </li>



                                </li>
                            </div>
                        </div>
                       

                        <div class="form_submit" style="padding:20px;">
                            @if ($business == true)
                            <button class="SandR"><a href="{{ route('add_business') }}" target="_self"
                                    style="color:#fff; ">Add a Buisness</a></button></div>
                                    @else
                                    <button class="SandR"><a href="{{ route('vendor_package') }}" target="_self"
                                        style="color:#fff;">Add a Buisness</a></button></div>

                                    @endif

                    </div>
    </div>
    </div>



    <a href="#" style="margin: auto;">

        @if (empty($vendor->profile_image))
        <img class="header-img" src="{{ asset('assets/images/man1.jpg') }}"
            style="float: left;padding: 0%;margin-left: 50px;margin-top: 100px;">
        @else
        <img class="header-img" src="{{asset('storage/vendor_profile/'. $vendor->profile_image)}}"
            style="float: left;padding: 0%;margin-left: 50px;margin-top: 100px;">
        @endif
    </a>

    <label style="margin-top: 120px;padding-left: 25px;color: #fff;font-size: 17px;">{{ $vendor->name }}
        {{ $vendor->lname }}</label>

    </div>
    </div>



    <!-- JS -->
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/main.js') }}"></script>


    <div class="shadow">
        <div class="Total_Con">
            <div class="container">
                <div class="row " style=" margin:auto; width: 100%; ">
                    <div class="col-sm-12 ">
                        <div class="ltya shadow" style="margin: 15px;">
                            <div class="privacy1" style="height: 80px;">
                                <h2 style="color: black; padding: 0px;">My Plan</h2>
                            </div>
                            <div>
                                <div class="privacy_down">
                                    <h2
                                        style="color: black;background-color: rgb(252, 203, 70);text-align: start;padding-left: 2%;margin: 0;display: inline-block;width: 100%;padding-top: 20px;">
                                        @if (empty($vendor->package))
                                        There is no current packages
                                        @else


                                        {{ $vendor->package }}
                                        @endif
                                        <div class="form_submit" style="padding: 15px;width: 20%;float: right;">
                                            <button class="MP"><a href="choose_your_plans.html" target="_self"
                                                    style="color:#fff;font-size: x-large;">Upgrade</a></li></button>
                                    </h2><label
                                        style="float: left;background-color: rgb(252, 203, 70);display: inline-flex;width: 100%;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;padding-left: 2%;font-size: 20px;">Exp
                                        {{ $next_date }}</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
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



                <div class="row shadow">
                    <div class="col-sm-12 ">
                        <div class="mf">
                            <div class="privacy" style="height: 80px;">
                                <h2>My Profile</h2>
                            </div>

                            <div class="m-3">
                                <form action="{{ route('Add_vendor_image',$vendor->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf


                                    <div class="td-img-h ">
                                        <h3>Add profile image</h3>

                                    </div>

                                    <div class="add-img m-0">

                                        <div class="td-add-img ">

                                            <button id="profileImage"><i class="bi bi-cloud-arrow-up"></i></button>
                                            <h1></h1>
                                            <input id="imageUpload" type="file" name="profile_image" placeholder="Photo"
                                                required="" capture>
                                        </div>
                                        <script>
                                            $("#profileImage").click(function (e) {
                                                $("#imageUpload").click();
                                            });

                                        </script>
                                        <div class="btn-img">
                                            <button type="submit" class="btn ">Update</button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                            <form action="{{ route('update_profile', $vendor->id) }}" method="POST">
                                @csrf
                                <div class="container">
                                    <div class="box">
                                        <label>First Name</label>
                                        <input type="text" name="name" value="{{ $vendor->name }}"
                                            placeholder=" First Name" required>
                                        <label>Last Name</label>
                                        <input type="text" name="lname" value="{{ $vendor->lname }}"
                                            placeholder="Last Name " required>
                                        <label>Phone Number</label>
                                        <input type="text" name="number" value="{{ $vendor->number }}"
                                            placeholder="Phone Number" required>
                                        <label>Email</label>
                                        <input type="text" name="email" value="{{ $vendor->email }}" placeholder="Email"
                                            required>
                                        <label>Address 1</label>
                                        <input type="text" name="address_1" value="{{ $vendor->address_1 }}"
                                            placeholder="Address 1" required>
                                        <label>Address 2</label>
                                        <input type="text" name="address_2" value="{{ $vendor->address_2 }}"
                                            placeholder="Address 2" required>
                                        <label>State</label>
                                        <input type="text" name="state" value="{{ $vendor->state }}" placeholder="State"
                                            required>
                                        <label>City</label>
                                        <input type="text" name="city" value="{{ $vendor->city }}" placeholder="City"
                                            required>
                                        <label>Zip</label>
                                        <input type="text" name="zip" value="{{ $vendor->zip }}" placeholder="Zip"
                                            required>
                                    </div>


                                    <div class="col-md-12 mt-4">
                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                    </div>
                                </div>
                            </form>









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
                                </button>
                                <div class="terms"><a href="{{ route('termsAndConditions') }}"> Terms & Conditions</a> &nbsp; <a href="{{ route('privacyPolicy') }}"> Privacy Policy</a></div>
                        </div>
                    </div>

                    <div class="col-sm-3 ">
                        <div class="foot_text">
                            <h6>Pro Build</h6>
                        </div>
                        <ul class="footer-links">
                            <li> <a href="{{ route('about_usPage') }}">About us</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-3 ">
                        <div class="foot_text">
                            <h6>Help</h6>
                        </div>
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
    </div>

</body>

</html>
