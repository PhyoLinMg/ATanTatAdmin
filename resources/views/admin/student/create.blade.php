@extends('admin.layout.masteradmin')


@section('title')

<title>Student Create</title>
@endsection

@section('content')
<form action="/admin/subjects/store">
	<input type="text" name="name">
	<input type="text" name="year">
	<input type="submit" class="btn btn-primary">
</form>
@endsection