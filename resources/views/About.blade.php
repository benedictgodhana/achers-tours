<!DOCTYPE html>
<html lang="en">
<head>
  <title>Archers Tours and Travel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Link CSS files in Laravel Blade template -->
<link rel="stylesheet" href="{{ asset('pacific-main/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/bootstrap-datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/jquery.timepicker.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/style.css') }}">


<style>
    .marquee-wrapper {
        overflow: hidden;
        position: relative;
    }

    .carousel-logos {
        display: flex;
        animation: marquee 20s linear infinite;
    }

    .carousel-logos .item {
        flex: 0 0 auto;
        margin-right: 30px; /* Add space between logos */
    }

    .logo-img {
        width: 150px; /* Adjust the logo size */
        height: auto;
    }

    @keyframes marquee {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-100%);
        }
    }
</style>

</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
   <a class="navbar-brand" href="{{ url('/') }}">
    <img src="{{ asset('/images/logo_medium_3-removebg-preview.png') }}" alt="Pacific Travel Agency" style="height: 40px;">
</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
     <ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="/" class="nav-link">Home</a></li>
					<li  class="nav-item active"><a href="/about" class="nav-link">About</a></li>
					<li class="nav-item"><a href="/destination" class="nav-link">Destination</a></li>
					<li class="nav-item"><a href="/tour" class="nav-link">Tours</a></li>
					<li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="/login" class="nav-link">login</a></li>

				</ul>
     </div>
   </div>
 </nav>
 <!-- END nav -->

 <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('pacific-main/images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">About Us</h1>
     </div>
   </div>
 </div>
</section>
<section class="ftco-section services-section">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
        <div class="w-100">
          <span class="subheading" style="color:orange">Welcome to Archers Tours and Travel</span>
          <h2 class="mb-4">Your Next Great Adventure Awaits</h2>
          <p>Discover unforgettable experiences with Archers Tours and Travel. From breathtaking landscapes to vibrant cities, our expert guides and travel arrangements make every journey memorable.</p>
          <p>Whether you’re dreaming of exploring the peaks of distant mountains or relaxing on pristine beaches, we’re here to help you every step of the way. Let us take you on an adventure of a lifetime!</p>
          <p><a href="/destination" class="btn  py-3 px-4" style="background:orange;color:white">Explore Destinations</a></p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="services services-1 color-1 d-block img" style="background-image: url(/pacific-main/images/hotel-resto-2.jpg);">
              <div class="icon d-flex align-items-center justify-content-center" style="background:orange"><span class="flaticon-paragliding"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Exciting Activities</h3>
                <p>From paragliding to diving, our adventures bring you closer to nature and thrill.</p>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="services services-1 color-2 d-block img" style="background-image: url(/pacific-main/images/image_3.jpg);">
              <div class="icon d-flex align-items-center justify-content-center" style="background:orange"><span class="flaticon-route"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Tailored Travel Arrangements</h3>
                <p>Customized itineraries that cater to your specific needs and destinations.</p>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="services services-1 color-3 d-block img" style="background-image: url(/pacific-main/images/place-3.jpg);">
              <div class="icon d-flex align-items-center justify-content-center" style="background:orange"><span class="flaticon-tour-guide"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Expert Guides</h3>
                <p>Experienced local guides to enhance your travel experience with insider knowledge.</p>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="services services-1 color-4 d-block img" style="background-image: url(/pacific-main/images/place-1.jpg);">
              <div class="icon d-flex align-items-center justify-content-center" style="background:orange"><span class="flaticon-map"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Location Planning</h3>
                <p>Efficient and reliable location management to make your travels seamless and stress-free.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="ftco-section ftco-about img"style="background-image: url(pacific-main/images/bg_4.jpg);">
 <div class="overlay"></div>
 <div class="container py-md-5">
  <div class="row py-md-5">

</div>
</div>
</section>

<section class="ftco-section ftco-about ftco-no-pt img">
 <div class="container">
  <div class="row d-flex">
   <div class="col-md-12 about-intro">
    <div class="row">
     <div class="col-md-6 d-flex align-items-stretch">
      <div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url(/pacific-main/images/hotel-resto-7.jpg);">
      </div>
    </div>
    <div class="col-md-6 pl-md-5 py-5">
      <div class="row justify-content-start pb-3">
        <div class="col-md-12 heading-section ftco-animate">
         <span class="subheading" style="color:orange">About Us</span>
         <h2 class="mb-4">Make Your Tour Memorable and Safe With Us</h2>
         <p>Archer’s Tours & Travels Ltd. is a Kenyan company based in Nairobi, with over 70 years of experience in
organizing business missions, leisure travels and vacations.

Archer’s Tours & Travels Ltd. team provides an efficient and tailor-made service to every client, thereby
maintaining its position of leadership in the industry.</p>
         <p><a href="#" class="btn " style="background:orange">Book Your Destination</a></p>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
</div>
</section>


<section class="ftco-section testimony-section bg-bottom" style="background-image: url(pacific-main/images/bg_1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center pb-4">
					<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
						<span class="subheading">Testimonial</span>
						<h2 class="mb-4">Tourist Feedback</h2>
					</div>
				</div>
				<div class="row ftco-animate">
					<div class="col-md-12">
						<div class="carousel-testimony owl-carousel">
							<div class="item">
								<div class="testimony-wrap py-4">
									<div class="text">
										<p class="star"style="color:orange">
											<span  class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</p>
										<p class="mb-4">Soy Juan Luis Morales y en septiembre viajé con mis hijos a Nairobi para un safari, recomendado por un amigo a Archer's Tour & Travels. Stephen nos ayudó a planificar el viaje, y al llegar, un chófer nos recogió. El guía Charlie, con gran experiencia, nos acompañó en los parques de Samburu, Nakuru y Masai Mara. Todo fue excelente, incluyendo los alojamientos, la comida y la planificación, por lo que recomiendo 100% Archer's.</p>
										<div class="d-flex align-items-center">
											<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
											<div class="pl-3">
												<p class="name">Acuna </p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap py-4">
									<div class="text">
										<p class="star" style="color:orange">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</p>
										<p class="mb-4">We’ve just returned from a fantastic visit to Finch Hattons, and I want to thank you and the Archers team for everything. Special thanks to Stephen for his exceptional customer service, patience, and dedication, even working weekends and late nights. Finch Hattons exceeded all expectations—amazing environment, service, rooms, food, and even yoga and massage. It was the best safari experience we’ve had. We can’t wait to return!.</p>
										<div class="d-flex align-items-center">
											<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
											<div class="pl-3">
												<p class="name">Vivien</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap py-4">
									<div class="text">
										<p class="star" style="color:orange">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</p>
										<p class="mb-4">Hello
I just wanted to thank you for the wonderful assistance you were to me and
my friend. We had a wonderful time and really liked our tour guide
Pollycarp. He was a safe driver. He was a great spotter of animals and my
brother enjoyed talking to him. In fact they have a number of people go
over there to go on safaris and he will probably always request Pollycarp as
the guide.
Thank you for your wonderful service and we will always recommend you
to others.</p>
										<div class="d-flex align-items-center">
											<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
											<div class="pl-3">
												<p class="name">Jacque</p>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

<section class="ftco-section logo-section bg-bottom" style="background-image: url(images/bg_1.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading" style="color:orange">Member of</span>
                <h2 class="mb-4" style="color:black">Companies</h2>
            </div>
        </div>


        <div class="row ftco-animate">
            <div class="col-md-12">
                <!-- Add marquee effect using CSS animation -->
                <div class="marquee-wrapper">
                    <div class="carousel-logos">
                        <!-- Repeat for each company logo -->
                        <div class="item">
                            <img src="/images/logo_kata.png" alt="Company 1 Logo" class="logo-img">
                        </div>
                        <div class="item">
                            <img src="/images/png-transparent-iata-hd-logo.png" alt="Company 2 Logo" class="logo-img">
                        </div>
                        <div class="item">
                            <img src="/images/imag4.png" alt="Company 3 Logo" class="logo-img">
                        </div>
                        <div class="item">
                            <img src="/images/unnamed-1-768x244.jpg" alt="Company 4 Logo" class="logo-img">
                        </div>
                        <div class="item">
                            <img src="/images/Untitled.jpeg" alt="Company 5 Logo" class="logo-img">
                        </div>
                        <!-- Add more logos as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(archers-tours/images/bg_3.jpg);">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4">
          <h2 class="ftco-heading-2">About Archers Tours & Travel</h2>
          <p>Discover unparalleled travel experiences with Archers Tours & Travel. From adventure-packed excursions to serene beach getaways, we bring you closer to your dream destinations.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md pt-5 border-left">
        <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
          <h2 class="ftco-heading-2">Information</h2>
          <ul class="list-unstyled">
            <li><a href="#" class="py-2 d-block">Online Enquiry</a></li>
            <li><a href="#" class="py-2 d-block">General Enquiries</a></li>
            <li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
            <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
            <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
            <li><a href="/contact" class="py-2 d-block">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md pt-5 border-left">
       <div class="ftco-footer-widget pt-md-5 mb-4">
        <h2 class="ftco-heading-2">Experiences</h2>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block">Adventure Tours</a></li>
          <li><a href="#" class="py-2 d-block">Luxury Resorts</a></li>
          <li><a href="#" class="py-2 d-block">Beach Escapes</a></li>
          <li><a href="#" class="py-2 d-block">Nature Trails</a></li>
          <li><a href="#" class="py-2 d-block">Camping Trips</a></li>
          <li><a href="#" class="py-2 d-block">Event Planning</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md pt-5 border-left">
      <div class="ftco-footer-widget pt-md-5 mb-4">
       <h2 class="ftco-heading-2">Have Questions?</h2>
       <div class="block-23 mb-3">
         <ul>
           <li><span class=" fa fa-map-marker mr-4" style="color:navy;"></span><span style="color:white" class="mr-4">Peponi Plaza, Peponi Road - Westlands</span></li>
           <li><span class=" fa fa-map-marker mr-4" style="color:navy"></span><span style="color:white"> P.O. Box 437, 00606 Nairobi - Kenya - East Africa</span></li>

           <li><a href="#" ><span class=" fa fa-phone mr-4" style="color:navy"></span><span  style="color:white">+254-20-3752472 /3 /4</span></a></li>
           <li><a href="#"><span class=" fa fa-paper-plane mr-4" style="color:navy"></span><span style="color:white">info@archerstours.com</span></a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>
 <div class="row">
  <div class="col-md-12 text-center">

    <p>
      &copy; <script>document.write(new Date().getFullYear());</script> Archers Tours & Travel | All rights reserved | Designed  by <a href="https://colorlib.com" target="_blank" style="color:white"  >DONKRAFT IT SOLUTIONS LTD</a>
    </p>
  </div>
 </div>
</div>
</footer>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<!-- Link JavaScript files in Laravel Blade template -->
<script src="{{ asset('pacific-main/js/jquery.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/popper.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('pacific-main/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('pacific-main/js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('pacific-main/js/google-map.js') }}"></script>
<script src="{{ asset('pacific-main/js/main.js') }}"></script>

</body>
</html>
