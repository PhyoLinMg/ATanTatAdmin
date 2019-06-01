@extends('admin.layout.masteradmin')


@section('title')

<title>Student Create</title>
@endsection

@section('content')
<form action="{{ route('students.store') }}" method="post">
	@csrf
	<input type="text" name="name">
	<input type="text" name="year">
	<input type="submit" class="btn btn-primary">
</form>
@endsection