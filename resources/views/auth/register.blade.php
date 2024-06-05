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

    <title>sign in </title>




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

                        <a href="index.html" class="logo">
                        </a>

                        <ul class="nav">


                            <li>
                              @if ($url == "vendor")

                              <div class="contact.html"><b><a href="{{ route('vendor_login') }}"><i class="bi bi-box-arrow-in-right"></i> &nbsp;
                                sign in</a></b></div>

                              @elseif ($url == "customer")
                              <div class="contact.html"><b><a href="{{ route('customer_login') }}"><i class="bi bi-box-arrow-in-right"></i> &nbsp;
                                sign in</a></b></div>
                                
                              @endif
                               
                            </li>
                            @if ($url == "vendor")
                            <li>
                                <div class="main-white-button"><a href="index2.html"> Add a Buisness</a></div>
                            </li>
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
                            <h4><b>Creat Account</b></h4>

                            <div class="td-login text-center">

                                <a class="{{ Request::routeIs('vendor_register') ? 'login_active' : '' }}"
                                    href="{{ route('vendor_register') }}">Vendor</a>
                                <a class="{{ Request::routeIs('customer_register') ? 'login_active' : '' }}"
                                    href="{{ route('customer_register') }}">Customer</a>

                            </div>


                            <div class="accountimg">
                              <i class="bi bi-person-circle"></i>
                          </div>

                          <div class="container">


                            @if ($url == "vendor")

                            <form method="POST" action='{{ url("register/vendor") }}' aria-label="{{ __('Register') }}">
                                @csrf



                                <label for="name"></label>
                                <input type="text2" placeholder="Full name"
                                    class=" form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <label for="name"></label>
                                <input type="text2" placeholder="Last name"
                                    class=" form-control @error('name') is-invalid @enderror" name="lname"
                                    value="{{ old('name') }}" required autocomplete="lname" autofocus>
                                @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <label for="Email"></label>
                                <input type="email" placeholder="Email"
                                    class=" form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <label for="number"></label>
                                <input type="number" placeholder="Phone number"
                                    class=" form-control @error('email') is-invalid @enderror" name="number"
                                    value="{{ old('number') }}" required autocomplete="number">
                                @error('number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <label for="psw"></label>
                                <input id="password" type="password" placeholder="Password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="cpsw"></label>
                                <input id="password-confirm" type="password" placeholder="Password"
                                    class="form-control" name="password_confirmation" required
                                    autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror



                                <button type="submit" class="b1">Register</button>

                                <span class="signup mb-2">Alredy a user? <a href="{{ route('vendor_login') }}">Login</a></span>


                            </form>


                                @elseif ($url == "customer")
                                <form method="POST" action='{{ url("register/customer") }}'
                                    aria-label="{{ __('Register') }}">
                                    @csrf



                                    <label for="name"></label>
                                    <input type="text2" placeholder="Full name"
                                        class=" form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <label for="name"></label>
                                    <input type="text2" placeholder="Last name"
                                        class=" form-control @error('name') is-invalid @enderror" name="lname"
                                        value="{{ old('name') }}" required autocomplete="lname" autofocus>
                                    @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <label for="Email"></label>
                                    <input type="email" placeholder="Email"
                                        class=" form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <label for="number"></label>
                                    <input type="number" placeholder="Phone number"
                                        class=" form-control @error('email') is-invalid @enderror" name="number"
                                        value="{{ old('number') }}" required autocomplete="number">
                                    @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <label for="psw"></label>
                                    <input id="password" type="password" placeholder="Password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label for="cpsw"></label>
                                    <input id="password-confirm" type="password" placeholder="Password"
                                        class="form-control" name="password_confirmation" required
                                        autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror



                                    <button type="submit" class="b1">Register</button>

                                    <span class="signup mb-2">Alredy a user? <a href="{{ route('customer_login') }}">Login</a></span>


                                </form>

                                    @endif


                 

                                       
                                    </div>
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
