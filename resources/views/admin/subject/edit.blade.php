@extends('admin.layout.masteradmin')

@section('title')

<title>Subjects</title>
@endsection

@section('content')
<div id="content-wrapper" class="black">

	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb black">
			<li class="breadcrumb-item">
				<a href="/admin">Dashboard</a>
			</li>
			<li class="breadcrumb-item"><a href="/subjects">Subjects</a></li>
			<li class="breadcrumb-item active">Edit</li>
		</ol>
		
		<!-- Page Content -->
		<form action="{{ route('subjects.update',$subject) }}" method="post">
			{{ method_field("put") }}
			@csrf
			
			<div class="form-group">
				<label for="name">Subject Name</label>
				@if($errors->has("name"))
				<input type="text" class="form-control is-invalid" name="name" id="name"  placeholder="Enter the product name" value="{{ old('name')}} ">
				<div class="invalid-feedback">
					{{ $errors->first("name") }}
				</div>
				@else
				<input type="text" class="form-control" name="name" placeholder="Enter the subject name" value="{{ $subject->name }}">
				@endif
			</div>	
			
			<div>
				<button type="submit" id='submit-all'class="btn btn-success mr-2">Submit</button>
			</div>
		</form>
		
	</div>
	@endsection