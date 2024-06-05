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
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--fontawesome-->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('assets/css/style1.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('assets/css/drag_drop_image.css') }}" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- CSS assets in head section --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />

    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
    <style type="text/css">
        #formdiv {
            text-align: center;
        }

        #file {
            color: green;
            padding: 5px;
            border: 1px dashed #123456;
            background-color: #f9ffe5;
        }

        #img {
            width: 17px;
            border: none;
            height: 17px;
            margin-left: -20px;
            margin-bottom: 191px;
        }

        .upload {
            width: 100%;
            height: 30px;
        }

        .previewBox {
            text-align: center;
            position: relative;
            width: 150px;
            height: 150px;
            margin-right: 10px;
            margin-bottom: 20px;
            float: left;
        }

        .previewBox img {
            height: 150px;
            width: 150px;
            padding: 5px;
            border: 1px solid rgb(232, 222, 189);
        }

        .delete {
            color: red;
            font-weight: bold;
            position: absolute;
            top: 0;
            cursor: pointer;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #ccc;
        }

    </style>
    <script type="text/javascript">
        $('#add_more').click(function() {
            "use strict";
            $(this).before($("<div/>", {
                id: 'filediv'
            }).fadeIn('slow').append(
                $("<input/>", {
                    name: 'file[]',
                    type: 'file',
                    id: 'file',
                    multiple: 'multiple',
                    accept: 'image/*'
                })
            ));
        });

        $('#upload').click(function(e) {
            "use strict";
            e.preventDefault();

            if (window.filesToUpload.length === 0 || typeof window.filesToUpload === "undefined") {
                alert("No files are selected.");
                return false;
            }

            // Now, upload the files below...
            // https://developer.mozilla.org/en-US/docs/Using_files_from_web_applications#Handling_the_upload_process_for_a_file.2C_asynchronously
        });

        deletePreview = function(ele, i) {
            "use strict";
            try {
                $(ele).parent().remove();
                window.filesToUpload.splice(i, 1);
            } catch (e) {
                console.log(e.message);
            }
        }

        $("#file").on('change', function() {
            "use strict";

            // create an empty array for the files to reside.
            window.filesToUpload = [];

            if (this.files.length >= 1) {
                $("[id^=previewImg]").remove();
                $.each(this.files, function(i, img) {
                    var reader = new FileReader(),
                        newElement = $("<div id='previewImg" + i + "' class='previewBox'><img /></div>"),
                        deleteBtn = $("<span class='delete' onClick='deletePreview(this, " + i +
                            ")'>X</span>").prependTo(newElement),
                        preview = newElement.find("img");

                    reader.onloadend = function() {
                        preview.attr("src", reader.result);
                        preview.attr("alt", img.name);
                    };

                    try {
                        window.filesToUpload.push(document.getElementById("file").files[i]);
                    } catch (e) {
                        console.log(e.message);
                    }

                    if (img) {
                        reader.readAsDataURL(img);
                    } else {
                        preview.src = "";
                    }

                    newElement.appendTo("#filediv");
                });
            }
        });
    </script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> -->
    <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <style type="text/css">
        /* layout.css Style */
        .files input {
            outline: 0.752577px dashed #9F9F9F;
            outline-offset: -10px;
            -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
            transition: outline-offset .15s ease-in-out, background-color .15s linear;
            padding: 120px 0px 85px 35%;
            text-align: center !important;
            margin: 0;
            width: 100% !important;
        }

        .files input:focus {
            outline: 2px dashed #92b0b3;
            outline-offset: -10px;
            -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
            transition: outline-offset .15s ease-in-out, background-color .15s linear;
            border: 1px solid #92b0b3;
        }

        .files {
            position: relative
        }

        .files:after {
            pointer-events: none;
            position: absolute;
            top: 60px;
            left: 0;
            width: 50px;
            right: 0;
            height: 56px;
            content: "";
            background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
            display: block;
            margin: 0 auto;
            background-size: 100%;
            background-repeat: no-repeat;
        }

        .color input {
            background-color: #f1f1f1;
        }

        .files:before {
            position: absolute;
            bottom: 10px;
            left: 0;
            pointer-events: none;
            width: 100%;
            right: 0;
            height: 57px;
            content: " or drag it here. ";
            display: block;
            margin: 0 auto;
            color: #2ea591;
            font-weight: 600;
            text-transform: capitalize;
            text-align: center;
        }

        .fb9 {
            border: 1px solid #3366FF;
            background-color: #B3C6FF;
            width: 150px;
            height: 30px;
        }

    </style>


</head>

<body>

    <!-- @include('Vendor.imageLoad') -->

    <div class="total">
        <div class="main">

            <div class="header">
                <img class="logo-img" src="{{ asset('assets/images/logo.png') }}" alt="">
                <div class="right-div" style="display: flex;">
                    <a href="#" style="margin: auto;">


                        @if (empty($vendor->profile_image))
                            <img class="header-img" src="{{ asset('assets/images/man1.jpg') }}" alt=""
                                onclick="myFunc1()" onkeyup="filterFunc1()" id="myInt1">
                        @else
                            <img class="header-img"
                                src="{{ asset('storage/vendor_profile/' . $vendor->profile_image) }}" alt=""
                                onclick="myFunc1()" onkeyup="filterFunc1()" id="myInt1">
                        @endif


                    </a>
                    <div class="drop1">
                        <div id="myDrop1" class="drop-content1"
                            style="width: 100px; height: 230px;line-height: 45px;border-radius: 10px; margin-top:70px; margin-left:-100px;">
                            <div style="width: 150px;">
                                <li style="border-bottom: 1px solid black;"><a href="{{ route('vendor') }}"
                                        style="width: 100px; color:black; margin-left:15px;">Dashboard</a></li>
                                <li style="border-bottom: 1px solid black;"><a href="{{ route('vendor_profile') }}"
                                        style="width: 100px; color: black; margin-left:15px;">Profile</a></li>
                                <li style="border-bottom: 1px solid black;"><a href="{{ route('tendor_request') }}"
                                        style="width: 100px; color:black; margin-left:5px;">Tender</a></li>
                                <li style="border-bottom: 1px solid black;">
                                    <a href="Request_call.html"
                                        style="width: 100px; color:black; margin-left:5px;">Request call</a>
                                </li>

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
                        <h4 style="font-size: 36px;">Add Business</h4>
                        <p style="font-size: 18px;color: #fff">Submit your Business and Grow</p>
                    </div>

                </div>
            </div>


        </div>


    </div>



  <!--   <div id="app">
        <div id="dropzoneId" class="dropzone">
            <div class="dz-default dz-message">
                <h3>Title</h3>
                <p class="text-muted">Any related files you can upload <br>
                </p>
            </div>
        </div>
        <div id="dynamicImages">
        </div>
        {{-- ... a lot of main HTML code ... --}}
        {{-- JS assets at the bottom --}}

    </div> -->
    <!-- Scripts -->

    <!-- JS -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/main.js"></script> -->
    <form action="{{ route('edit_update_business') }}" id="form_data" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="business_id" value="{{ $business['id'] }}">
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
                                    <input type="text" name="business_title" value="{{ $business['business_title'] }}" class="form-control"
                                        placeholder="Title ">
                                    <div class="">
                                            <label>Category*</label>

                                            <select name="
                                        business_category" class="form-control " aria-label="Default select example"
                                        id="chooseCategory" onchange="this.form.click()">

                                          @foreach ($category as $key => $cat)
                                          @if($cat['id'] == $business['category'])
                                            <option >{{ $cat['category'] }}</option>
                                            <!-- <input type="hidden" name=""> -->
                                            @endif
                                         @endforeach
                                        @foreach ($category as $key => $cat)
                                            <option value="{{ $cat['id'] }}">
                                                {{ $cat['category'] }}
                                            </option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <label>Sub Category*</label>

                                        <select name="business_SubCategory" class="form-control "
                                            aria-label="Default select example" id="chooseSuCategory"
                                            onchange="this.form.click()">
                                            <!-- <option value="selected">Choose Subcategory</option> -->
                                            @foreach (\App\Models\Sub_category::where('category_type', $business['category'])->get() as $key => $val)
                                            @if($val['id'] == $business['business_category'])
                                            <option value="{{ $val->id }}">
                                                {{ $val->sub_category }}
                                            </option>
                                            @endif
                                            @endforeach
                                        </select>

                                    </div>


                                    <div class="test ">
                                        <label>Description</label>
                                        <textarea class="form-control" placeholder="Business Description"
                                            style="height:200px;width: 100%;" name="business_description">{{ $business['business_description'] }}</textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <script>
               
                $(document).ready(function() {



                    $("#add_row").one('click', function(event) {

                        for (let i = 1; i <= product - 1; i++) {
                            $('#tab_logic #addr1').append(
                                '<div class="row mt-5 "><div class="col-sm-12 "><div class=" bg-light"><div class=" bg-light"><div class="box "><div class="row"><div class="col-md-4"><label>Name</label><input type="text" name="product_name[]"class="form-control"placeholder="Name of your Product / Service "></div><div class="col-md-4"><label>Price From</label><input type="text" name="product_price_from[]"class="form-control" placeholder=" "></div><div class="col-md-4"><label>Price To</label><input type="text" name="product_price_to[]"class="form-control" placeholder=" "></div> </div><div class="row"><div class="col-md-12"><label>Category*</label><input type="text" name="product_category[]"class="form-control" placeholder="Choose Category"></div></div><div class="row"><div class="col-md-12"><label>Description</label><textarea name="product_description[]"class="form-control"placeholder="Buisness Description"style="height:200px;width: 100%;"></textarea></div></div></div></div></div></div> </div>'
                            );

                        }

                    });
                });
            </script>

            <!-- <div class="Total_Con ">
                    <div class="">
                        <div class="container   bg-light">
                            <div class="row shadow m-3">
                                <div class="col-md-12">


                                    <div class="privacy ">
                                        <h2>Upload Image</h2>
                                    </div>
                                    <div id="tab_logic">
                                        <div id="addr0">

                                            <div class="row ">
                                                <div class="col-sm-12">
                                                    <div class="m-3">
                                                        <h4 style="color:#495E96;font-size: 15px">Upload Banner</h4>

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
                </div> -->


            <div class="Total_Con ">
                <div class="">
                        <div class=" container bg-light">
                    <div class="row shadow m-3">
                        <div class="col-md-12">


                            <div class="privacy ">
                                <h2>Upload Image</h2>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">

                                        <p>Upload Banner </p>
                                        <div class="form-group files">

                                            <input type="file" value="" name="upload_banner" id="upload_banner" placeholder=""
                                                class="form-control" multiple="">
                                                <label>{{ $business['business_image'] }}</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">

                                        <p>Upload image</p>
                                        <div class="form-group">
                                           <!--  <input type="file" class="form-control" id="images" name="images[]"
                                                onchange="preview_images();" multiple /> -->

                                                <INPUT type="button" class="btn btn-success " value="Add Row" onclick="addRow('dataTable3')" />
                                                <INPUT type="button" value="Delete Row" onclick="deleteRow('dataTable3')" class="btn btn-danger" />
                                                
                                                <TABLE id="dataTable3" class="table-bordered form-dataTable" style="border: none;width: 100%;" border="1">
                                              <thead>
                                                  <th> </th>
                                                  <th>Image</th>
                                                  <!-- <th></th> -->
                                              </thead>

                                          <tbody>
                                            @foreach($gallery_image as $key=>$val)
                                            <TR>
                                              <TD><INPUT class="" type="checkbox" name="chk"/></TD>
                                              
                                              <TD><input class="form-control" type='file' onchange="readURL(this);" name="images[]" value="{{ $val['gallery_image'] }}" />
                                                <!-- {{ $val['gallery_image'] }} -->
                                              </TD>
                                            </TR>
                                           @endforeach
                                          </tbody>
                                      </TABLE>
                                     

                                        </div>

                                        <div class="row" id="image_preview"></div>
                                    </div>
                                    <div class="col-md-6">

                                        <p>Upload Brochure </p>
                                        <div class="form-group files">

                                            <input type="file" name="upload_brochure" id="upload_brochure"
                                                class="form-control" multiple="">
                                                <label>{{ $business['business_brochure'] }}</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2" style="margin-top: 20px">
                                        <button type="button" class="SandR" id="upload_image">upload
                                            Image</button>
                                    </div>

                                </div>
                            </div>
                            <!-- /container -->
                            <div id="tab_logic">
                                <div id="addr0">

                                    <!-- <section class="contant container-fluid">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h3 class="jumbotron">Laravel multi image</h3>
                                                        <form method="post" action="" enctype="multipart/font-data" class="dropzone" id="dropzone">
                                                            <div class="dz-default dz-message">
                                                                <h4>drop here image</h4>
                                                                
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </section> -->

                                </div>
                                <div id="addr1"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
             function addRow(tableID) {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
            var colCount = table.rows[0].cells.length;
            for(var i=0; i<colCount; i++) {
                var newcell = row.insertCell(i);
                newcell.innerHTML = table.rows[1].cells[i].innerHTML;
                //alert(newcell.childNodes);
                switch(newcell.childNodes[0].type) {
                    case "text":
                            newcell.childNodes[0].value = "";
                            break;
                    case "checkbox":
                            newcell.childNodes[0].checked = false;
                            break;
                    case "select-one":
                            newcell.childNodes[0].selectedIndex = 0;
                            break;
                }
            }
        }
        function deleteRow(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    if(rowCount <= 1) {
                        alert("Cannot delete all the rows.");
                        break;
                    }
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
            }
            }catch(e) {
                alert(e);
            }
        }
        </script>



        <div class="Total_Con ">
            <div class="">
                        <div class=" container bg-light">
                <div class="row shadow m-3">
                    <div class="col-md-12">


                        <div class="privacy ">
                            <h2>Document</h2>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6" style="margin-left: 196px">

                                    <div class="form-group files" style="border: 1px dashed #000;">

                                        <input type="file" name="document_img" id="document_img" class="form-control ">
                                        @if($business['business_document'])
                                        <label>{{ $business['business_document'] }}</label>
                                        @endif
                                    </div>

                                </div>
                                <div class="g-recaptcha" data-sitekey="6Ldbdg0TAAAAAI7KAf72Q6uagbWzWecTeBWmrCpJ"
                                    style="margin-left: 350px;"></div>
                            </div>
                        </div>
                        <!-- /container -->
                        <div id="tab_logic">
                            <div id="addr0">

                                <!-- <section class="contant container-fluid">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h3 class="jumbotron">Laravel multi image</h3>
                                                        <form method="post" action="" enctype="multipart/font-data" class="dropzone" id="dropzone">
                                                            <div class="dz-default dz-message">
                                                                <h4>drop here image</h4>
                                                                
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </section> -->

                            </div>
                            <div id="addr1"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="Total_Con ">
            <div class="container   bg-light">
                <div class="shadow m-3 row">
                    @foreach($product as $key=> $val)
                    <div class="panel panel-default col-sm-12">
                        <div class="privacy ">
                            <h4>Add product </h4>
                        </div>
                        <div id="tab_logic">
                            <div id="education_fields">

                            </div>
                            <div id="addr0" class="row">
                                <div class="col-sm-4 nopadding">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="product_name[]" value="{{ $val['product_name'] }}" class="form-control"
                                            placeholder="Name of your Product / Service ">
                                    </div>
                                </div>
                                <div class="col-sm-4 nopadding">
                                    <div class="form-group">
                                        <label>Price From</label>
                                        <input type="text" value="{{ $val['product_price_from'] }}" name="product_price_from[]" class="form-control"
                                            placeholder=" ">
                                    </div>
                                </div>
                                <div class="col-sm-4 nopadding">
                                    <div class="form-group">
                                        <label>Price To</label>
                                        <input type="text" value="{{ $val['product_price_to'] }}" name="product_price_to[]" class="form-control"
                                            placeholder=" ">
                                    </div>
                                </div>
                                <div class="col-sm-12 nopadding">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="product_description[]" value="" class="form-control "
                                            placeholder="Buisness Description"
                                            style="height:200px;width: 100%;">{{ $val['product_description'] }}</textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6 nopadding">
                                    <div class="form-group">
                                        <label>Product Image</label>
                                        <input type="file" name="product_image[]" value="{{ $val['product_name'] }}" class="form-control"
                                            id="product_image" placeholder="image">
                                    </div>
                                </div>
                                
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button type="button" id="add_row" value="add_row" onclick="preview_images({{ $plan_detail->product_listing }});"
                                    class="btn btn-warning mt-3 mb-3 ">Add image</button>
            </div>
        </div>
        <input type="hidden" name="product_cunt" id="product_cunt" value="{{ $product_cunt }}">
        



        <script type="text/javascript">
            var room = 1;

            function education_fields(id) {
              if (room < id) {
                room++;
                
                var objTo = document.getElementById('education_fields')
                var divtest = document.createElement("div");
                divtest.setAttribute("class", "form-group removeclass" + room);
                var rdiv = 'removeclass' + room;
                divtest.innerHTML =
                    '<div class="panel-body row" style="width="300px;"><div class="col-sm-4 nopadding"><div class="form-group"><label>Name</label><input type="text" name="product_name[]" class="form-control" placeholder="Name of your Product / Service "></div></div><div class="col-sm-4 nopadding"><div class="form-group"><label>Price From</label><input type="text" name="product_price_from[]" class="form-control" placeholder=" "></div></div><div class="col-sm-4 nopadding"><div class="form-group"><label>Price To</label><input type="text" name="product_price_to[]" class="form-control" placeholder=" "></div></div><div class="col-sm-12 nopadding"><div class="form-group"><label>Description</label><textarea name="product_description[]" class="form-control " placeholder="Buisness Description" style="height:200px;width: 100%;"></textarea></div></div><div class="col-sm-6 nopadding"><div class="form-group"><label>Product Image</label><input type="file" name="product_image[]" class="form-control" id="product_image" placeholder="image"></div></div><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields(' +
                    room +
                    ');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div></div>';
                    }
                objTo.appendChild(divtest)
            }

            function remove_education_fields(rid) {
                $('.removeclass' + rid).remove();
            }
        </script>




        <!--   <div class="Total_Con ">
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
                                        <div class="bg-light">
                                            <div class="box ">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Name</label>
                                                        <input type="text" name="product_name"
                                                            class="form-control"
                                                            placeholder="Name of your Product / Service ">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Price From</label>
                                                        <input type="text" name="product_price_from"
                                                            class="form-control" placeholder=" ">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Price To</label>
                                                        <input type="text" name="product_price_to"
                                                            class="form-control" placeholder=" ">
                                                    </div>
                                                </div>



                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Description</label>
                                                        <textarea name="product_description"
                                                            class="form-control "
                                                            placeholder="Buisness Description"
                                                            style="height:200px;width: 100%;"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                       
                                                        <label>Product Image</label>
                                                        <input type="file" name="product_image" class="form-control custom-file-input" id="product_image" placeholder="image">
                                                    
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div id="addr1"></div>

                        <button type="button" id="add_row" value="add_row" class="btn btn-warning mt-3 mb-3 ">Add
                            Row</button>

                    </div>
                    </div>
                </div>
                </div> 
            </div> -->

        </div>

        </div>




        <script type="text/javascript">
            $("#upload_image").on("click", function() {
                var filedata = document.getElementsByName("images"),
                    formdata = false;

                if (window.FormData) {
                    formdata = new FormData();
                }
                var i = 0,
                    len = filedata.files.length,
                    img, reader, file;

                for (i; i < len; i++) {
                    file = filedata.files[i];

                    if (window.FileReader) {
                        reader = new FileReader();
                        reader.onloadend = function(e) {
                            showUploadedItem(e.target.result, file.fileName);
                        };
                        reader.readAsDataURL(file);
                    }
                    if (formdata) {
                        formdata.append("file", file);
                    }
                }
                console.log(formdata);

                // $.ajax({
                //     url: 'upload.php', // <-- point to server-side PHP script 
                //     dataType: 'text', // <-- what to expect back from the PHP script, if anything
                //     cache: false,
                //     contentType: false,
                //     processData: false,
                //     data: form_data,
                //     type: 'post',
                //     success: function(php_script_response) {
                //         alert(php_script_response); // <-- display response from the PHP script, if any
                //     }
                // });
            });




            function calculateRow(row) {
                var price = +row.find('input[name^="price"]').val();

            }

            function calculateGrandTotal() {
                var grandTotal = 0;
                $(".bg-light").find('input[name^="price"]').each(function() {
                    grandTotal += +$(this).val();
                });
                $("#grandtotal").text(grandTotal.toFixed(2));
            }
        </script>








        <style>
            .fa-upload {
                font-size: 60px;
                border: 1px solid rgb(168, 168, 167);
                border-radius: 10px;
                padding: 20px;
            }

        </style>



        <div class="Total_Con">

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
                                                    <input type="text" value="{{ $business['country'] }}" class="form-control" placeholder="Canada "
                                                        name="country">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="add_a_buisness_text5"><label>City</label>
                                                    <input type="text" value="{{ $business['city'] }}" class="form-control" placeholder="Canada "
                                                        name="city">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="add_a_buisness_text6"><label>Location</label>
                                                    <input type="text" value="{{ $business['location'] }}" class="form-control"
                                                        placeholder="e.g 34 Wigmore Street, London" name="location">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="add_a_buisness_text4"><label>Longitude</label>
                                                    <input type="text" value="{{ $business['lang'] }}" class="form-control" placeholder="Longitude"
                                                        name="longitude">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="add_a_buisness_text5"><label>Latitude</label>
                                                    <input type="text" value="{{ $business['lat'] }}" class="form-control" placeholder="Canada "
                                                        name="Latitude">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button type="button"
                                                    style="background: #F4E059;width: 137.82px;height: 39px;font-size:16px;margin-bottom: 16px;margin-left: 30px;">Select
                                                    Location</button>
                                            </div>
                                        </div>


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
                            <div class="bi card">
                                <div class="privacy">
                                    <h2>Buisness Information</h2>
                                </div>
                                <div class="box">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="add_a_buisness_text7"><label>Email</label>
                                                <input type="text" class="form-control"
                                                    placeholder="buisness@gmail.com " value="{{ $business['email'] }}" name="email">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">

                                            <div class="add_a_buisness_text8"><label>Mobile</label>
                                                <input type="text" value="{{ $business['mobile_no'] }}" class="form-control" placeholder="9656788378"
                                                    name="mobile_no">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">

                                            <div class="add_a_buisness_text9"><label>Website</label>
                                                <input type="text" class="form-control"
                                                    placeholder="https://yoursite.com/" value="{{ $business['website'] }}" name="website">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="add_a_buisness_text10"><label>FAX NO</label>
                                                <input type="text" class="form-control" value="{{ $business['fax_no'] }}" placeholder="256 254 7854"
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
                                                <input type="text" class="form-control" value="{{ $business['facebook'] }}" placeholder=""
                                                    name="facebook">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="add_a_buisness_text8"><label>LinkedIn URL</label>
                                                <input type="text" class="form-control" value="{{ $business['linkedin'] }}" placeholder=""
                                                    name="linkedin">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">

                                            <div class="add_a_buisness_text9"><label>Twitter URL</label>
                                                <input type="text" class="form-control" value="{{ $business['twitter'] }}" placeholder=""
                                                    name="twitter">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="add_a_buisness_text10"><label>Instagram URL</label>
                                                <input type="text" class="form-control" value="{{ $business['instagram'] }}" placeholder=""
                                                    name="instagram">
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="row card  li m-3">
                    <div class="col-md-12 ">
                        <div class="privacy">
                            <h2>Business Hour</h2>
                        </div>
                        <div class="time_date">
                            <div class="form-group row ">
                                <label for="inputEmail3" class="col-md-2 col-form-label">Monday</label>
                                <div class="col-md-5">
                                    <select id="inputState" name="monday_from" class="form-control">
                                        <option value="{{ $business['monday_from'] }}">{{ $business['monday_from'] }}</option>
                                        <!-- <input type="hidden" value="{{ $business['monday_from'] }}" name="monday_from_hide"> -->
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
                                        <option value="{{ $business['monday_to'] }}">{{ $business['monday_to'] }}</option>
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
                                        <option value="{{ $business['tuesday_from'] }}">{{ $business['tuesday_from'] }}</option>
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
                                        <option value="{{ $business['tuesday_to'] }}">{{ $business['tuesday_to'] }}</option>
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
                                        <option value="{{ $business['wednesday_from'] }}">{{ $business['wednesday_from'] }}</option>
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
                                        <option value="{{ $business['wednesday_to'] }}">{{ $business['wednesday_to'] }}</option>
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
                                        <option value="{{ $business['thursday_from'] }}">{{ $business['thursday_from'] }}</option>
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
                                        <option value="{{ $business['thursday_to'] }}">{{ $business['thursday_to'] }}</option>
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
                                        <option value="{{ $business['friday_from'] }}">{{ $business['friday_from'] }}</option>
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
                                        <option value="{{ $business['friday_to'] }}">{{ $business['friday_to'] }}</option>
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
                                        <option value="{{ $business['saturday_from'] }}">{{ $business['saturday_from'] }}</option>
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
                                        <option value="{{ $business['saturday_to'] }}">{{ $business['saturday_to'] }}</option>
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
                                        <option value="{{ $business['sunday_from'] }}">{{ $business['sunday_from'] }}</option>
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
                                        <option value="{{ $business['sunday_to'] }}">{{ $business['sunday_to'] }}</option>
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

                            <!-- <div class="row"> -->
                            <div class="form-group" style="align-items: center;justify-content: left;">
                                <input type="radio" style="width: auto;margin-top: 0px;" name="businesshour">
                                <label style="color: #495E96;margin: 0px 0px 0px 10px;">This Business open 7x24</label>
                            </div>

                            <!-- </div> -->



                        </div>

                    </div>
                </div>
            </div>





            <div class="Total_Con">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="form_submit" style="padding:20px;">
                                <button class="SandR" type="submit" id="formDataSubmit" id="submit"
                                    onclick="formDataSubmit()" style="color:black">Submit & Preview</button>
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
                        <button class="SandR"><a href="Add_a_buisness.html" target="_self"
                                style="color:#fff">Add a
                                Buisness</a></li></button>
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



    <!-- dropzon js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
             integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
    </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"
             integrity="sha512-VQQXLthlZQO00P+uEu4mJ4G4OAgqTtKG1hri56kQY1DtdLeIqhKUp9W/lllDDu3uN3SnUNawpW7lBda8+dSi7w=="
             crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

    <!-- dropzon js -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
             integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
    </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
    {{-- ...Some more scripts... --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script>

            
        
        // Turn off auto discovery
        Dropzone.autoDiscover = false;
        $(function() {
            // Attach dropzone on element
            $("#dropzoneId").dropzone({
                url: "{{ route('store_image') }}",
                addRemoveLinks: true,
                maxFilesize: {{ isset($maxFileSize) ? $maxFileSize : config('attachment.max_size', 1000) / 1000 }},
                acceptedFiles: "{!! isset($acceptedFiles) ? $acceptedFiles : config('attachment.allowed') !!}",
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                params: {!! isset($params) ? json_encode($params) : '{}' !!},
                success: function(response) {
                    // uploaded files
                    $('#dynamicImages').append('<input type="hidden" name="image['+ response.name +']" value="' + response.name + '">');
                    var uploadedFiles = [];
                    @if (isset($uploadedFiles) && count($uploadedFiles))
                        // show already uploaded files
                        uploadedFiles = {!! json_encode($uploadedFiles) !!};
                        var self = this;
                        uploadedFiles.forEach(function (file) {
                        // Create a mock uploaded file:
                        var uploadedFile = {
                        name: file.filename,
                        size: file.size,
                        type: file.mime,
                        dataURL: file.url
                        };
                        // Call the default addedfile event
                        self.emit("addedfile", uploadedFile);
                        // Image? lets make thumbnail
                        if( file.mime.indexOf('image') !== -1) {
                        self.createThumbnailFromUrl(
                        uploadedFile,
                        self.options.thumbnailWidth,
                        self.options.thumbnailHeight,
                        self.options.thumbnailMethod,
                        true, function(thumbnail) {
                        self.emit('thumbnail', uploadedFile, thumbnail);
                        });
                        } else {
                        // we can get the icon for file type
                        self.emit("thumbnail", uploadedFile, getIconFromFilename(uploadedFile));
                        }
                        // fire complete event to get rid of progress bar etc
                        self.emit("complete", uploadedFile);
                        })
                    @endif
                    // Handle added file
                    this.on('addedfile', function(file) {
                        var thumb = getIconFromFilename(file);
                        $(file.previewElement).find(".dz-image img").attr("src", thumb);
                    })
                    // handle remove file to delete on server
                    this.on("removedfile", function(file) {
                        // try to find in uploadedFiles
                        var found = uploadedFiles.find(function(item) {
                            // check if filename and size matched
                            return (item.filename === file.name) && (item.size === file
                                .size);
                        })
                        // If got the file lets make a delete request by id
                        if (found) {
                            $.ajax({
                                url: "/attachments/" + found.id,
                                type: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                                },
                                success: function(response) {
                                    console.log('deleted');
                                }
                            });
                        }
                    });
                    // Handle errors
                    this.on('error', function(file, response) {
                        var errMsg = response;
                        if (response.message) errMsg = response.message;
                        if (response.file) errMsg = response.file[0];
                        $(file.previewElement).find('.dz-error-message').text(errMsg);
                    });
                }
            });
        })
        // Get Icon for file type
        function getIconFromFilename(file) {
            // get the extension
            var ext = file.name.split('.').pop().toLowerCase();
            // if its not an image
            if (file.type.indexOf('image') === -1) {
                // handle the alias for extensions
                if (ext === 'docx') {
                    ext = 'doc'
                } else if (ext === 'xlsx') {
                    ext = 'xls'
                }
                return "/images/icon/" + ext + ".svg";
            }
            // return a placeholder for other files
            return '/images/icon/txt.svg';
        }
    </script>


    <script type="text/javascript">
        //$( '#form_data' ).on( 'submit', function(e) {
        // alert();
        //  e.preventDefault();
        //  var image = $('#upload_banner').val();
        //  alert(image)

        //  var name = $(this).find('input[name=name]').val();

        // $.ajax({
        //     type: "POST",
        //     url: host+'/comment/add',
        // }).done(function( msg ) {
        //     alert( msg );
        // });

        // });


        function preview_images() {
            var total_file = document.getElementById("images").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='" + URL.createObjectURL(
                    event.target.files[i]) + "'></div>");
            }
        }

        +
        function($) {
            'use strict';

            // UPLOAD CLASS DEFINITION
            // ======================

            var dropZone = document.getElementById('drop-zone');
            var uploadForm = document.getElementById('js-upload-form');

            var startUpload = function(files) {
                console.log(files)
            }

            uploadForm.addEventListener('submit', function(e) {
                var uploadFiles = document.getElementById('js-upload-files').files;
                e.preventDefault();

                startUpload(uploadFiles);
            });

            dropZone.ondrop = function(e) {
                e.preventDefault();
                this.className = 'upload-drop-zone';

                startUpload(e.dataTransfer.files)
            }

            dropZone.ondragover = function() {
                this.className = 'upload-drop-zone drop';
                return false;
            }

            dropZone.ondragleave = function() {
                this.className = 'upload-drop-zone';
                return false;
            }

        }(jQuery);
    </script>
    <script>
        $('#chooseCategory').change(function() {
            var category = $('#chooseCategory').val();
            $.ajax({
                url: '{{ url('business/subCategory') }}',
                data: {
                    'category': category
                },
                type: "GET",
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                success: function(data) {
                    // alert(JSON.stringify(data));
                    // alert(data.subCategory.length);
                    $("#chooseSuCategory").empty();
                    for (var i = 0; i < data.subCategory.length; i++) {
                        // alert(data.subCategory.sub_category)
                        $("#chooseSuCategory").append('<option value="' + data.subCategory[i].id +
                            '">' + data.subCategory[i].sub_category + '</option>');
                    }


                },

            });
        })




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
        $fileInput.on('dragenter focus click', function() {
            $droparea.addClass('is-active');
        });

        // back to normal state
        $fileInput.on('dragleave blur drop', function() {
            $droparea.removeClass('is-active');
        });

        // change inner text
        $fileInput.on('change', function() {
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
        $fileInput.on('dragenter focus click', function() {
            $droparea.addClass('is-active');
        });

        // back to normal state
        $fileInput.on('dragleave blur drop', function() {
            $droparea.removeClass('is-active');
        });

        // change inner text
        $fileInput.on('change', function() {
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
        $fileInput.on('dragenter focus click', function() {
            $droparea.addClass('is-active');
        });

        // back to normal state
        $fileInput.on('dragleave blur drop', function() {
            $droparea.removeClass('is-active');
        });

        // change inner text
        $fileInput.on('change', function() {
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
        $fileInput.on('dragenter focus click', function() {
            $droparea.addClass('is-active');
        });

        // back to normal state
        $fileInput.on('dragleave blur drop', function() {
            $droparea.removeClass('is-active');
        });

        // change inner text
        $fileInput.on('change', function() {
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

                reader.onload = function(e) {
                    $('#image_1')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function img2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image_2')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function img3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image_3')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function img4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image_4')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function img5(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image_5')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function img6(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image_6')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function img7(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image_7')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function img8(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image_8')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function img9(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image_9')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function img10(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
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
        Dropzone.options.dropzone = {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 50000,
            removedfile: function(file) {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ url('delete') }}',
                    data: {
                        filename: name
                    },
                    success: function(data) {
                        console.log("File has been successfully removed!!");
                    },
                    error: function(e) {
                        console.log(e);
                    }
                });
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },

            success: function(file, response) {
                console.log(response);
            },
            error: function(file, response) {
                return false;
            }
        };
    </script>






</body>

</html>
