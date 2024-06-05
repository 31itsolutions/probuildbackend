<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Buisness</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link href="{{ asset('assets/fonts/material-icon/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
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
            <link href="{{ asset('assets/css/drag_drop_image.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
          


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
                            style="width: 100px; height: 230px;line-height: 45px;border-radius: 10px; margin-top:70px; margin-left:-100px;">
                            <div style="width: 150px;">
                                <li style="border-bottom: 1px solid black;"><a href="{{ route('vendor') }}"
                                        style="width: 100px; color:black; margin-left:15px;">Dashboard</a></li>
                                <li style="border-bottom: 1px solid black;"><a href="{{route('vendor_profile') }}"
                                        style="width: 100px; color: black; margin-left:15px;">Profile</a></li>
                                <li style="border-bottom: 1px solid black;"><a href="{{ route('tendor_request') }}"
                                        style="width: 100px; color:black; margin-left:5px;">Tender</a></li>
                                <li style="border-bottom: 1px solid black;">
                                    <a href="Request_call.html"
                                        style="width: 100px; color:black; margin-left:5px;">Request call</a></li>

                                <li>

                                    <a href="{{ route('vendor.logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                        style="width: 100px; color:black; margin-left:5px;">Logout</a>

                                    <form id="logout-form" action="{{ route('vendor.logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>


                                </li>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-12 add-b">
                        <h4>Add Business</h4>
                        <p>Submit your Business and Grow</p>
                    </div>

                </div>
            </div>


        </div>


        <!-- JS -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/main.js"></script>
        <form action="{{ route('update_business') }}" method="POST" enctype="multipart/form-data" >
            @csrf

            <div class="Total_Con">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="mess card bg-light">
                                <div class="privacy">
                                    <h2>General Information</h2>
                                </div>
                                <div class="container">
                                    <div class="box">
                                        <label>Buisness Title*</label>
                                        <input type="text" name="business_title" class="form-control"
                                            placeholder="Title ">
                                        <div class="">
                                            <label>Category*</label>

                                            <select name="business_category" class="form-control "
                                                aria-label="Default select example" id="chooseCategory"
                                                onchange="this.form.click()">


                                                <option selected>Choose category</option>

                                                <option value="Architecture & engineering consultants">Architecture &
                                                    engineering consultants</option>
                                                <option value="Contractors">Contractors</option>
                                                <option value="Suppliers">Suppliers</option>
                                                <option value="Manpower">Manpower</option>
                                                <option value="Property Maintenance">Property Maintenance</option>
                                                <option value="Freelancers">Freelancers</option>
                                                <option value="Packers and Movers">Plumber</option>
                                                <option value="Packers and Movers">Electrical</option>
                                                <option value="Packers and Movers">Carpenter</option>
                                                <option value="Packers and Movers">Welder</option>
                                                <option value="Packers and Movers">Real-estate & properties Services:
                                                    (subscription):</option>
                                                <option value="Packers and Movers">Property renting & selling</option>
                                                <option value="Packers and Movers">Property Evaluation</option>
                                                <hr>
                                                <option value="Packers and Movers">Property Management</option>
                                                <option value="Packers and Movers">Property Consultation</option>
                                                <option value="Packers and Movers">Property Renovation</option>
                                                <option value="Packers and Movers">Freelance architects & interior
                                                    designer (free):</option>
                                                <option value="Packers and Movers"> Available
                                                    Tender board (subscription):</option>
                                            </select>
                                        </div>

                                        <div class="test ">
                                            <label>Description</label>
                                            <textarea class="form-control" placeholder="Business Description"
                                                style="height:200px;width: 100%;"
                                                name="business_description"></textarea></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



















                <script>
                    const product = '{{ $check_product }}';
                    $(document).ready(function () {



                        $("#add_row").one('click', function (event) {

                            for (let i = 1; i <= product - 1; i++) {
                                $('#tab_logic #addr1').append(
                                    '<div class="row mt-5 "><div class="col-sm-12 "><div class=" bg-light"><div class=" bg-light"><div class="box "><div class="row"><div class="col-md-4"><label>Name</label><input type="text" name="product_name[]"class="form-control"placeholder="Name of your Product / Service "></div><div class="col-md-4"><label>Price From</label><input type="text" name="product_price_from[]"class="form-control" placeholder=" "></div><div class="col-md-4"><label>Price To</label><input type="text" name="product_price_to[]"class="form-control" placeholder=" "></div> </div><div class="row"><div class="col-md-12"><label>Category*</label><input type="text" name="product_category[]"class="form-control" placeholder="Choose Category"></div></div><div class="row"><div class="col-md-12"><label>Description</label><textarea name="product_description[]"class="form-control"placeholder="Buisness Description"style="height:200px;width: 100%;"></textarea></div></div></div></div></div></div> </div>'
                                );

                            }

                        });
                    });

                </script>


                <div class="Total_Con ">
                    <div class="">
                        <div class="container   bg-light">
                            <div class="row shadow m-3">
                                <div class="col-md-12">


                                    <div class="privacy ">
                                        <h2>Add Product and Service</h2>
                                    </div>
                                    <div id="tab_logic">
                                        <div id="addr0">

                                            <div class="row ">
                                                <div class="col-sm-12 ">
                                                    <div class="m-3">
                                                        <h4>Add product </h4>

                                                    </div>
                                                    <div class=" bg-light">

                                                        <div class=" bg-light">
                                                            <div class="box ">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label>Name</label>
                                                                        <input type="text" name="product_name[]"
                                                                            class="form-control"
                                                                            placeholder="Name of your Product / Service ">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label>Price From</label>
                                                                        <input type="text" name="product_price_from[]"
                                                                            class="form-control" placeholder=" ">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label>Price To</label>
                                                                        <input type="text" name="product_price_to[]"
                                                                            class="form-control" placeholder=" ">
                                                                    </div>
                                                                </div>



                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label>Category*</label>
                                                                        <input type="text" name="product_category[]"
                                                                            class="form-control"
                                                                            placeholder="Choose Category">
                                                                    </div>
                                                                </div>


                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label>Description</label>
                                                                        <textarea name="product_description[]"
                                                                            class="form-control "
                                                                            placeholder="Buisness Description"
                                                                            style="height:200px;width: 100%;"></textarea>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="addr1"></div>

                                        <button type="button" id="add_row" class="btn btn-warning mt-3 mb-3 ">Add
                                            Row</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>








    <style>
        .fa-upload {
            font-size: 60px;
            border: 1px solid rgb(168, 168, 167);
            border-radius: 10px;
            padding: 20px;
        }

    </style>



    <div class="Total_Con">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 mb-4 ">
                    <div class="mess bg-light card">
                        <div class="privacy">
                            <h2>Product Images</h2>
                        </div>
                        <div id = "drop_image">

<div id="add_next" class=" control-group col-md-2 drop_zone m-2 ">
<input type="file" class="file_input" multiple name ="image_drop" style="display: block">

<div class="dropzone" id="file-dropzone"></div>
<div class="dz-default dz-message"><span>Drop file</span></div>

</div>

</div>

    
                    </div>
                </div>
            </div>
        </div>


        <script>
            const image = '{{ $check_image }}';

            // $(function () {

            //     for (let i = 1; i <= image - 1; i++) {

            //         $("#drop_image").append(
            //             '<div id="add_next" class="hdtuto control-group lst col-md-2 drop_zone m-2 "><input type="file" class="file_input" name ="image_drop[]" style="display: block"></div>'
            //         )
            //     }

            // })
        </script>

        @if($location == true)

        <div class="Total_Con">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="li card">
                            <div class="privacy">
                                <h2>Location Information</h2>
                            </div>
                            <div class="box">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="add_a_buisness_text4"><label>Country</label>
                                            <input type="text" class="form-control" placeholder="Canada "
                                                name="country">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="add_a_buisness_text5"><label>City</label>
                                            <input type="text" class="form-control" placeholder="Canada " name="city">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">

                                        <div class="add_a_buisness_text6"><label>Location</label>
                                            <input type="text" class="form-control"
                                                placeholder="e.g 34 Wigmore Street, London" name="location">
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @else

        @endif





    </div>


    @if ($contact == true)

    <div class="Total_Con">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="bi card">
                        <div class="privacy">
                            <h2>Buisness Information</h2>
                        </div>
                        <div class="box">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="add_a_buisness_text7"><label>Email</label>
                                        <input type="text" class="form-control" placeholder="buisness@gmail.com "
                                            name="email">
                                    </div>
                                </div>

                                <div class="col-sm-6">

                                    <div class="add_a_buisness_text8"><label>Mobile</label>
                                        <input type="text" class="form-control" placeholder="9656788378"
                                            name="mobile_no">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">

                                    <div class="add_a_buisness_text9"><label>Website</label>
                                        <input type="text" class="form-control" placeholder="https://yoursite.com/"
                                            name="website">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="add_a_buisness_text10"><label>FAX NO</label>
                                        <input type="text" class="form-control" placeholder="256 254 7854"
                                            name="fax_no">
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>


    @else

    @endif


    @if($social_media == true)

    <div class="Total_Con">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="bi card">
                        <div class="privacy">
                            <h2>Social Account</h2>
                        </div>
                        <div class="box">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="add_a_buisness_text7"><label>Facebook URL</label>
                                        <input type="text" class="form-control" placeholder="" name="facebook"></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="add_a_buisness_text8"><label>LinkedIn URL</label>
                                        <input type="text" class="form-control" placeholder="" name="linkedin"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">

                                    <div class="add_a_buisness_text9"><label>Twitter URL</label>
                                        <input type="text" class="form-control" placeholder="" name="twitter"></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="add_a_buisness_text10"><label>Instagram URL</label>
                                        <input type="text" class="form-control" placeholder="" name="instagram"></div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @else

    @endif


    <div class="container">

        <div class="row card  li m-3">
            <div class="col-md-12 ">
                <div class="privacy">
                    <h2>Time Information</h2>
                </div>
                <div class="time_date">
                    <div class="form-group row ">
                        <label for="inputEmail3" class="col-md-2 col-form-label">Monday</label>
                        <div class="col-md-5">
                            <select id="inputState" name="monday_from" class="form-control">
                                <option selected>Opening Time</option>
                                <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                            </select>
                        </div>
                        <div class="col-md-5 to_date">
                            <select id="inputState" name="monday_to" class="form-control">
                                <option selected>Closing Time</option>
                                <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                            </select>
                        </div>
                    </div>




                    <div class="form-group row">
                        <label for="inputEmail3" class="col-md-2 col-form-label">Tuesday</label>
                        <div class="col-md-5">
                            <select id="inputState" name="tuesday_from" class="form-control">
                                <option selected>Opening Time</option>
                                <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                            </select>
                        </div>
                        <div class="col-md-5 to_date">
                            <select id="inputState" name="tuesday_to" class="form-control">
                                <option selected>Closing Time</option>
                                <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                            </select>
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="inputEmail3" class="col-md-2 col-form-label">Wednesday</label>
                        <div class="col-md-5">
                            <select id="inputState" name="wednesday_from" class="form-control">
                                <option selected>Opening Time</option>
                                <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                            </select>
                        </div>
                        <div class="col-md-5 to_date">
                            <select id="inputState" name="wednesday_to" class="form-control">
                                <option selected>Closing Time</option>
                                <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                            </select>
                        </div>
                    </div>




                    <div class="form-group row">
                        <label for="inputEmail3" class="col-md-2 col-form-label">Thursday</label>
                        <div class="col-md-5">
                            <select id="inputState" name="thursday_from" class="form-control">
                                <option selected>Opening Time</option>
                                <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                            </select>
                        </div>
                        <div class="col-md-5 to_date">
                            <select id="inputState" name="thursday_to" class="form-control">
                                <option selected>Closing Time</option>
                                <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                            </select>
                        </div>
                    </div>




                    <div class="form-group row">
                        <label for="inputEmail3" class="col-md-2 col-form-label">Friday</label>
                        <div class="col-md-5">
                            <select id="inputState" name="friday_from" class="form-control">
                                <option selected>Opening Time</option>
                                <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                            </select>
                        </div>
                        <div class="col-md-5 to_date">
                            <select id="inputState" name="friday_to" class="form-control">
                                <option selected>Closing Time</option>
                                <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                            </select>
                        </div>
                    </div>




                    <div class="form-group row">
                        <label for="inputEmail3" class="col-md-2 col-form-label">Saturday</label>
                        <div class="col-md-5">
                            <select id="inputState" name="saturday_from" class="form-control">
                                <option selected>Opening Time</option>
                                <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                            </select>
                        </div>
                        <div class="col-md-5 to_date">
                            <select id="inputState" name="saturday_to" class="form-control">
                                <option selected>Closing Time</option>
                                <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                            </select>
                        </div>
                    </div>




                    <div class="form-group row">
                        <label for="inputEmail3" class="col-md-2 col-form-label">Sunday</label>
                        <div class="col-md-5">
                            <select id="inputState" name="sunday_from" class="form-control">
                                <option selected>Opening Time</option>
                                <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                            </select>
                        </div>
                        <div class="col-md-5 to_date">
                            <select id="inputState" name="sunday_to" class="form-control">
                                <option selected>Closing Time</option>
                                <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                            </select>
                        </div>
                    </div>





                </div>

            </div>
        </div>
    </div>





    <div class="Total_Con">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="form_submit" style="padding:20px;">
                        <button class="SandR" type="submit" style="color:#fff">Next</button>
                    </div>



                </div>
            </div>
        </div>
    </div>




    </form>






    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 ">
                    <h6>Ready to get Started ?</h6>
                    <div class="form_submit" style="padding:20px;">
                        <button class="SandR"><a href="Add_a_buisness.html" target="_self" style="color:#fff">Add a
                                Buisness</a></li></button>
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js" integrity="sha512-VQQXLthlZQO00P+uEu4mJ4G4OAgqTtKG1hri56kQY1DtdLeIqhKUp9W/lllDDu3uN3SnUNawpW7lBda8+dSi7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

  




        var $fileInput = $('#image_1');
        var $droparea = $('.dragzone_12');

        // highlight drag area
        $fileInput.on('dragenter focus click', function () {
            $droparea.addClass('is-active');
        });

        // back to normal state
        $fileInput.on('dragleave blur drop', function () {
            $droparea.removeClass('is-active');
        });

        // change inner text
        $fileInput.on('change', function () {
            var filesCount = $(this)[0].files.length;
            var $textContainer = $(this).prev();

            if (filesCount === 1) {
                // if single file is selected, show file name
                var fileName = $(this).val().split('\\').pop();
                $textContainer.text(fileName);
            } else {
                // otherwise show number of files
                $textContainer.text(filesCount + ' files selected');
            }
        });




        var $fileInput = $('.image2');
        var $droparea = $('.dragzone_22');

        // highlight drag area
        $fileInput.on('dragenter focus click', function () {
            $droparea.addClass('is-active');
        });

        // back to normal state
        $fileInput.on('dragleave blur drop', function () {
            $droparea.removeClass('is-active');
        });

        // change inner text
        $fileInput.on('change', function () {
            var filesCount = $(this)[0].files.length;
            var $textContainer = $(this).prev();

            if (filesCount === 1) {
                // if single file is selected, show file name
                var fileName = $(this).val().split('\\').pop();
                $textContainer.text(fileName);
            } else {
                // otherwise show number of files
                $textContainer.text(filesCount + ' files selected');
            }
        });


        var $fileInput = $('.image3');
        var $droparea = $('.dragzone_32');

        // highlight drag area
        $fileInput.on('dragenter focus click', function () {
            $droparea.addClass('is-active');
        });

        // back to normal state
        $fileInput.on('dragleave blur drop', function () {
            $droparea.removeClass('is-active');
        });

        // change inner text
        $fileInput.on('change', function () {
            var filesCount = $(this)[0].files.length;
            var $textContainer = $(this).prev();

            if (filesCount === 1) {
                // if single file is selected, show file name
                var fileName = $(this).val().split('\\').pop();
                $textContainer.text(fileName);
            } else {
                // otherwise show number of files
                $textContainer.text(filesCount + ' files selected');
            }
        });


        var $fileInput = $('.image4');
        var $droparea = $('.dragzone_42');

        // highlight drag area
        $fileInput.on('dragenter focus click', function () {
            $droparea.addClass('is-active');
        });

        // back to normal state
        $fileInput.on('dragleave blur drop', function () {
            $droparea.removeClass('is-active');
        });

        // change inner text
        $fileInput.on('change', function () {
            var filesCount = $(this)[0].files.length;
            var $textContainer = $(this).prev();

            if (filesCount === 1) {
                // if single file is selected, show file name
                var fileName = $(this).val().split('\\').pop();
                $textContainer.text(fileName);
            } else {
                // otherwise show number of files
                $textContainer.text(filesCount + ' files selected');
            }
        });


        //////////////////////////////////////////////////

        function img1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image_1')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function img2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image_2')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function img3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image_3')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function img4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image_4')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function img5(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image_5')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function img6(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image_6')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function img7(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image_7')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function img8(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image_8')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function img9(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image_9')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function img10(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image_10')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/dag_image.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
<script type="text/javascript">
    Dropzone.options.dropzone =
        {
            maxFilesize: 12,
            renameFile: function (file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 50000,
            removedfile: function (file) {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ url("delete") }}',
                    data: {filename: name},
                    success: function (data) {
                        console.log("File has been successfully removed!!");
                    },
                    error: function (e) {
                        console.log(e);
                    }
                });
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },

            success: function (file, response) {
                console.log(response);
            },
            error: function (file, response) {
                return false;
            }
        };
</script>




</body>

</html>
