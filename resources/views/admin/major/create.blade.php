@extends('admin.layout.masteradmin')


@section('title')

<title>Major Create</title>
@endsection

@section('content')
<form action="{{ route('majors.store') }}">
	<input type="text" name="name">
	<input type="submit" class="btn btn-primary">
</form>
@endsection