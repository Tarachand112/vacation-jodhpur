@extends('web.layouts.app') 
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
				<a href="javascipt:void;" class="icon-video d-flex align-items-center justify-content-center mb-4">
					<span class="ion-ios-play"></span>
				</a>
				<p class="caps" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Travel to the any corner of the world, without going around in circles</p>
				<h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Make Your Tour Amazing With Us</h1>
			</div>
		</div>
	</div>
</div>
<section class="ftco-section ftco-no-pb ftco-no-pt">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-wrap-1 ftco-animate p-4">
					<form action="#" class="search-property-1">
						<div class="row">
							<div class="col-lg-4 align-items-end">
								<div class="form-group">
									<label for="#">Poupler Places</label>
									<div class="form-field text-white ">
									 Get Best Deals On</div>
								</div>
							</div>
							<div class="col-lg-5 align-items-end">
								<div class="form-group">
									<label for="#">Singapore, Canada, Thailand, Autralia</label>
									<div class="form-field text-white">Educational Tour Packages</div>
								</div>
							</div>
							<div class="col-lg-3 align-self-end">
								<div class="form-group">
									<div class="form-field">
										<a href="{{ url('contact') }}" class="form-control btn btn-primary">Contact Now</a>
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
						<span class="days">8 Days Tour</span>
						<h3><a href="#">Bali, Indonesia</a></h3>
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
						<span class="days">10 Days Tour</span>
						<h3><a href="#">Bali, Indonesia</a></h3>
						<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
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
						<span class="days">7 Days Tour</span>
						<h3><a href="#">Bali, Indonesia</a></h3>
						<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
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
					<a href="#" class="img" style="background-image: url(images/school4.jpg);"></a>
					<div class="text p-4">
						<span class="price">Read More</span>
						<span class="days">8 Days Tour</span>
						<h3><a href="#">Bali, Indonesia</a></h3>
						<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
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
						<span class="days">10 Days Tour</span>
						<h3><a href="#">Bali, Indonesia</a></h3>
						<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
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
						<span class="days">7 Days Tour</span>
						<h3><a href="#">Bali, Indonesia</a></h3>
						<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
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