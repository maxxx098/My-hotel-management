<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link href="{{asset('../myasset/bs5/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('../frontend/css/nav.css')}}">
	
    <link rel="stylesheet" type="text/css" href="css/common.css">
       <link rel='stylesheet' href='{{asset('frontend/css/bootstrap5.css')}}'>
       {{-- <link rel='stylesheet' href='{{asset('frontend/css/custom.css')}}'> --}}
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.0.1/fonts/remixicon.min.css">
    <link rel="stylesheet" href="{{asset('../frontend/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('../frontend/css/nav.css')}}">
</head>
<body>
	
<nav class="navbar navbar-expand-lg px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="Villa hotel">
        <img src ="{{asset('images/logoos3.png')}}" alt='logo' width="100" heigth="50">
      </a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="{{url('page/about-us')}}">Rooms</a>
          </li>
         
           <li class="nav-item">
            <a class="nav-link me-2" href="{{url('page/contact-us')}}">Contact Us</a>
          </li>
          
          @if(Session::has('customerlogin'))
          <li class="nav-item">
          <a class="nav-link" href="{{url('customer/add-testimonial')}}">Add Testimonial</a>
          </li>
          
        
        </ul>
        <div  style="margin-left: 90px ;" class="d-flex" role="search">
          <a href="{{url('logout')}}"><button    class="btn btn-outline-dark shadow-none me-lg-3 me-2" >Log Out	</button></a>
          <a href="{{url('booking')}}"><button  class="btn btn-outline-dark shadow-none" >Book Now!</button></a>
          </div>
          @else
        <div style="margin-left: 90px ;" class="d-flex" role="search">
        <a href="{{url('login')}}"><button    class="btn btn-outline-dark shadow-none me-lg-3 me-2" >Login	</button></a>
          <a href="{{url('register')}}"><button  class="btn btn-outline-dark shadow-none" >Register	</button></a>
        </div>
        @endif
      </div>
    </div>
  </nav>
    
  
  
		<main>
			@yield('content')
		</main>

        <footer>
            
<div class="container-fluid mt-10">
    <div class="row">
        <div class="col-lg-4 p-4">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="Villa hotel">
                <img src ="{{asset('images/logoos3.png')}}" alt='logo' width="100" heigth="50">
              </a>
              <br><br>
            <p>Villas Hotel has received a prestigious nomination for Best Urban Hotel in 2018 by Asia Spa awards, a regional platform that credits properties that push the envelope and evolve this increasingly sophisticated industry. It is also known for its uncompromised independence, transparency and objectivity.</p>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Link</h5>
            <a href="#" class="d-inline-block mb-2  text-decoration-none">Home</a><br>
            <a href="#" class="d-inline-block mb-2 text-decoration-none">Rooms</a><br>
            <a href="#" class="d-inline-block mb-2  text-decoration-none">Facilities</a><br>
            <a href="#" class="d-inline-block mb-2  text-decoration-none">Contact Us</a><br>
            <a href="#" class="d-inline-block mb-2  text-decoration-none">About</a>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Follow us</h5>
            <a href="www.twitter.com" class="d-inline-block  text-decoration-none mb-2">
                <i class="bi bi-twitter me-1"></i>Twitter
            </a><br>
            <a href="#www.facebook.com" class="d-inline-block text-decoration-none mb-2">
                <i class="bi bi-facebook me-1"></i>facebook
            </a><br> 
            <a href="www.instagram.com" class="d-inline-block  text-decoration-none">
                <i class="bi bi-instagram me-1"></i>Instagram
            </a><br>  
        </div>
    </div>
</div>
        </footer>
	</body>
    <script type="text/javascript" src="{{asset('../myasset/jquery/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('../myasset/bs5/bootstrap.bundle.min.js')}}"></script>
    <script src=' {{asset('frontend/js/jquery-3.7.1.min.js')}}'></script>
    <script src=' {{asset('frontend/js/bootstrap5.bundle.js')}}'></script>
</html>