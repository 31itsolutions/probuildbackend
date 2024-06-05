{{-- <div class="package_popup shadow">

    <div class="content_box">

        <div class="imgb">

        <img src="{{ asset('assets/images/package-icon.png') }}" alt="">

      </div>

      {{-- @foreach ($check_package as $check_package_info) --}}
          
 
{{-- 
      <div class="content_package">
          <h4>Get <b> {{ $check_package->package_name }} </b> for </h4>
          <h5>{{ $check_package->validity }} Month</h5>

          <p>Then enjoy with specific features</p>


          <div class="click_area">

            <button type="button" class="btn btn-light close" >Skip</button>

            <a href="#" class="btn btn-primary">Ugrade Now</a>

          </div> --}}

          {{-- @endforeach --}}

      {{-- </div>
    </div> --}} --}}

    <script>

        const popup = document.querySelector('.package_popup');
        const close = document.querySelector('.close');
        const body = document.querySelector('.body');
        popup.style.display = "none";

        window.onload = function()){

            setTimeout(function(){
                popup.style.display = "block";
                body.style.overflow = "hidden";
            },2000);
        }

        close.addEventListener('click', () =>{
            popup.style.display = "none";
            body.style.overflow = "scroll";

        })
    </script>


</div>