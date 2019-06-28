@extends('admin.layout.masteradmin')


@section('title')

<title>Admin Panel</title>
@endsection

@section('content')
<div id="content-wrapper" class="black">

	<div class="container-fluid" >

		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="/admin">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Admin Register</li>
		</ol>

		<!-- Page Content -->


		<div class="card-body">
			<form method="POST" action="{{ route('adminstore') }}">
				@csrf

				<div class="form-group row">
					<label for="name" class="col-md-4 col-form-label text-md-right white">{{ __('Name') }}</label>

					<div class="col-md-6">
						<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus="true" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please enter admin name !')" />

						@if ($errors->has('name'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('name') }}</strong>
						</span>
						@endif
					</div>
				</div>

				<div class="form-group row">
					<label for="email" class="col-md-4 col-form-label text-md-right white">{{ __('E-Mail Address') }}</label>

					<div class="col-md-6">
						<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required="true" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter your valid email')"/>

						@if ($errors->has('email'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
						@endif
					</div>
				</div>

				<div class="form-group row">
					<label for="password" class="col-md-4 col-form-label text-md-right white">{{ __('Password') }}</label>

					<div class="col-md-6">
						<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required="true" />

						@if ($errors->has('password'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
						@endif
					</div>
				</div>

				<div class="form-group row">
					<label for="password-confirm" class="col-md-4 col-form-label text-md-right white">{{ __('Confirm Password') }}</label>

					<div class="col-md-6">
						<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="true" />
					</div>
				</div>

				<div class="form-group row mb-0">
					<div class="col-md-6 offset-md-4">
						<button type="submit" class="btn btn-primary">
							{{ __('Register') }}
						</button>
					</div>
				</div>
			</form>
		</div>
		

	</div>
	@endsection