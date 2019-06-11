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
					<td></td>
					<td></td>
				</tr>
			</thead>
			<tbody>
				@foreach($majors as $major)
				<tr>
					<td>{{$major->name}}</td>
					<td>{{$major->year}}</td>
					<td><a href="{{ route('majors.edit',$major->id) }}" class="btn btn-primary">Edit</a></td>
					<td>
						<form id = "deleteform{{$major->id}}" action="{{route('majors.destroy',$major->id)}}" method="post">
							@csrf
							<input type="hidden" name="_method" value="delete">
						</form>
						<button onclick="confirm({{$major->id}})" class="btn btn-danger">Delete</button>
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