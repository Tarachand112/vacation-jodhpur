@extends('web.layouts.app')
@section('content')
	<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/image_4.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<h1 class="mb-3 bread">Gallery</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Gallery <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-4 d-flex ftco-animate">
					 <div class="blog-entry justify-content-end">
						<a href="#" class="block-20" style="background-image: url('images/agra_trip_3.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="#" class="block-20" style="background-image: url('images/amritsar.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
						 
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					 <div class="blog-entry">
						<a href="#" class="block-20" style="background-image: url('images/hampi.webp');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
						</div>
					</div>
				</div>

				<div class="col-md-4 d-flex ftco-animate">
					 <div class="blog-entry justify-content-end">
						<a href="#" class="block-20" style="background-image: url('images/new_delhi_ncr.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					 <div class="blog-entry justify-content-end">
						<a href="#" class="block-20" style="background-image: url('images/hampi.webp');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					 <div class="blog-entry">
						<a href="#" class="block-20" style="background-image: url('images/school1.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate image" style="display: none;">
					<div class="blog-entry justify-content-end">
						<a href="#" class="block-20" style="background-image: url('images/school2.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
						<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-4   ftco-animate image" style="display: none;">
					<div class="blog-entry justify-content-end">
						<a href="#" class="block-20" style="background-image: url('images/taj-mahal.jpeg');">
						</a>
						<div class="text mt-3 float-right d-block">
						   <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-4  ftco-animate image" style="display: none;">  
					<div class="blog-entry justify-content-end">
						<a href="#" class="block-20" style="background-image: url('images/school3.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col text-center">
					<div class="block-27">
						<span class="btn btn-primary more">More</span>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('script')
<script>
	$('.more').on('click', function() {
		$('.image').css('display', 'block');
		$('.more').hide(); 
	})
</script>
@endsection