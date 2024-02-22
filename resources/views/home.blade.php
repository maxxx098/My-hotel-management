@extends('frontlayout')
@section('content')

<link rel="stylesheet" type="text/css" href="css/common.css">

<link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" href="{{asset('../frontend/css/common.css')}}">
<link rel="stylesheet" href="{{asset('../frontend/css/footer.css')}}">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<style>
  .border-top{
    color: #664108;
  }
 .fw-bold {
  color: #664108;
 }
</style>

<style type="text/css">
	:root {
 --bg1: #151828;
 --bg2: #1b1f34;
 --body: #959DCC;
 --brand: #FFAB76;
 --white: #FFF;
    }
	.availability-form .col-lg-12  {
		margin-top: -50px;
		z-index: 999;
		position: relative;
    background-image: url('./images/bg5.png');
    color: #fff;
	}

	@media screen and (max-width: 575px) {
	.availability-form{
		margin-top: 25px;
		padding: 0 35px;
	}

	}
  .testimonial {
	background-image: url('./images/bg11.png'); 
  object-fit: cover;
  display: block;
  /* width: auto; */
  background-repeat: no-repeat;
  background-size:cover;
  }
  
  .owl-prev,
 .owl-next {
  width: 60px;
  height: 60px;
  
  color: #D5B981;
  background: #1d2434;
  font-size: 22px;
  transition: .3s;
  margin-bottom: 10px;
}
.owl-next {
  margin-left: 15px;
}

 .owl-prev:hover,
 .owl-next:hover {
  color: #1d2434;
  background: #D5B981;
 
}
.cta-btns{
  text-align: center;
  margin-top: 60px;
}




/* BTN */
.btn{
  padding: 16px 36px;
  font-family: "Dela Gothic One", 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  transition: all 0.4s;
  border-radius: 0px;

}
.btn-brand{
  background-color: var(--brand);

}
.btn-brand:hover{
  background-color:transparent;
  color: var(--brand);
  border-color: var(--brand) ;
}
.btn-outline-brand{
  background-color:transparent;
  color: var(--brand);
  border-color: var(--brand) ;
}
.btn-outline-brand:hover{
  background-color: var(--brand);

}
.btn{
  padding: 16px 36px;
  font-family: "Dela Gothic One", 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  transition: all 0.4s;
  border-radius: 0px;

}
.btn-brand{
  background-color: var(--brand);

}
.btn-brand:hover{
  background-color:transparent;
  color: var(--brand);
  border-color: var(--brand) ;
}
.btn-outline-brand{
  background-color:transparent;
  color: var(--brand);
  border-color: var(--brand) ;
}
.btn-outline-brand:hover{
  background-color: var(--brand);

}


</style>

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active"> 
      <img src="{{asset('images/wow.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" id='caption1'>
        <h5>THE PREMIER EXPERIENCE</h5>
        <p>Affordable Modern Luxury in the Vibrant Expanse of Manila</p>
      </div>
    </div>
 
    <div class="carousel-item">
      <img src="{{asset('images/wow2.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" id='caption2'>
        <h5>POOL AND GARDENS</h5>
        <p>Relax and have a good swim at our adequately sized pool, good for laps or a light dip. 
        </p>
      </div>
    </div>
 
    <div class="carousel-item">
      <img src="{{asset('images/woww.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" id='caption3'>
        <h5>EXPERIENCE THE COMFORT</h5>
        <p>We assure you of medical-grade stringent sanitation procedures in preparing<br> our rooms for guests so you can stay with us with peace of mind.</p>
      </div>
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



<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">ABOUT US</h2>

  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
   Villas Hotel has received a prestigious nomination for Best Urban Hotel in 2018 by Asia Spa awards, a regional platform that credits properties that push the envelope and evolve this increasingly sophisticated industry. It is also known for its uncompromised independence, transparency and objectivity. We are the only hotel in the Philippines to be nominated in this category.
  </p>
</div>

{{-- <div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
      <h3 class="mb-3">Lorem Ipsum doler sit</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.
      </p>
    </div>
    <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
      <img src="images/about/about.jpg" class="w-100">
    </div>
  </div>
</div> --}}

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box" id="border-top">
        <img src="{{asset('images/room.png')}}" width="70px">
        <h4 class="mt-3">100+ ROOMS</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top  border-4 text-center box">
        <img src="{{asset('images/staff.png')}}" width="70px">
        <h4 class="mt-3">200+ CUSTOMERS</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="{{asset('images/star.png')}}" width="70px">
        <h4 class="mt-3">150+ REVIEWS</h4>
      </div>
    </div>
  
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="{{asset('images/staff.png')}}" width="70px">
        <h4 class="mt-3">200+ STAFFS</h4>
      </div>
    </div>
  
  </div>
</div>

<h3 class="my-5 fw-bold h-font text-center">AWARDS</h3>

<div class="container px-4">
   <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="{{asset('images/wards.png')}}" class="w-50">
          <h5 class="mt-2" style="color:black;">BEST ECO-LUXURY HOLISTIC MEDICAL WELLNESS RESORT</h5>
          <p style="color:black;" class="mt-2">SE Asia Business Awards 2022</p>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="{{asset('images/wards.png')}}" class="w-50">
          <h5 style="color:black;" class="mt-2">HEALING HOTELS OF THE WORLD</h5>
            <p style="color:black;" class="mt-2">Healing Certified</p>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="{{asset('images/wards.png')}}" class="w-50">
          <h5 style="color:black;" class="mt-2">HAUTE GRANDEUR WINNER SPA 2001</h5>
          <p style="color:black;" class="mt-2">Global Awards</p>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="{{asset('images/wards.png')}}" class="w-50">
          <h5 style="color:black;" class="mt-2">REGENERATIVE TRAVEL IMPACT AWARDS 2021</h5>
          <p style="color:black;" class="mt-2">Regenerative Travel</p>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="{{asset('images/wards.png')}}" class="w-50">
          <h5 style="color:black;" class="mt-2">BEST ECO-LUXURY HOLISTIC MEDICAL WELLNESS RESORT</h5>
          <p style="color:black;" class="mt-2">SE Asia Business Awards 2022</p>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
</div>

 

<!-- Our Rooms -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
<div class="container">
  <div class="row">

    
    @foreach($roomTypes as $rtype)
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
      @foreach($rtype->roomtypeimgs as $index => $img)
                        	<a href="{{asset($img->img_src)}}" data-lightbox="rgallery{{$rtype->id}}">
                        		@if($index > 0)
                        		<img class="card-img-top" src="{{asset($img->img_src)}}" />
                        		@else
                        		<img class="card-img-top" src="{{asset($img->img_src)}}" />
                        		@endif
                        	</a>
                        
                        @endforeach
       <div class="card-body">
         <h5 class="card-title">{{$rtype->title}}</h5>
         
         <h6 class="mb-4">{{$rtype->price}}</h6>
         <div class="features mb-4">
          <div class="caption">
            <p>
            {{$rtype->detail}}
            </p>
          </div>	
      
             
           <div class="d-flex justify-content-evenly mb-2">
           <div class="cta-btns">
          <a href="{{url('booking')}}" class="btn btn-brand md-sm-2 my-3 " >Book Now</a>
          <a href="{{url('page/about-us')}}" class="btn btn-outline-brand ms-sm-2">Room Details</a>
        </div>
           </div>
         </div>
       </div>
     </div>
    </div>
    @endforeach
   
    <div class="col-lg-12 text-center mt-5">
      <a href="{{url('page/about-us')}}" class="btn btn-sm  rounded-0 fw-bold shadow-none">More Rooms</a>
    </div>
  </div>	
</div>

<!-- Our Facilities-->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
    <i class="ri-home-wifi-line" style="font-size:75px;"></i>
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
    <i class="ri-tv-2-line" style="font-size:75px;"></i>
      <h5 class="mt-3">Television</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
    <i class="ri-edit-circle-line"  style="font-size:75px;"></i>
      <h5 class="mt-3">Air Condition</h5>
    </div> 
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
    <i class="ri-fire-fill"  style="font-size:75px;"></i>
      <h5 class="mt-3">Room Heater</h5>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="{{url('page/about-us')}}" class="btn btn-sm  rounded rounded-0 fw-bold shadow-none">More Facilities >>></a>
    </div>
  </div>
</div>
<!-- Testimonials -->
<div class="testimonial bg-">
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

<div class="container mt-5">
  <!-- Swiper -->
 
  <div id="testimonials" class="carousel slide p-5text-white border mb-5" data-bs-ride="carousel" style="height:auto; background-color:#255D39; padding: 10px;">
	  <div class="carousel-inner">
	  	@foreach($testimonials as $index => $testi)
	    <div class="carousel-item @if($index==0) active @endif">
	      	<figure class="text-center">
			  <blockquote class="blockquote">
              <img src="{{ asset($testi->photo) }}" width= '50' height='50' style="border-radius:50%;  margin-bottom: 25px;margin-top: 25px;" class="img img-responsive" />
              <h2 style="color:black; font-weight: bold; text-transform: uppercase;">{{$testi->full_name}}</h2>
			    <p style="color:white; ">{{$testi->testi_cont}}</p>
               
			  </blockquote>
			  
			</figure>
	    </div>
	    @endforeach
	  </div>
	  
	</div>
</div>


	  <div class="container" style="display:flex; justify-content:center;">
      <button class="owl-prev" type="button" data-bs-target="#testimonials" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button>
	  <button class="owl-next" type="button" data-bs-target="#testimonials" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  </button>
      </div>
	</div>
	<!-- testimonial Section End -->


 





<link rel="stylesheet" type="text/css" href="{{asset('myasset/vendor')}}/lightbox2-2.11.3/dist/css/lightbox.min.css" />
<!-- LightBox Js -->
<script type="text/javascript" src="{{asset('myasset/vendor')}}/lightbox2-2.11.3/dist/js/lightbox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

 <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 40,
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
          },
          640: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 3,
          },
          1024: {
            slidesPerView: 3,
          },
        }
      });
    </script>
<style type="text/css">
	.hide{
		display: none;
	}
</style>

<script>
  var swiper = new Swiper(".swiper-container", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    }
  });

  var swiper = new Swiper(".swiper-testimonials", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    slidesPerView: "3",
    loop: true,
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    }
  });
</script>

@endsection