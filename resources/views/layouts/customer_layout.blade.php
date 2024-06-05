<!DOCTYPE html>
<html>
<title>Customer-profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Raleway", sans-serif
    }

</style>

<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<body class="w3-light-grey w3-content" style="max-width:1600px">

    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left bg-light"  style="z-index:3;width:300px;" id="mySidebar"><br>
        <div class="nav-parent">
            <div class="w3-container">
                <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey"
                    title="close menu">
                    <i class="fa fa-remove"></i>
                </a>

                <div class="text-center">
                    @if (empty($customer->profile_image))
                    <img src="{{asset('assets/images/dummyProfile.jpg')}}" style="width:50%;" class="w3-round"
                        alt="Customer image"><br><br>
                    @else
                    <img src="{{asset('storage/ProfileImage/'. $customer->profile_image)}}" style="width:50%;"
                        class="w3-round" alt="Customer image"><br><br>
                    @endif

                </div>

                <h4 class="pl-2"><b>{{ $customer->name }} {{ $customer->lname }}</b></h4>
            </div>
            <div class="w3-bar-block pl-2">
                <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i
                        class="bi bi-person-lines-fill fa-fw w3-margin-right"></i>Profile</a>
                <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i
                        class="bi bi-briefcase-fill fa-fw w3-margin-right"></i>Tendor</a>
                <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i
                        class="bi bi-app-indicator fa-fw w3-margin-right"></i> Status</a>
                <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding ">
                    <i class="bi bi-menu-up fa-fw w3-margin-right"></i>Transection history</a>

                <a href="{{ route('customer.logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();" class="w3-bar-item w3-button w3-padding"><i
                        class="fa fa-sign-out  fa-fw w3-margin-right"></i>Logout</a>

                <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </div>

        </div>

    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
        title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px">

        <!-- Header -->
        <header id="portfolio">
            <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;"
                    class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
            <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i
                    class="fa fa-bars"></i></span>
            <div class="w3-container header">
                <div class="w3-section  w3-padding-top-5">
                    <button class="w3-button w3-white"><i class="bi bi-house w3-margin-right"></i><span
                            class="pt-2 pr-2">Home</span></button>
                </div>
            </div>
        </header>

        <!-- First Photo Grid-->

        <div class="card">

          <div class="m-3">

            @if (session('SuccessMsg'))
  
            <div class="alert alert-warning alert-dismissible fade show" role="alert">

                {{ session('SuccessMsg') }}

            </div>
            @endif

          </div>


@yield('content')












                <script>
                    // Script to open and close sidebar
                    function w3_open() {
                        document.getElementById("mySidebar").style.display = "block";
                        document.getElementById("myOverlay").style.display = "block";
                    }

                    function w3_close() {
                        document.getElementById("mySidebar").style.display = "none";
                        document.getElementById("myOverlay").style.display = "none";
                    }


                    }

                </script>

                <!-- Footer -->
                <footer class="mt-5" id="footer">

                    <div class="footer-top">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-3 col-md-6 footer-contact">
                                    <h3> Ready to get started ?<span></span></h3>

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

                <div class="w3-black w3-center w3-padding-24">Powered by <a href="#" title="Bussiness Name"
                        target="_blank" class="w3-hover-opacity">Bussiness Name</a></div>

                <!-- End page content -->





</body>

</html>
