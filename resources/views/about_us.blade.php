@extends('frontlayout')
@section('content')
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="../frontend/css/rooms.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


<style>
  .rooms-body{
    margin: 5%;
	.carousel {
   margin-left: 10%;
   width: 75%;
   margin-top: 5%;
}
.img{
    height: 150vh;
}
.mb-4 {
  color: #255D39;
}
li {
  color: #766a0f; 
}
.btn {
    background-color: #5b9c72;
    border :#387B50;
    color: #fff;
 }
 .border-top{
      color: #255D39;
      border-top-color: #255D39;
  }

 #title{
  color: #255D39;
 }
 .btn {
    background-color: #5b9c72;
    border :#387B50;
    color: #fff;
 }
  }

  /* .roww{
    height: 100%;
  }  */
</style>
<body>
  <div class="my-6 px-4" id="banner-top">
  
    <h2 class="fw-bold h-font text-center mt-5">OUR ROOMS</h2>

  </div>
  <br><br> 
  <div class="rooms-body ">
    <div class="row roww">
     <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0">  
        <div class="container-fluid flex-lg-column align-items-stretch ">
          <h4 class="mt-0">FILTERS</h4>
      
        <div class="border bg-light p-3 rounded mb-3">
          <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
          <label class="form-label">Check-in</label>
          <input type="date" class="form-control shadow-none mb-3">
          <label class="form-label">Check-in</label>
          <input type="date" class="form-control shadow-none">
        </div>
        <div class="border bg-light p-3 rounded mb-3">
          <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
          <div class="mb-2">
            <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
            <label class="form-check-label" for="f1">Facility one</label>
          </div>
          <div class="mb-2">
            <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
            <label class="form-check-label" for="f2">Facility two</label>
          </div>
          <div class="mb-2">
            <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
            <label class="form-check-label" for="f3">Facility three</label>
          </div>
        </div>
        <div class="border bg-light p-3 rounded mb-3">
          <h5 class="mb-3" style="font-size: 18px;">Adults</h5>
          <div class="d-flex">
            <div class="me-2">
            <label class="form-label">Adults</label>
            <input type="number" class="form-control shadow-none">
          </div>
          <div>
            <label class="form-label">Children</label>
            <input type="number" class="form-control shadow-none mb-6">
          </div>
          </div>
        </div>
      </div>
    </div> 
  
  
  <div class="col-lg-9 col-md-12 px-4 h-500">
    <div class="card mb-4 border-0  shadow">
    <div class="row g-0 p-3 align-items-center ">
      <div class="col-lg-5 mb-lg-3 mb-md-0 mb-3">
        <img src="{{asset('images/bedd.jpg')}}" class="img-fluid rounded mt-7">
      </div>
      <div class="col-md-5 px-lg-3 px-md-3 px-0">
        <h5 class="mb-3">Standard Room</h5>
        <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Room
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Sofa
              </span>
            </div>
            <div class="Facilities mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room Heater
              </span>
            </div>
            <div class="guests">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                5 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Children
              </span>
            </div>  
      </div>
   
      <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
        <h6 class="mb-4">$80 per night</h6>
        <a href="{{url('booking')}}" class="btn btn-sm w-100 shadow-none mb-2">Book Now</a>
        <a href="#symon" class="btn btn-sm w-100 shadow-none mb-3">More details</a>
      </div>
    </div>
   </div>
   <div class="card mb-4 border-0 shadow">
    <div class="row g-0 p-3 align-items-center">
      <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
        <img src="{{asset('images/deluxe2.jpg')}}" class="img-fluid rounded">
      </div>
      <div class="col-md-5 px-lg-3 px-md-3 px-0">
        <h5 class="mb-3">Deluxe Room</h5>
        <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Sofa
              </span>
            </div>
            <div class="Facilities mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room Heater
              </span>
            </div>
            <div class="guests">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                5 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Children
              </span>
            </div>  
      </div>
      <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
        <h6 class="mb-4">$160 per night</h6>
        <a href="{{url('booking')}}" class="btn btn-sm w-100 shadow-none mb-2" >Book Now</a>
        <a href="#symon" class="btn btn-sm w-100 shadow-none mb-3" >More details</a>
      </div>
    </div>
  </div>
 <div class="card mb-4 border-0 shadow">
    <div class="row g-0 p-3 align-items-center">
      <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
        <img src="{{asset('images/premier.jpg')}}" class="img-fluid rounded">
      </div>
      <div class="col-md-5 px-lg-3 px-md-3 px-0">
        <h5 class="mb-3">Premier Room</h5>
        <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Sofa
              </span>
            </div>
            <div class="Facilities mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room Heater
              </span>
            </div>
            <div class="guests">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">  
                5 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Children
              </span>
            </div>  
      </div>
      <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
        <h6 class="mb-4">$2000 per night</h6>
        <a href="{{url('booking')}}" class="btn btn-sm w-100 shadow-none mb-2">Book Now</a>
        <a href="#symon" class="btn btn-sm w-100 shadow-none mb-3">More details</a>
      </div>
    </div>
  </div> 
  </div>

</div>
  </div>
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active"> 
        <img src="{{asset('images/premier.jpg')}}" class="d-block w-100" alt="...">
        
      </div>
   
      <div class="carousel-item">
        <img src="{{asset('images/bed2.png')}}" class="d-block w-100" alt="...">
        
      </div>
   
      <div class="carousel-item">
        <img src="{{asset('images/deluxe2.jpg')}}" class="d-block w-100" alt="...">
       
      </div>
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
  
  
  


   <div class="container" style="margin-top:90px;" id="symon">
      <div class="row">
        <div class="col-lg-8">
            <div class="row">
                {{-- <div class="col-md-12 ftco-animate">
                <div class="single-slider owl-carousel">
                    <div class="item">
                        <div class="room-img" style="background-image: url('{{ asset('images/bedd.jpg') }}');"></div>
                    </div>
                    <div class="item">
                        <div class="room-img" style="background-image: url('{{ asset('images/standard.png') }}');"></div>
                    </div>
                    <div class="item">
                        <div class="room-img" style="background-image: url('{{ asset('images/stand.png') }}');"></div>
                    </div>  --}}
                <div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
                    <h2 class="mb-4 fw-bold"> <span> Standard Room</span></h2>
                          <p>At 30 sqm, this stands as our most economically sized unit. No effort has been spared to ensure that every square metre has been fitted with your pleasure in mind with all creature comforts close within reach. Feel the stresses of the day melt away with our designer rainshower, sink into our King Sized bed, and help yourself to the myriad of television options available on our HD flat-screen TV. High speed wifi also comes complimentary for all guests. Book this room now!</p>
                          <div class="d-md-flex mt-5 mb-5">
                            <h2 class="mb-4 fw-bold"><span>Room Highlights:</span></h2>
                          </div>
                              <ul class="list">
                                  <li><span>Occupancy:</span>2 Persons</li>
                                  <li><span>Beds:</span>1 King</li>
                                  <li><span>Room Size: </span>30 sqm</li>
                              </ul>
                            </div>
                          </div>
                              <h2 class="mb-4 fw-bold"><span>Features and Amenities:</span></h2>
                              <ul class="list ml-md-5">
                                  <li><span>49" HDTV</span> </li>
                                  <li><span>Coffee and Tea making facilities</span> </li>
                                  <li><span>Complimentary Access to I’M Onsen Spa Wellness Suites (onsen, steam and sauna) when you Book Direct!</span> </li>
                                  <li><span>Luxury German Rainshower</span> </li>
                                  <li><span>Safer</span> </li>
                                  <li><span>Telephone</span> </li>
                                  <li><span>Wifi</span> </li>
                                  <li><span>Workplace</span> </li>
                              </ul>
                          </div>
                          <p>It’s important to us that our guests are updated with appropriate information to make their stay as comfortable as possible. Read our hotel policy.</p>
                </div>
                {{-- <div class="col-md-12 room-single ftco-animate mb-5 mt-4">
                    <h3 class="mb-4">Take A Tour</h3>
                    <div class="block-16">
                    <figure>
                      <img src="images/room-4.jpg" alt="Image placeholder" class="img-fluid">
                      <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                    </figure>
                  </div>
                </div> --}}

                <div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
                    <h4 class="mb-4 fw-bold">Rate Us</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <form method="post" class="star-rating">
                                        <div class="form-check">
                                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                              <label class="form-check-label" for="exampleCheck1">
                                                  <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 1</span></p>
                                              </label>
                                        </div>
                                        <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                             <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 2</span></p>
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 3</span></p>
                                       </label>
                                        </div>
                                        <div class="form-check">
                                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 4</span></p>
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 5</span></p>
                                          </label>
                                        </div>
                                      </form>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
</div>
<div class="my-5 mx-5 px-4">
        <h2 class="fw-bold h-font text-center" id="title">OUR FACILITIES</h2>
      
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
          Hotel facilities management is the area of hotel operations concerned with implementing and keeping facilities. It refers to those tools and/or services focused on maintaining the sustainability and safety of a hotel’s facilities as well as ensuring that facilities are in good order and in suitable condition for guests. Facilities management also covers decisions about which facilities should be offered and how.

Safety and presentability have always been primary concerns for facilities management, ensuring that facilities are risk-free and inviting. In recent years, there’s been an increasing focus within hotel management on the concept of sustainability from an environmental perspective. Hotel trends lean increasingly towards ecological concerns as environmentally aware guests seek out properties incorporating sustainability into their ethos. This means that part of modern facilities management is the implementation of sustainable technologies into facilities where possible.
        </p>
      </div>
      
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4  pop">
              <div class="d-flex align-items-center mb-2">
                {{-- <img src="images/facilities/Wifi.svg" width="40px"> --}}
                <h5 class="m-0 ms-3">Internet Access</h5>
              </div>  
                <p>
                  Villas Hotel offers free Internet access. High-speed wireless Internet connection is complimentary both in the rooms and public areas.
                </p> 
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4  pop">
              <div class="d-flex align-items-center mb-2">
                {{-- <img src="images/facilities/Wifi.svg" width="40px"> --}}
                <h5 class="m-0 ms-3">Room Service</h5>
              </div>  
                <p>
                  Villas Hotel provides 24-hour room service. Please click here for Room Service menu.
                </p> 
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 pop">
              <div class="d-flex align-items-center mb-2">
                {{-- <img src="images/facilities/Wifi.svg" width="40px"> --}}
                <h5 class="m-0 ms-3">Breakfast</h5>
              </div>  
                <p>
                  The hotel restaurant with both indoor and outdoor seating offers an open-buffet breakfast and is directly accessible from guestroom corridors.
                </p> 
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 pop">
              <div class="d-flex align-items-center mb-2">
                {{-- <img src="images/facilities/Wifi.svg" width="40px"> --}}
                <h5 class="m-0 ms-3">Parking</h5>
              </div>  
                <p>
                  Villas Hotel offers 24-hour indoor parking for its guests. The hotel is directly accessible from the indoor car park and guests can easily reach the shopping mall by using the elevators that are facing the car park hotel entrance. 
                </p> 
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 pop">
              <div class="d-flex align-items-center mb-2">
                {{-- <img src="images/facilities/Wifi.svg" width="40px"> --}}
                <h5 class="m-0 ms-3">Free Shuttle Service</h5>
              </div>  
                <p>
                  The accommodating hotel guests can benefit of free shuttle service provided by Vialand Shopping & Entertainment World based on availability. Please click here for free shuttle bus hours and destinations.
                </p> 
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 pop">
              <div class="d-flex align-items-center mb-2">
                {{-- <img src="images/facilities/Wifi.svg" width="40px"> --}}
                <h5 class="m-0 ms-3">Other Facilities</h5>
              </div>  
                <p>
                  Rent-a-car,
                  Airline reservation and confirmation,
                  Babysitter upon request,
                  Multilingual staff,
                  24-hour Manager on Duty,
                  Dry cleaning and laundry,
                  Major credit cards accepted.
                </p> 
            </div>
          </div>
        </div>
      </div>
      
     
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
      </body>
      </html>
             <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        











      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>

@endsection