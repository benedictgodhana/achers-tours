<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pacific - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('pacific-main/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/bootstrap-datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/jquery.timepicker.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/style.css') }}">
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
					<li class="nav-item "><a href="/" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="/about" class="nav-link">About</a></li>
					<li class="nav-item active"><a href="/destination" class="nav-link">Destination</a></li>
					<li class="nav-item"><a href="/tours" class="nav-link">Tours</a></li>
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
         <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Tour List <i class="fa fa-chevron-right"></i></span></p>
         <h1 class="mb-0 bread">Tours List</h1>
     </div>
 </div>
</div>
</section>
<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-wrap-1 ftco-animate">
                    <form id="searchForm" class="search-property-1">
                        <div class="row no-gutters">
                            <!-- Destination Dropdown -->
                            <div class="col-lg d-flex">
                                <div class="form-group p-4 border-0">
                                    <label for="#">Destination</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="fa fa-search"></span></div>
                                        <select id="destinationDropdown" class="form-control">
                                            <option value="">Select Destination</option>
                                            @foreach($destinations as $destination)
                                                <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Search Button -->
                            <div class="col-lg d-flex">
                                <div class="form-group d-flex w-100 border-0">
                                    <div class="form-field w-100 align-items-center d-flex">
                                        <input type="button" id="searchButton" value="Search" class="align-self-stretch form-control btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row" id="tours-list">
            @foreach($destinations as $tour)
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="#" class="img" style="background-image: url({{  asset('storage/' . $destination->image) }});">
                    </a>
                    <div class="text p-4">
                        <span class="days">{{ $tour->duration }} Days Tour</span>
                        <h3><a href="#">{{ $tour->name }}</a></h3>
                        <p class="location"><span class="fa fa-map-marker"></span> {{ $tour->name }}</p>

                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="ftco-intro ftco-section ftco-no-pt">
 <div class="container">
    <div class="row justify-content-center">
       <div class="col-md-12 text-center">
          <div class="img"  style="background-image: url(images/bg_2.jpg);">
             <div class="overlay"></div>
             <h2>We Are Pacific A Travel Agency</h2>
             <p>We can manage your dream building A small river named Duden flows by their place</p>
             <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p>
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

<script>
document.addEventListener("DOMContentLoaded", function() {
    const fetchTours = (destinationId = null, search = '') => {
        $.ajax({
            url: '/destination',
            type: 'GET',
            data: {
                destination_id: destinationId,
                search: search,
            },
            success: function(response) {
                let toursHtml = '';
                response.forEach(tour => {
                    toursHtml += `
                        <div class="col-md-4 ftco-animate">
                            <div class="project-wrap">
                                <a href="#" class="img" style="background-image: url(images/${tour.image});">
                                    <span class="price">$${tour.price}/person</span>
                                </a>
                                <div class="text p-4">
                                    <span class="days">${tour.duration} Days Tour</span>
                                    <h3><a href="#">${tour.name}</a></h3>
                                    <p class="location"><span class="fa fa-map-marker"></span> ${tour.location}</p>
                                    <ul>
                                        <li><span class="flaticon-shower"></span> ${tour.amenity_1}</li>
                                        <li><span class="flaticon-king-size"></span> ${tour.amenity_2}</li>
                                        <li><span class="flaticon-mountains"></span> ${tour.amenity_3}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    `;
                });
                $('#tours-list').html(toursHtml);
            }
        });
    };

    // Event listeners for search and destination selection
    $('#destination-select').on('change', function() {
        fetchTours(this.value, $('#search-input').val());
    });

    $('#search-input').on('keyup', function() {
        fetchTours($('#destination-select').val(), this.value);
    });
});
</script>



</body>
</html>
