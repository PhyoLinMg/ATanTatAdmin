@extends('admin.layout.masteradmin')

@section('title')

<title>Majors</title>
@endsection

@section('content')
<div id="content-wrapper" class="black">

	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb black" >
			<li class="breadcrumb-item">
				<a href="/admin">Dashboard</a>
			</li>
			<li class="breadcrumb-item"><a href="/majors">Majors</a></li>
			<li class="breadcrumb-item active">Edit</li>
		</ol>
		
		<!-- Page Content -->
		<form action="{{ route('majors.update',$major) }}" method="post">
			{{ method_field("put") }}
			@csrf
			
			<div class="form-group">
				<label for="name" class="white">Major Name</label>
				@if($errors->has("name"))
				<input type="text" class="form-control is-invalid" name="name" id="name"  placeholder="Enter the product name" value="{{ old('name')}} ">
				<div class="invalid-feedback">
					{{ $errors->first("name") }}
				</div>
				@else
				<input type="text" class="form-control" name="name" placeholder="Enter the major name" value="{{ $major->name }} ">
				@endif
			</div>	
			<div class="form-group">
				<label for="name" class="white">Year</label>
				@if($errors->has("year"))
				<input type="text" class="form-control is-invalid" name="year" id="year"  placeholder="Enter the year" value="{{ old('year')}} ">
				<div class="invalid-feedback">
					{{ $errors->first("year") }}
				</div>
				@else
				<input type="text" class="form-control" name="year" placeholder="Enter the year of your major" value="{{ $major->year }} ">
				@endif
			</div>
			<div>
				<button type="submit" id='submit-all'class="btn btn-success mr-2">Submit</button>
			</div>
		</form>
		
	</div>
	@endsection