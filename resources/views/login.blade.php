<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
		<title>Admin Login</title>
		<link rel="stylesheet" href="{{ asset('admin/assets/css/app.min.css') }}">
		<link rel="stylesheet" href="{{ asset('admin/assets/bundles/bootstrap-social/bootstrap-social.css') }}">
		<link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('admin/assets/css/components.css') }}">
		<link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">
		<link rel='shortcut icon' type='image/x-icon' href="{{ asset('admin/assets/img/favicon.ico') }}">
	</head>
	<body>
		<div class="loader"></div>
		<div id="app">
			<section class="section">
				<div class="container mt-5">
					<div class="row">
						<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
							<div class="card card-primary">
								<div class="card-header">
									<h4>Login</h4>
								</div>
								<div class="card-body">
									<form method="POST" action="{{ route('login') }}" class="needs-validation" >
									@csrf
										<div class="form-group px-1">
											@include('include.message')
										</div>
										<div class="form-group">
											<label for="email">Email </label>
											<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" tabindex="1"     value="{{ old('email') }}" required>
										</div>

										<div class="form-group">
											<div class="d-block">
												<label for="password" class="control-label">Password</label>
												<div class="float-right">
													<a href="" class="text-small">
														Forgot Password?
													</a>
												</div>
											</div>
											<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" tabindex="2"   value="{{ old('password') }}">
										</div>

										<div class="form-group">
											<button class="btn btn-primary btn-lg btn-block" tabindex="4">
												Login
											</button>
										</div>
									</form>
								</div>  
							</div>
						</div> 
					</div>
				</div> 
			</section>
		</div>
		<script src="{{  asset('admin/assets/js/app.min.js') }}"></script>
		<script src="{{  asset('admin/assets/js/scripts.js') }}"></script>
		<script src="{{  asset('admin/assets/js/custom.js') }}"></script>
	</body>
</html> 