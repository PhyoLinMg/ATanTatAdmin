@extends('admin.layout.masteradmin')


@section('title')

<title> Create</title>
@endsection

@section('content')

<div id="content-wrapper" class="black">

	<div class="container-fluid">

		<!-- Breadcrumbs-->
		<ol class="breadcrumb black">
			<li class="breadcrumb-item">
				<a href="/admin">Dashboard</a>
			</li>
			<li class="breadcrumb-item"><a href="/peroids">Peroids</a></li>
			<li class="breadcrumb-item active">Create</li>

		</ol>

		<form action="{{ route('periods.store') }}" method="post">
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
			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
</div>

@push('scripts')

<script type="text/javascript">
	$(document).ready(function(){
	            $('.time').mdtimepicker({theme: 'black'}); //Initializes the time picker
	        });

	    </script>

	     @endpush

	    @endsection