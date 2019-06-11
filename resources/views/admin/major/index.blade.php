@extends('admin.layout.masteradmin')


@section('title')

<title>Majors</title>
@endsection

@section('content')
<div id="content-wrapper">

	<div class="container-fluid">

		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="/admin">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Majors</li>
		</ol>

		<!-- Page Content -->
		<table class="table table-dark">
			<thead>
				<tr>
					<td>Name</td>
					<td>Year</td>
				</tr>
			</thead>
			<tbody>
				@foreach($majors as $major)
				<tr>
					<td>{{$major->name}}</td>
					<td>{{$major->year}}</td>
				</tr>
				@endforeach
			</tbody>
			
		</table>

	</div>
	@endsection