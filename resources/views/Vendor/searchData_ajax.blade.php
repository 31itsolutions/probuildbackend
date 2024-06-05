@foreach($data as $key => $val)
              <div class="col-md-3" data-aos="fade-up" data-aos-delay="50">
                <div class="about-col">
                  <div class="img">
                    <img src="{{asset('assets/images/man.png')}}" alt="" class="img-fluid zoom_img">
                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                  </div>
                  <h2 class="title"><a href="#">{{ $val['business_title'] }}</a></h2>
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
                            <div class="location">{{ $val['city'] }},{{ $val['location'] }},{{ $val['country'] }}</div>
                          @if (Auth::guard('customer')->check())
                          <p> <b><a href="#">views</a></b></p>
                          @else
                          <p> <b><a href="{{ route('customer_login') }}">view</a></b></p>
                          @endif
                </div>
              </div>
              @endforeach