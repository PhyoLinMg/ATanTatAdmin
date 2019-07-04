@extends('admin.layout.masteradmin')


@section('title')

<title>Majors</title>
@endsection

@section('content')
<div id="content-wrapper" class="black">

	<div class="container-fluid">

		<!-- Breadcrumbs-->
		<ol class="breadcrumb black">
			<li class="breadcrumb-item">
				<a href="/admin">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Periods</li>
		</ol>

		<!-- Page Content -->
		<table class="table table-dark">
			<thead>
				<tr>
					<td>Subject Name</td>
					<td>Major Name</td>
					<td>Start Time</td>
					<td>End Time</td>
					<td></td>
					<td></td>
				</tr>
			</thead>
			<tbody>
				@foreach($periods as $period)
				<tr>
					<td>{{App\Subject::find($period->subject_id)->name}}</td>
					<td>{{App\Major::find($period->major_id)->name}}</td>
					<td>{{$period->start_time}}</td>
					<td>{{$period->end_time}}</td>
					<td><a href="{{ route('periods.edit',$period->id) }}" class="btn btn-primary">Edit</a></td>
					<td>
						<form id = "deleteform{{$period->id}}" action="{{route('periods.destroy',$period->id)}}" method="post">
							@csrf
							<input type="hidden" name="_method" value="delete">
						</form>
						<button onclick="confirm({{$period->id}})" class="btn btn-danger">Delete</button>
					</td>
				</tr>

				@endforeach
			</tbody>
		</table>

	</div>
	<script>
		function confirm($id){
			const swal=window.swal;
			
			swal({
				title: "Are you sure?",
				text: "",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					document.getElementById("deleteform"+$id).submit();
					
				} else {
					swal("Not Deleted");
					
				}
			});
		}
	</script>

	@endsection