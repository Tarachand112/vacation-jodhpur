@extends('admin.layouts.app')
@section('title', 'Profile')
@section('content')
	<div class="main-content">
		<div class="section-body">
			<div class="card">
				<div class="card-header">
					<h4>Profile</h4>
				</div>
				<div class="card-body">
					<form method="POST" action="{{ route('admin.profile') }}" enctype="multipart/form-data">
					@csrf
						<div class="row">
							<div class="col-lg-6">
								<div class="py-2">
									<label>Name</label> 
									<input   type="text" class="form-control" name="name" maxlength="30" value="{{ $user->name }}">
								</div>
								<div class="py-2">
									<label>Mobile Number</label>
									<input type="text" class="form-control" name="mobile_number" maxlength="11" value="{{ $user->mobile_number }}">
								</div>
							</div>

							<div class="col-lg-6">
								<div class="py-2">
									<label>Email</label>
									<input type="text" class="form-control" name="email"maxlength="40" value="{{ $user->email }}">
								</div>
								<div class="py-2">
									<label>Profile Image</label> 
									<input  type="file" class="form-control" accept=".jpeg,.png,.jpg" placeholder="Image" name="profile_image" >
									<img src="{{ asset('admin/assets/images/' . $user->profile_image) }}" class="w-50 h-50" id="preview">
								</div>
							</div>

							<div class="text-end">
								<button class="btn btn-primary">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@section ('script')
<script>
	$(document).on('load', function() {
		$('input[name=profile_image]').on('change', function() {
			const preview = document.getElementById('preview');
			const [file] = (this).files;
			if (file) {
				preview.src = URL.createObjectURL(file);
				console.log(URL.createObjectURL(file));
			}
		})
	})
</script>
@endsection