@extends('admin.layout.masteradmin')


@section('title')

<title>Subject Create</title>
@endsection

@section('content')
<form action="{{ route('years.store') }}">
	<input type="text" name="name">
	<input type="submit" class="btn btn-primary">
</form>
@endsection