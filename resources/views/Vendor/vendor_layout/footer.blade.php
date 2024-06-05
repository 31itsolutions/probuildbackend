

<div class = "container-fluid footer mt-5" style ="" >
<div class = "row mx-5" >
<div class = "col-md-12">

<div class = "row ">
<div class =  "col-md-3 footer_left">
<h1>Ready to get started?</h1>

<h2><a href = "">Add a Business</a></h2>

</div>


<div class =  "col-md-3 footer_left_two">

<h1>Pro Build</h1>

<a href  = "" >About us</a>

</div>



<div class =  "col-md-3 footer_left_three">
<h1>Help</h1>

<a href  = "" >FAQ</a><br>
<a href  = "" >Contact us</a>

</div>



<div class =  "col-md-3 footer_right" >

<h1>Quick Links</h1>

<a href  = "" >Browse category</a><br>
<a href  = "" >Search business</a><br>
<a href  = "" >Login to your account</a>
</div>
</div>

</div>
</div>


<div class = "row">
<div class = "col-md-6 footer_bot_left">
<a href  = "" >Browse category</a>
<a href  = "" >Search business</a>
</div>

<div class = "col-md-6 footer_media">
<a href=""><i class="fab fa-facebook-f"></i></a>
<a href=""> <i class="fab fa-twitter"></i></a>
<a href=""><i class="fab fa-instagram"></i></a>

</div>
</div>


</div>




 <style>

    #map {
    top: 0;
    bottom: 0;
    max-width: 100%;
    }
    .marker {
    background-image: url('mapbox-icon.png');
    background-size: cover;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    cursor: pointer;
    }
    .mapboxgl-popup {
    max-width: 200px;
    }
    .mapboxgl-popup-content {
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    }


    </style>


     <script>
      $(function () {
          // flash auto hide
          $('#flash-msg .alert').not('.alert-danger, .alert-important').delay(6000).slideUp(500);
      })


      function change_status(id, name, check, column){
      var status = 0;
        if($(check).is(':checked')){
            var status = 1;
        }
      $.ajax({
          url: "{{ route('change_business_status') }}",
          type: 'POST',
          data: {"_token": '{{csrf_token()}}', status:status, id:id, name:name, column:column},
          success: function(response){
              if(response.status == 1){
                  toastr.success("Status Changed Successfully!", response.message);
              }else{
                  toastr.error("Error While changing Status", response.message);
              }

          },
          error:function(response){
              toastr.error("Error While changing Status","Please Refresh and Try!");
          }
      })
  }
  </script>

<script>
    var x = document.getElementById("read_more");
    var l = document.getElementById("less");
    var m = document.getElementById("more");
      l.classList.add("hide");

  x.classList.add("hide");
  function read_comment() {
    if (x.classList.contains("hide")) {
      x.classList.remove("hide");

      l.classList.remove("hide");
      m.classList.add("hide");

    } else {
      x.classList.add("hide");
         l.classList.add("hide");
      m.classList.remove("hide");
    }
  }
</script>


      <script type="text/javascript">
$(document).ready(function () {
$(' .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });
});
</script>

    <script type="text/javascript" src="{{ URL::asset('assets/js/company_profile.js') }}"></script>
