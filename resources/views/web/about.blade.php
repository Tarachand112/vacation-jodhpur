@extends('web.layouts.app') 
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/slider/about_one.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
			  <div class="col-md-9 ftco-animate pb-5 text-center">
				<h1 class="mb-3 bread">About Us</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
			  </div>
			</div>
		</div>
</section>
<br><br><br>

@include('web.modules.about_section')

<div class="row mt-5 mb-5">
	<div class="col text-center">
		<div class="block-27">
			<span class="btn btn-primary more">Know More About Us</span>
		</div>
	</div>
</div> 
<section class="ftco-counter mb-4 img d-none" id="about-us-section" >
	<div class="container">
		<div class="row d-flex">
			<div class="col-12">
				At OSR Vacation -Educational Tour Package, each project is divided into three phases – pre-trip, on-trip and post-trip. But before a trip begins, the Product Development Team gets together to carve out unique need-based itineraries or experiences. We conceive the product and design around both student’s and teacher’s needs. We offer the best in planning, organizing and execution of educational trips and tours for our esteemed clients.
				Our travel modules are custom-made around student curriculum and key characteristics of a destination. We have created this unique balance of addressing educational needs in a fun and creative ambience while retaining the essence of a leisurely trip.
				The field of educational travel is challenging, dynamic and exciting offering great business opportunities and subsequent rewards. We at OSR Vacation (Education) believe there is no greater satisfaction than making a righteous impact in the society through one’s living!
				We at OSR Vacation (Educational Tours) provide the following services to Schools, Educational Institutes, Colleges and NGOs across the country:
				Student Educational Trips, Industrial Tour Packages, Student Pilgrimage Tours, Student Training Programs, Adventure Sports Activities, Obstacle Courses, Rural Tours for Students, Historic Tours for Students, Scientific Tours for Students, Events Management, Travel Management during the Tour.
			</div>
		</div>
	</div>
</section>

@include('web.modules.feedback_section')

@endsection

@section('script')
<script>
	$('.more').on('click', function() {
		$('#about-us-section').addClass('d-block');
		$('.more').hide(); 
	})
</script>
@endsection
