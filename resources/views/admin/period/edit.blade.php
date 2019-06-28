@extends('admin.layout.masteradmin')

@section('title')

<title>Periods</title>
@endsection

@section('content')
<div id="content-wrapper" class="black">

	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb black" >
			<li class="breadcrumb-item">
				<a href="/admin">Dashboard</a>
			</li>
			<li class="breadcrumb-item"><a href="/periods">Periods</a></li>
			<li class="breadcrumb-item active">Edit</li>
		</ol>
		
		<!-- Page Content -->
		<form action="{{ route('periods.update',$period) }}" method="post">
			{{ method_field("put") }}
			@csrf
			
			<div class="form-group">
				<label for="" class="white">Subject</label>
				<select name="subject_id" id="">
					@foreach($subjects as $subject)
					<option value="{{$subject->id}}">{{$subject->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="" class="white">Major</label>
				<select name="major_id" id="">
					@foreach($majors as $major)
					<option value="{{$major->id}}">{{$major->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="" class="white">Delivery time</label>
				<input class="form-control round time" name="start" id="" type="text" required/>
				<small id="" class="form-text text-muted">Please enter start time</small>
			</div>
			<div class="form-group">
				<label for="">Delivery time</label>
				<input class="form-control round time" name="end" id="" type="text" required/>
				<small id="" class="form-text text-muted">Please enter start time</small>
			</div>
			<div>
				<button type="submit" id='submit-all'class="btn btn-success mr-2">Submit</button>
			</div>
		</form>
		
	</div>
	@push('scripts')

	<script type="text/javascript">
		$(document).ready(function(){
	            $('.time').mdtimepicker({theme: 'black'}); //Initializes the time picker
	        });

	    </script>

	    @endpush
	    @endsection