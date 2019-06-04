@extends('admin.layout.masteradmin')


@section('title')

<title>Subjects</title>
@endsection

@section('content')
<table class="table table-dark">
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>12</td>
			<td>Good</td>
		</tr>
		{{-- @foreach($majors as $major)

		@endforeach --}}
	</tbody>
</table>
@endsection