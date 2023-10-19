@extends('admin.layouts.app')
@section('title' , 'Settings')
@section('content')
	<div class="main-content">
		<div class="card">
			<div class="card-header">
				<h4>Settings</h4>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.setting.add') }}" enctype="multipart/form-data">
				@csrf 
					
					<div class="row">
						<input type="hidden" value="{{ $setting->id }}">
						<label class="col-lg-4">Footer Text
						<span id="asterisk">*</span></label>
						<div class="col-lg-8 mb-3">
							<input type="text" placeholder="Enter footer text" class="form-control"
							value="{{ $setting->footer_text }}" 
							name="footer_text" 
							style="text-transform:uppercase; "
							maxlength="55">
						</div>

						<label class="col-lg-4">Side Bar Image 
						<span id="asterisk">*</span></label>
						<div class="col-lg-8">
							<input  type="file" class="form-control" accept=".jpeg,.png,.jpg" placeholder="Image"
								 name="side_bar_image">
							<img src="{{ asset('admin/assets/img/'. $setting->side_bar_image) }}" width=100 height=100 />
						</div>
						<div class="text-end">
							<button class="btn btn-primary">Save</button>
						</div>
					</div>	
				</form>
			</div>
		</div>
	</div>
@endsection
@section('script')
	<script>
		$('input[name=side_bar_image]').on('change', function() {
			console.log((this).value);
		});
	</script>
@endsection