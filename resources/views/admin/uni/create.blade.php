@extends('admin.layout.masteradmin')


@section('title')

<title>University Create</title>
@endsection

@section('content')
<form action="{{ route('unis.store') }}">
	<input type="text" name="name">
	<input type="submit" class="btn btn-primary">
</form>
@endsection