<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
        integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Login in </title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

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

                            <img class="logo-img" height="80px" width="40px" src="{{ asset('assets/images/logo.png') }}" alt="">
              
                          </a>
                        <ul class="nav">


                            <li>
                                <div class="contact.html"><b><a href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right"></i> &nbsp;
                                            sign in</a></b></div>
                            </li>

                      
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>

                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-text header-text">
                        <h2>BUILD YOUR DREAM</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4">

                        <div class="loginform">

                            <h1 class="text-center"><b>Login Form</b></h1>
                         <strong>Database Connected: </strong>
<?php
    try {
        \DB::connection()->getPDO();
        echo \DB::connection()->getDatabaseName();
        } catch (\Exception $e) {
        echo 'None';
    }
?>


                            

                            <form method="POST" action='{{ route("login") }}' aria-label="{{ __('Login') }}">
                              
                              @csrf
                               


                                <label for="uname"></label>
                                <input type="email" placeholder="Enter Username" class="form-control " name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>


                                <label for="psw"></label>
                                <input type="password" placeholder="Enter Password" class=" form-control"
                                    name="password" required autocomplete="current-password">

                                <div class="form-check">

                                    <label class="m-1">
                                        <input type="checkbox" checked="checked" name="remember"
                                            {{ old('remember') ? 'checked' : '' }}> Remember me
                                    </label><br>
                                </div>





                             


                                <button type="submit" class="b1">{{ __('Login') }}</button>

                                


                            </form>

          



                {{-- -------------------------------------- --}}
                          



                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
    </div>


    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3> Ready to get started ?<span></span></h3>
                        <button id="addb"> Add Buisness</button>

                        <div class="terms">Terms & Conditions &nbsp;Privacy Policy</div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Pro Buid</h4>
                        <ul>
                            <li> <a href="#">About us</a></li>

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Help</h4>
                        <ul>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">contact us</a></li>

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
    </div>

</body>

</html>
