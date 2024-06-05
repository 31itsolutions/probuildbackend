<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--fontawesome-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
        integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <script src="vendor/jquery/jquery.min.js"></script>


    <script type="text/javascript" src="{{ URL::asset('assets/js/styles.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/imagesloaded.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/animation.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/owl-carousel.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <link href="{{ asset('assets/css/stylepage.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style1.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

   

</head>

<body>
    <div class="total">
        <div class="main1">

            <div class="header">
                <img class="logo-img" src="{{ asset('assets/images/logo.png') }}" alt="">
                <div class="right-div" style="display: flex;">
                    <a href="#" style="margin: auto;"><img class="header-img"
                            src="{{ asset('assets/images/man1.jpg') }}" alt="" onclick="myFunc1()"
                            onkeyup="filterFunc1()" id="myInt1"></a>
                    <div class="drop1">
                        <div id="myDrop1" class="drop-content1"
                            style="width: 100px; height: 230px;line-height: 45px;border-radius: 10px; margin-top:70px; margin-left:-100px;">
                            <div style="width: 150px;">
                                <li style="border-bottom: 1px solid black;"><a href="{{ route('customer') }}"
                                    style="width: 100px; color: black; margin-left:15px;">My Profile</a></li>
                            <li style="border-bottom: 1px solid black; "><a href="{{ route('customer_wishlist') }}"
                                    style="width: 100px; color:black; margin-left:15px;">Wishlist</a></li>
                                    <li style="border-bottom: 1px solid black;"><a href="{{ route('customer_tendor') }}"
                                        style="width: 100px; color:black; margin-left:15px;">Tender</a></li>
                                <li style="border-bottom: 1px solid black;"><a href="{{ route('tendor_request') }}"
                                        style="width: 100px; color:black; margin-left:15px;">Request call</a></li>
                                <li>


                                    <a href="{{ route('customer.logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"
                                        style="width: 100px; color:black; margin-left:15px;">Logout</a>

                                    <form id="logout-form" action="{{ route('customer.logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>


                                </li>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <a href="#" style="margin: auto;"><img class="header-img1" src="{{ asset('assets/images/man1.jpg') }}"
                    style="float: left;padding: 0%;margin-left: 50px;margin-top: 100px;"> </a>
            <label style="margin-top: 120px;padding-left: 15px;color: #fff;font-size: 17px;">{{  $customer->name }}
                {{  $customer->lname }}</label>
        </div>
    </div>
    <div class="Recommended">
        <div class="popular">
            <section id="about">
                <div class="container">
                    <h1 style="color: black;">Wishlist</h1>
                    <div class="row about-cols">

                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="50">
                            <div class="about-col">
                                <div class="img">
                                    <img src="{{ asset('assets/img/icon/Real Estate.jpg') }}" alt="" class="img-fluid">

                                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                                </div>
                                <h2 class="title"><a href="#">Royal Engineering</a></h2>
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
                                <div class="location">3244 Coulter Lane, Canada</div>
                                <p> <b><a href="#">view</a></b></p>
                            </div>
                        </div>


                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="about-col">
                                <div class="img">
                                    <img src="{{ asset('assets/img/icon/Real Estate.jpg') }}" alt="" class="img-fluid">
                                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                                </div>
                                <h2 class="title"><a href="#">Sync Lift Engineering</a></h2>
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
                                <div class="location">3244 Coulter Lane, Canada</div>
                                <p> <b><a href="#">view</a></b></p>
                            </div>
                        </div>

                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="about-col">
                                <div class="img">
                                    <img src="{{ asset('assets/img/icon/Construction.jpg') }}" alt="" class="img-fluid">

                                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                                </div>
                                <h2 class="title"><a href="#">Construction</a></h2>
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
                                <div class="location">3244 Coulter Lane, Canada</div>
                                <p> <b><a href="#">view</a></b></p>
                            </div>
                        </div>

                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="about-col">
                                <div class="img">
                                    <img src="{{ asset('assets/img/icon/Real Estate.jpg') }}" alt="" class="img-fluid">
                                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                                </div>
                                <h2 class="title"><a href="#">Real Estate</a></h2>
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
                                <div class="location">3244 Coulter Lane, Canada</div>
                                <p> <b><a href="#">view</a></b></p>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
    </div>
    <div class="Recommended">
        <div class="popular">
            <section id="about">
                <div class="container">
                    <div class="row about-cols">


                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="50">
                            <div class="about-col">
                                <div class="img">
                                    <img src="{{ asset('assets/img/icon/Construction.jpg') }}" alt="" class="img-fluid">
                                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                                </div>
                                <h2 class="title"><a href="#">Royal Engineering</a></h2>
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
                                <div class="location">3244 Coulter Lane, Canada</div>
                                <p> <b><a href="#">view</a></b></p>
                            </div>
                        </div>


                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="about-col">
                                <div class="img">
                                    <img src="{{ asset('assets/img/icon/Real Estate.jpg') }}" alt="" class="img-fluid">
                                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                                </div>
                                <h2 class="title"><a href="#">Sync Lift Engineering</a></h2>
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
                                <div class="location">3244 Coulter Lane, Canada</div>
                                <p> <b><a href="#">view</a></b></p>
                            </div>
                        </div>

                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="about-col">
                                <div class="img">
                                    <img src="{{ asset('assets/img/icon/Construction.jpg') }}" alt="" class="img-fluid">

                                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                                </div>
                                <h2 class="title"><a href="#">Construction</a></h2>
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
                                <div class="location">3244 Coulter Lane, Canada</div>
                                <p> <b><a href="#">view</a></b></p>
                            </div>
                        </div>

                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="about-col">
                                <div class="img">
                                    <img src=" {{ asset('assets/img/icon/Real Estate.jpg') }}" alt="" class="img-fluid">

                                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                                </div>
                                <h2 class="title"><a href="#">Real Estate</a></h2>
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
                                <div class="location">3244 Coulter Lane, Canada</div>
                                <p> <b><a href="#">view</a></b></p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="Recommended">
                    <div class="popular">
                        <section id="about">
                            <div class="container">
                                <div class="row about-cols">


                                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="50">
                                        <div class="about-col">
                                            <div class="img">
                                                <img src=" {{ asset('assets/img/icon/Real Estate.jpg') }}" alt=""
                                                    class="img-fluid">
                                                <div class="icon"><i class="bi bi-brightness-high"></i>
                                                </div>
                                            </div>
                                            <h2 class="title"><a href="#">Royal Engineering</a></h2>
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
                                            <div class="location">3244 Coulter Lane, Canada</div>
                                            <p> <b><a href="#">view</a></b></p>
                                        </div>
                                    </div>


                                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                                        <div class="about-col">
                                            <div class="img">
                                                <img src=" {{ asset('assets/img/icon/Real Estate.jpg') }}" alt=""
                                                    class="img-fluid">
                                                <div class="icon"><i class="bi bi-brightness-high"></i>
                                                </div>
                                            </div>
                                            <h2 class="title"><a href="#">Sync Lift Engineering</a></h2>
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
                                            <div class="location">3244 Coulter Lane, Canada</div>
                                            <p> <b><a href="#">view</a></b></p>
                                        </div>
                                    </div>

                                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                                        <div class="about-col">
                                            <div class="img">
                                                <img src="{{ asset('assets/img/icon/Construction.jpg') }}" alt=""
                                                    class="img-fluid">

                                                <div class="icon"><i class="bi bi-brightness-high"></i>
                                                </div>
                                            </div>
                                            <h2 class="title"><a href="#">Construction</a></h2>
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
                                            <div class="location">3244 Coulter Lane, Canada</div>
                                            <p> <b><a href="#">view</a></b></p>
                                        </div>
                                    </div>

                                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                                        <div class="about-col">
                                            <div class="img">
                                                <img src="{{ asset('assets/img/icon/Construction.jpg') }}" alt=""
                                                    class="img-fluid">
                                                <div class="icon"><i class="bi bi-brightness-high"></i>
                                                </div>
                                            </div>
                                            <h2 class="title"><a href="#">Real Estate</a></h2>
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
                                            <div class="location">3244 Coulter Lane, Canada</div>
                                            <p> <b><a href="#">view</a></b></p>
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
                                                <button class="SandR"><a href="Add_a_buisness.html" target="_self"
                                                        style="color:#fff">Add a Buisness</a>
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
                                    <hr style="height: 0%;">
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                            <p class="copyright-text">
                                                <a href="Terms_of_use.html" target="_self" style="padding: 20px;">Terms
                                                    and conditions</a>
                                                <a href="privacy_policy.html" target="_self">Privacy
                                                    Policy</a>
                                            </p>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <ul class="social-icons">
                                                <li><a class="facebook" href="#"><i class="fab fa-facebook "></i></a>
                                                </li>
                                                <li><a class="twitter" href="#"><i
                                                            class="fab fa-twitter-square "></i></a></li>
                                                <li><a class="dribbble" href="#"><i class="fab fa-instagram "></i></a>
                                                </li>
                                                <li><a class="linkedin" href="#"><i class="fab fa-linkedin "></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </footer>


                            <script type="text/javascript" src="{{ URL::asset('vendor/jquery/jquery.min.js') }}">
                            </script>
                            <script type="text/javascript"
                                src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}">
                            </script>
                            <script type="text/javascript" src="{{ URL::asset('assets/js/owl-carousel.js') }}">
                            </script>
                            <script type="text/javascript" src="{{ URL::asset('assets/js/animation.js') }}">
                            </script>
                            <script type="text/javascript" src="{{ URL::asset('assets/js/imagesloaded.js') }}">
                            </script>
                            <script type="text/javascript" src="{{ URL::asset('assets/js/styles.js') }}">
                            </script>

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
