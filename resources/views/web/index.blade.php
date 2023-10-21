@extends('web.layouts.app') 
@section('content')
<style type="text/css">
@media only screen and (max-width: 600px) {
		#containt_set {
			    top: 122px;
			    left: -13px;
		}
		.change-sm{
			font-size: medium;
		}
	}
</style>
		<!-- here start slider -->
<section>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="images/slider/home_two.jpg" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="images/slider/home_one.jpg" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="images/slider/home_three.jpg" alt="Third slide">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<div>
		<div id="containt_set" class="container-fluid text-center m-4">
			<div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
				<span class="caps text-white text-sm-center" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Travel to the any corner of the world, without going around in circles</span>
				<h1 class="text-uppercase font-weight-bold change-sm" data-scrollax="properties: { translateY: '30%', opacity: 1.6 } ">Make Your Tour Amazing With Us</h1>
			</div>
		</div>
	</div>
</section>
<!-- end slider -->
<br><br><br>

@include('web.modules.about_section')

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Best Place Destination</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 ftco-animate">
				<div class="project-destination">
					<a href="#" class="img" style="background-image: url(images/place-1.jpg);">
						<div class="text">
							<h3>Singapore</h3>
							<span>8 Tours</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate">
				<div class="project-destination">
					<a href="#" class="img" style="background-image: url(images/place-2.jpg);">
						<div class="text">
							<h3>Canada</h3>
							<span>2 Tours</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate">
				<div class="project-destination">
					<a href="#" class="img" style="background-image: url(images/place-3.jpg);">
						<div class="text">
							<h3>Thailand</h3>
							<span>5 Tours</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate">
				<div class="project-destination">
					<a href="#" class="img" style="background-image: url(images/place-4.jpg);">
						<div class="text">
							<h3>Autralia</h3>
							<span>5 Tours</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Tour Destination</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="#" class="img" style="background-image: url(images/school2.jpg);"></a>
					<div class="text p-4">
						<span class="price">Read More</span>
						<h3><a href="#">Bali, Indonesia</a></h3>
						<span>The island is home to religious sites such as cliffside Uluwatu Temple. To the south, the beachside city of Kuta has lively bars, while Seminyak</span>
						<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-mountains"></span>Near Mountain</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="#" class="img" style="background-image: url(images/school6.jpg);"></a>
					<div class="text p-4">
						<span class="price">Read More</span>
						<h3><a href="#">Istanbul</a></h3>
						<span>These are the Hagia Sophia, a famous 6th-century mosque that is now a museum, and the namesake Sultanahmet Mosque, which is also fondly referred to as the Blue Mosque</span>
						<p class="location"><span class="ion-ios-map"></span> Turkey</p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="#" class="img" style="background-image: url(images/school1.jpg);"></a>
					<div class="text p-4">
						<span class="price">Read More</span>
						<h3><a href="#">krabi</a></h3>
						<span>its scenic view and breathtaking Beaches and Islands. Its coral reef vistas are also one of the world's most beautiful, which makes the City a great spot for coral diving</span>
						<p class="location"><span class="ion-ios-map"></span>Thailand</p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="#" class="img" style="background-image: url(images/udaipur.webp);"></a>
					<div class="text p-4">
						<span class="price">Read More</span>
						<h3><a href="#">City of Lakes</a></h3>
						<span> Undoubtedly one of India's most romantic cities, it nestles between the glassy waters of its famous lakes and the ancient Aravelli Hills</span>
						<p class="location"><span class="ion-ios-map"></span> Rajasthan, India</p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="#" class="img" style="background-image: url(images/school3.jpg);"></a>
					<div class="text p-4">
						<span class="price">Read More</span>
						<h3><a href="#">Agra</a></h3>
						<span>Ayodhya is the place where lord Rama took birth, Mathura is the birth place of Lord Krishna and Sarnath is the place where Lord Buddha delivered his first sermon after attaining enlightenment</span>
						<p class="location"><span class="ion-ios-map"></span> Uttar Pradesh India</p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="#" class="img" style="background-image: url(images/new_delhi_ncr.jpg);"></a>
					<div class="text p-4">
						<span class="price">Read More</span>
						<h3><a href="#">Goa, India</a></h3>
						<span>Sun, sand and sea being the major attractions, Goa trip is a perfect heaven for the ones who need and want relaxation</span>
						<p class="location"><span class="ion-ios-map"></span> Goa, India</p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@include('web.modules.feedback_section')

<section class="ftco-section">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry justify-content-end">
					<a href="{{ url('gallery') }}" class="block-20" style="background-image: url('images/hampi.webp');">
					</a>
					<div class="text mt-3 float-right d-block">
						<h3 class="heading"><a href="{{ url('gallery') }}">Manali, Himachal Pradesh - Lover's Paradise - India's Honeymoon Capital</h3></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry justify-content-end">
					<a href="{{ url('gallery') }}" class="block-20" style="background-image: url('images/taj-mahal.jpeg');">
					</a>
					<div class="text mt-3 float-right d-block">
						<div class="d-flex align-items-center mb-4 topp">
							<div class="one">
								<span class="day">21</span>
							</div>
							<div class="two">
								<span class="yr">2019</span>
								<span class="mos">August</span>
							</div>
						</div>
						<h3 class="heading"><a href="{{ url('gallery') }}">Taj Mahal, Agra || A Monumental Ode to Love </a></h3>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry">
					<a href="{{ url('gallery') }}" class="block-20" style="background-image: url('images/kashi.jpg');">
					</a>
					<div class="text mt-3 float-right d-block">
						<h3 class="heading"><a href="{{ url('gallery') }}"> Manali, Himachal Pradesh - Lover's Paradise - India's Honeymoon Capital </a></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('script')
	<script>
		$('.price').on('click', function() {
			window.location.href = 'schools';
		})
	</script>
@endsection