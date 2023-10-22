@extends('web.layouts.app')
@section('content')
<style type="text/css">
@media only screen and (max-width: 600px) {
		#containt_set {
			    top: 90px;
			    left: -13px;
			    color: white;
		}
	}
</style>
<section>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="images/slider/gallery_one.jpg" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="images/slider/gallery_two.jpg" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="images/slider/gallery_three.jpg" alt="Third slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="images/slider/gallery_four.jpg" alt="Third slide">
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
			<div class="bold col-md-9 text text-center ftco-animate py-2" data-scrollax=" properties: { translateY: '70%' }">
				<h1 class="mb-3 bread text-md-center text-white">Gallery</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}" >Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="text-white">Gallery <i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>
		<!-- end slider -->

<!-- <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/image_4.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<h1 class="mb-3 bread">Gallery</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Gallery <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
</section> -->
<div class="container mt-5">
	Joining the EF family means you’ll have the support of our community of educators, tour architects, operations wizards, and ever-curious explorers. We’ve experienced the transformative power of travel firsthand—and we can’t wait to explore the opportunities that are out there for you and your students.
</div>

	<section class="ftco-section">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-4 d-flex ftco-animate">
					 <div class="blog-entry justify-content-end">
						<a href="#" class="block-20" style="background-image: url('images/agra_trip_3.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">This was agra trip with nice students</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="#" class="block-20" style="background-image: url('images/amritsar.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">This was a geographical trip as zoo visit and more juniour level trip</a></h3>
						 
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					 <div class="blog-entry">
						<a href="#" class="block-20" style="background-image: url('images/hampi.webp');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">New place exploring as new class</a></h3>
						</div>
					</div>
				</div>

				<div class="col-md-4 d-flex ftco-animate">
					 <div class="blog-entry justify-content-end">
						<a href="#" class="block-20" style="background-image: url('images/new_delhi_ncr.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">Exploring learning and make too much fun</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					 <div class="blog-entry justify-content-end">
						<a href="#" class="block-20" style="background-image: url('images/hampi.webp');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">Tour with us we make memorable for everyone</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					 <div class="blog-entry">
						<a href="#" class="block-20" style="background-image: url('images/school1.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">Enjoy as you can we make as you want</a></h3>
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