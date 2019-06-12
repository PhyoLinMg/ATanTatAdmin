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
			<li class="breadcrumb-item active">Subjects</li>
		</ol>

		<!-- Page Content -->
		<table class="table table-dark">
			<thead>
				<tr>
					<td>Name</td>
					<td></td>
					<td></td>
				</tr>
			</thead>
			<tbody>
				@foreach($subjects as $subject)
				<tr>
					<td>{{$subject->name}}</td>
					<td><a href="{{ route('subjects.edit',$subject->id) }}" class="btn btn-primary">Edit</a></td>
					<td>
						<form id = "deleteform{{$subject->id}}" action="{{route('subjects.destroy',$subject->id)}}" method="post">
							@csrf
							<input type="hidden" name="_method" value="delete">
						</form>
						<button onclick="confirm({{$subject->id}})" class="btn btn-danger">Delete</button>
					</td>
				</tr>
				@endforeach
			</tbody>

		</table>




	</div>
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