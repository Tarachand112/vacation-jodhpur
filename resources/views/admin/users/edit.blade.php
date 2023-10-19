@extends('admin.layouts.app')
@section('title' , 'Customer')
@section('content')
	<div class="main-content">
		<section class="section">
			<div class="section-body">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
									<h4>Edit Customer</h4>
							</div>
							<div class="card-body">
								<form method="POST" action="{{ url('customer/store', $user->id) }}">
								{{ @csrf_field() }}
									<div class="form-group row">
										<label class="col-form-label text-md-right col-3">Name<span id="asterisk"> *</span></label>
										<div class="offset-col-2 col-sm-7">
											<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" maxlength="30">
											@error('name')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>  
									</div>

									<div class="form-group row">
										<label class="col-form-label text-md-right col-3">Name<span id="asterisk"> *</span></label>
										<div class="offset-col-2 col-sm-7">
											<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" maxlength="30">
											@error('name')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>    
									</div>

									<div class="form-group row">
										<label class="col-form-label text-md-right col-3">Name<span id="asterisk"> *</span></label>
										<div class="offset-col-2 col-sm-7">
											<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" maxlength="30">
											@error('name')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>    
									</div>

									<div class="form-group row">
										<div class="col-10">
											<button class="btn btn-primary float-right">Update</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection