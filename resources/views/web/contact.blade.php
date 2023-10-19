@extends('web.layouts.app') 
@section('content')
	<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
					<div class="col-md-9 ftco-animate pb-5 text-center">
						<h1 class="mb-3 bread">Contact Us</h1>
						<p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact us <i class="ion-ios-arrow-forward"></i></span></p>
					</div>
				</div>
			</div>
	</section>
	<section class="ftco-section ftco-no-pb contact-section">
		<div class="container">
			<div class="row d-flex contact-info">
				<div class="col-md-3 d-flex">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-map-signs"></span>
						</div>
						<h3 class="mb-2">Address</h3>
						<p>198 West 21th Street, Suite 721 New York NY 10016</p>
					</div>
				</div>
				<div class="col-md-3 d-flex">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-phone2"></span>
						</div>
						<h3 class="mb-2">Contact Number</h3>
						<p><a href="tel://1234567920">+91 9828017278</a></p>
					</div>
				</div>
				<div class="col-md-3 d-flex">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-paper-plane"></span>
						</div>
						<h3 class="mb-2">Email Address</h3>
						<p><a href="mailto:info@yoursite.com">wingsandsour@gmail.com</a></p>
					</div>
				</div>
				<div class="col-md-3 d-flex">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-globe"></span>
						</div>
						<h3 class="mb-2">Website</h3>
						<p><a href="#">vacation.com</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>	
	<section class="ftco-section contact-section">
		<div class="container">
			<div class="row block-9">
				<div class="col-md-6 order-md-last d-flex">
					<form action="#" class="bg-light p-5 contact-form">
						<h2 class="text-center mb-3">Contact Us</h2>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Your Email" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Subject" required>
						</div>
						<div class="form-group">
							<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
						</div>
					</form>
				</div>
				<div class="col-md-6 d-flex">
					<div id="map" class="bg-white"></div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places"></script>
<script>
	function initMap() {
		const map = new google.maps.Map(document.getElementById('map'), {
			center: { lat: -34.397, lng: 150.644 },
			zoom: 8
		});
	}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&callback=initMap"></script>

@endsection