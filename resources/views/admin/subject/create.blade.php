@extends('admin.layout.masteradmin')


@section('title')

<title>Subject Create</title>
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
			<li class="breadcrumb-item active">Create</li>

		</ol>

		<form action="{{ route('subjects.store') }}" method="post">
			@csrf
			<div class="form-group">
				<label for="" class="white">Subject Name</label>
				<input type="text" name="name" class="form-control" id="" placeholder="Enter subject name" required>
			</div>
			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
</div>



@endsection