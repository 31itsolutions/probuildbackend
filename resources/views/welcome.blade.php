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

    <title>pro build final</title>




    <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.default.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        #sub_category_img {
            border-radius: 50%;
        }

        .sub_category_img {
            border-radius: 50%;
        }

        .dropdown-submenu {
            position: absolute;
        }

        .category-dropdown-menu {
            display: none;
            position: absolute;
            left: 0;
            width: 300px;
        }

        .category-dropdown {
            position: relative;
        }

        .category-dropdown:hover .category-dropdown-menu {
            display: block;
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown button.cat_button {
            background-color: transparent !important;
            color: #000 !important;
            text-align: left;
            width: auto !important;
            margin-top: 0px !important;
            padding-left: 1px !important;
        }

        .dropdown.open {
            background: transparent;
            text-align: left;
            float: none;
            margin-top: 0px;
            padding: 0px;
        }

        .dropdown button.cat_button:focus {
            border: 0;
            box-shadow: none;
            outline: 0;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }

        h1 {
            font-weight: bold;
            font-size: 26px;
        }

        .hr_line {}

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

                            <!-- <img class="logo-img" height="70px" width="30px" src="{{ asset('assets/images/logo.png') }}" alt=""> -->

                        </a>

                        <ul class="nav">

                            @if (Auth::guard('customer')->check())

                                <li>
                                    <div class="contact.html">
                                        <b><a href="{{ route('customer') }}">
                                                <i class="bi bi-box-arrow-in-right"></i> &nbsp; Customer</a></b>
                                    </div>
                                </li>

                            @elseif(Auth::guard('vendor')->check())

                                <li>
                                    <div class="contact.html">
                                        <b><a href="{{ route('vendor') }}">
                                                <i class="bi bi-box-arrow-in-right"></i> &nbsp; Vendor</a></b>
                                    </div>
                                </li>
                            @else
                                <li>
                                    <div class="contact.html">
                                        <b><a href="{{ route('vendor_login') }}">
                                                <i class="bi bi-box-arrow-in-right"></i> &nbsp; sign in</a></b>
                                    </div>
                                </li>

                            @endif



                            @if (Auth::guard('vendor')->check())

                                <li>
                                    <div class="main-white-button"><a href=""> Add a Buisness</a></div>
                                </li>

                            @elseif (Auth::guard('customer')->check())

                                <li>
                                    <div class="main-white-button"><a href="#"> Add a Buisness</a></div>
                                </li>

                            @else
                                <li>
                                    <div class="main-white-button"><a href="{{ route('vendor_login') }}"> Add a
                                            Buisness</a></div>
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

    <div class="main-banner" style="height: 600px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-text header-text">
                        <h2 style="margin-top: -136px;">BUILD YOUR DREAM</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <form id="search-form" name="gs" method="submit" role="search" action="#" style="">
                        <div class="row">
                            <div class="col-lg-3 align-self-center">
                                <fieldset>
                                    <div class="selectlogo1"><img src="{{ asset('assets/images/search.png') }}"
                                            style="height: 20px;width: 20px;margin-top: 5px;"></div>
                                    <input type="address" name="address" class="searchText_1"
                                        placeholder=" what are you looking for?" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-3 align-self-center">
                                <fieldset>
                                    <div class="selectlogo1"><img src="{{ asset('assets/images/location.png') }}"
                                            style="height: 20px;width: 20px;margin-top: 2px; margin-left: 8px;"></div>
                                    <input type="address" name="address" class="searchText" placeholder=" location"
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-3 align-self-center">
                                <fieldset>
                                    <div class="selectlogo2"><img src="{{ asset('assets/images/shopping.png') }}"
                                            style="height: 20px;width: 20px;margin-top: 5px;"></div>
                                    <!-- <select name="price" class="form-select category-li" aria-label="Default select example"  id="chooseCategory"  onchange="this.form.click()">
                          <option class="choose" selected>Choose category</option>
                          @foreach ($data['category'] as $val)
                          <option value="{{ $val['id'] }}" >{{ $val['category'] }}</option>
                          @endforeach
                      </select> -->
                                    <div class="dropdown" style="text-align: left;">
                                        <button class="btn btn-default dropdown-toggle cat_button" type="button"
                                            data-toggle="dropdown"><span>Category</span></button>
                                        <ul class="dropdown-menu">


                                            @foreach ($data['category1'] as $key => $cat1)
                                                <li class="dropdown-submenu ">
                                                    <a class="test" tabindex="-1" href="#">
                                                        {{ $cat1['category'] }}<span
                                                            class="caret"></span></a>

                                                    <ul class="dropdown-menu">
                                                        @foreach ($data['subCategory1'] as $key => $subCat)
                                                            @if ($cat1['id'] == $subCat['category_type'])
                                                                <li><a tabindex="-1"
                                                                        href="#">{{ $subCat['sub_category'] }}</a>
                                                                </li>
                                                            @endif
                                                        @endforeach

                                                    </ul>
                                                </li>
                                            @endforeach

                                        </ul>

                                    </div>

                                </fieldset>

                                @foreach ($data['category'] as $key => $cat)

                                @endforeach

                            </div>
                            <div class="col-lg-3">
                                <fieldset>
                                    <button class="main-button" style="margin-bottom: 10px;"><span>Search
                                            Now</span></button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <ul class="categories">
                        @foreach ($data['category'] as $val)
                            <li><a><span class="icon" onclick="sub_category({{ $val['id'] }})"><img
                                            src="{{ asset('assets/images/' . $val['category_icon']) }}"
                                            alt="Home"></span> {{ $val['category'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- <section id="testimonials" class="testimonials">
    <ul class="categories1">
        {{-- <li><a href="#" class="icon"><img src="{{asset('assets/images/man.png')}}"  > <span> helth</span></a></li> --}}
        <li><a href="#" class="icon"><img src=" {{ asset('assets/images/man.png') }}" ><span class="text-secondary"> Health</span></a></li>

        <li><a href="#" class="icon"><img src=" {{ asset('assets/images/car.png') }}" ><span class="text-secondary"> Transportation</span></a></li>
        <li><a href="#" class="icon"><img src="{{ asset('assets/images/builder.png') }}" ><span class="text-secondary"> Architecture</span></a></li>
        <li><a class="text-secondary" href="#"><span class="icon"><img src="{{ asset('assets/images/write.png') }}"></span > View</a></li>
        <li><a class="text-secondary" href="#"><span class="icon"><img src="{{ asset('assets/images/write.png') }}"></span > View</a></li>

      </ul>
</section> -->
    <div class="container sub_category_css">

        @foreach ($data['category'] as $key => $cat)
            @if ($cat->sub_count >= 4)
                <div id="testimonials" style="margin-top: -52px;margin-right: 6px; margin-bottom:15px;"
                    class="subCat {{ 'cat_' . $cat->id }} {{ $cat->id == $data['active_Category'] ? '' : 'hide' }}"
                    style="padding-left: 80px">
                    <div class="owl-carousel owl-theme sub_cat_carousel" id="">
                        @foreach ($data['subCategory'] as $key => $subCat)
                            @if ($subCat->category_type == $cat->id)
                                <div class="item" style="text-align:center;">
                                    <a href="#" class="icon">
                                        <p class="carosal_css" style="background: #F4E059;">
                                            <img src="{{ asset('assets/images/' . $subCat->sub_category_icon) }}"
                                                id="sub_category_img"
                                                style="display: block;width: 30px;margin-bottom:10px;margin: 0 auto;">
                                        </p>
                                        <span class="text-secondary">{{ $subCat->sub_category }}</span>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @else

                <div id="testimonials" style="margin-top: -52px;margin-bottom:15px;"
                    class="row subCat {{ 'cat_' . $cat->id }} {{ $cat->id == $data['active_Category'] ? '' : 'hide' }}"
                    style="padding-left: 80px">
                    @foreach ($data['subCategory'] as $key => $subCat)
                        @if ($subCat->category_type == $cat->id)
                            <div class="item col-sm-4" style="text-align:center;"><a href="#" class="icon">
                                    <p class="carosal_css" style="background: #F4E059;">
                                        <img src="{{ asset('assets/images/' . $subCat->sub_category_icon) }}"
                                            class="sub_category_img" id="sub_category_img"
                                            style="display: block;width: 30px;margin-bottom:10px;margin: 0 auto;">
                                    </p>
                                    <span class="text-secondary">{{ $subCat->sub_category }}</span>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
        @endforeach

    </div>

    <div class=" business_css">
        <div class="Recommended">
            <div class="popular">
                <section id="about">
                    <div class="container businesses_css" style="">
                        <div class="row about-cols">
                            <h1 style="">Featured Businesses</h1>
                            <div id="testimonials1" class="" >
                  <div class=" owl-carousel owl-theme
                                business_carousel" id="" style="">
                                @foreach ($data['business'] as $val)
                                    <div class="" data-aos=" fade-up" data-aos-delay="50" style="display: block;">
                                        <div class="about-col" style="">

                                            <div class="img ">
                                                <img src="assets/img/icon/Real Estate.jpg" alt=""
                                                    class="img-fluid zoom_img">
                                                <div class="icon">
                                                    <i class="bi bi-brightness-high"></i>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <a href="javascript:void(0)" onclick="addToWishList()"
                                                    data-toggle="tooltip" data-placement="left"
                                                    title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                            </div>
                                            <h2 class="title">
                                                <a href="#">{{ $val['business_title'] }}</a>
                                            </h2>
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

                                            <div class="location">
                                                <span>
                                                    {{ $val['country'] }},{{ $val['city'] }}
                                                </span>
                                            </div>
                                            @if (Auth::guard('customer')->check())
                                                <p>
                                                    <b>
                                                        <a href="{{ route('customer_company', $val['id']) }}">view</a>
                                                    </b>
                                            </p> @else <p>
                                                    <b>
                                                        <a href="{{ route('customer_login') }}">view</a>
                                                    </b>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>
    </div>
    </div>





    <div id="testimonials" id="div_sub" class="container" style="padding-left: 155px;margin-top: 34px;
">
        <div class="owl-carousel owl-theme sub_cat_carousel" id="sub_category_append">



        </div>
    </div>



    @foreach ($data['category'] as $key => $cat)
        @if ($cat->sub_count >= 4)
            <div id="testimonials" style="margin-top: -52px;margin-right: 6px; margin-bottom:15px;"
                class="container subCat {{ 'cat_' . $cat->id }} {{ $cat->id == $data['active_Category'] ? '' : 'hide' }}"
                style="padding-left: 80px">
                <div class="owl-carousel owl-theme sub_cat_carousel" id="">
                    @foreach ($data['subCategory'] as $key => $subCat)
                        @if ($subCat->category_type == $cat->id)
                            <div class="item" style="text-align:center; height: 100px;width: 66px;"><a
                                    href="#" class="icon"><img
                                        src="{{ asset('assets/images/' . $subCat->sub_category_icon) }}"
                                        id="sub_category_img" style="background-color: #F4D03F;margin-bottom:10px"><span
                                        class="text-secondary">{{ $subCat->sub_category }}</span></a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @else

            <div id="testimonials" style="margin-left: 375px; margin-top: -52px;margin-bottom:15px;"
                class="container row subCat {{ 'cat_' . $cat->id }} {{ $cat->id == $data['active_Category'] ? '' : 'hide' }}"
                style="padding-left: 80px">
                @foreach ($data['subCategory'] as $key => $subCat)
                    @if ($subCat->category_type == $cat->id)
                        <div class="item col-sm-4"
                            style="text-align:center; height: 100px;width: 66px;margin-left: 5%;margin-right: 5%;"><a
                                href="#" class="icon"><img
                                    src="{{ asset('assets/images/' . $subCat->sub_category_icon) }}"
                                    class="sub_category_img" id="sub_category_img"
                                    style="height: 66px;width: 66px;background-color: #F4D03F;margin-bottom:10px"><span
                                    class="text-secondary">{{ $subCat->sub_category }}</span></a>
                        </div>
                    @endif
                @endforeach
            </div>
        @endif
    @endforeach

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>


    <div class="container">
        <div class="row">
            @foreach ($data['add_image'] as $val)
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/' . $val['add_image']) }}" alt="Home"
                        style="width: 100%;height:70%;">
                </div>
            @endforeach
        </div>
        <br>
        <h3 style="text-align: center;margin-top: -42px;font-weight: bold;font-size: 26px;">Discover place Near You</h3>
        <div class="table" style="margin-top: 19px;">
            <div class="imageshade">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-sm-6 ">
                            <div class="iconhover">
                                <img src="assets/images/house.jpg" class="image1" style=" border-radius: 8px;">
                                <div class="overlay">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6">
                            <div class="iconhover">
                                <img src="assets/images/cctv.jpg" class="image2"
                                    style="height:450 px; border-radius: 8px;">
                                <div class="overlay">
                                    <a href="#" class="overicon">
                                        <i class="bi bi-house-door-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="imageshade">
                <div class="container">
                    <div class="row">
                        <div class="col-4 col-sm-3">
                            <div class="iconhover">
                                <img src="assets/images/Furniture.jpg" class="image10"
                                    style="border-radius: 8px;">
                                <div class="overlay">
                                    <a href="#" class="overicon">
                                        <i class="bi bi-house-door-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-3">
                            <div class="viewimage">
                                <div class="iconhover">
                                    <img src="assets/images/Kitchen.jpg" class="image1"
                                        style="border-radius: 8px;">
                                    <div class="overlay">
                                        <a href="#" class="overicon">
                                            <i class="fa fa-user"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6">
                            <div class="iconhover">
                                <img src="assets/images/carpenter.jpg" class="image1"
                                    style="height:450px; border-radius: 8px;">
                                <div class="overlay">
                                    <a href="#" class="overicon">
                                        <i class="fa fa-user"></i>
                                    </a>
                                </div>
                            </div>
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
                        <h1 style="">Featured Businesses</h1>

                        <div id="testimonials" class="container" style="padding-left: 80px">
                            <div class="owl-carousel owl-theme business_carousel" id="">
                                @foreach ($data['business'] as $val)
                                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="50">
                                        <div class="about-col" style="width: 200px; height: ">
                                            <div class="img">
                                                <img src="assets/img/icon/Real Estate.jpg" alt=""
                                                    class="img-fluid">
                                                <div class="icon"><i class="bi bi-brightness-high"></i>
                                                </div>
                                            </div>
                                            <h2 class="title"><a href="#">{{ $val['business_title'] }}</a>
                                            </h2>
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
                                            <div class="location">{{ $val['country'] }},{{ $val['city'] }}
                                            </div>
                                            @if (Auth::guard('customer')->check())
                                                <p> <b><a
                                                            href="{{ route('customer_company', $val['id']) }}">views</a></b>
                                                </p>
                                            @else
                                                <p> <b><a href="{{ route('customer_login') }}">view</a></b></p>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($data['add_image_next'] as $val)
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/' . $val['add_image_next']) }}" alt="Home"
                        style="width: 100%;height:70%;">
                </div>
            @endforeach
        </div>
    </div>


    <div class="popular">
        <section id="about">
            <div class="container">
                <div class="row about-cols">
                    <h1 style="margin-top: -72px;">Popular this Week</h1>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="50">
                        <div class="about-col">
                            <div class="img">
                                <img src="assets/img/icon/Royal Engineering.jpg" alt="" class="img-fluid">
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
                            @if (Auth::guard('customer')->check())
                                <p> <b><a href="#">views</a></b></p>
                            @else
                                <p> <b><a href="{{ route('customer_login') }}">view</a></b></p>
                            @endif
                        </div>
                    </div>



                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="about-col">
                            <div class="img">
                                <img src="assets/img/icon/Sync Lift Engineering.jpg" alt="" class="img-fluid">
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
                                <img src="assets/img/icon/Construction.jpg" alt="" class="img-fluid">
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
                                <img src="assets/img/icon/Real Estate.jpg" alt="" class="img-fluid">
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

                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="about-col">
                            <div class="img">
                                <img src="assets/img/icon/Car Service Garage.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="bi bi-brightness-high"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Car Service Garage</a></h2>
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
                                <img src="assets/img/icon/Car Service Garage.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="bi bi-brightness-high"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Electric Company</a></h2>
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
                                <img src="assets/img/icon/salon.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="bi bi-brightness-high"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Window Cleaning</a></h2>
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
                                <img src="assets/img/icon/salon.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="bi bi-brightness-high"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Mens Saloon</a></h2>
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
                                <img src="assets/img/icon/Car Service Garage.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="bi bi-brightness-high"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Car Service Garage</a></h2>
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

                    <!-- <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="about-col">
                  <div class="img">
                    <img src="assets/img/icon/Car Service Garage.jpg" alt="" class="img-fluid">
                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                  </div>
                  <h2 class="title"><a href="#">Electric Company</a></h2>
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
              </div> -->

                    <!-- <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="about-col">
                  <div class="img">
                    <img src="assets/img/icon/salon.jpg" alt="" class="img-fluid">
                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                  </div>
                  <h2 class="title"><a href="#">Window Cleaning</a></h2>
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
              </div> -->

                    <!-- <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="about-col">
                  <div class="img">
                    <img src="assets/img/icon/salon.jpg" alt="" class="img-fluid">
                     <div class="icon"><i class="bi bi-brightness-high"></i></div>
                  </div>
                  <h2 class="title"><a href="#">Mens Saloon</a></h2>
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
              </div> -->

                    <div class="loadicon"> <button class="load-more">Load More</button></a></div>
                </div>
        </section>
    </div>

    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3> Ready to get started ?<span></span></h3>
                        <button id="addb"> <a href="index2.html">Add Buisness</a></button>

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
            $('.cat_' + id).removeClass('hide');
        }

        $('.sub_cat_carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 4
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 4
                }
            }
        });



        // });
    </script>
    <script type="text/javascript">
        $('.business_carousel').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            dots: true,
            responsive: {
                0: {
                    items: 4
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 4
                }
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.dropdown-submenu a.test').on("click", function(e) {
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
    </script>

</body>

</html>
