@extends('admin.layout.masteradmin')


@section('title')

<title>Period Create</title>
@endsection

@section('content')
<form action="{{ route('period.store') }}" method="post">
	@csrf
	<input type="text" name="name">
	<input type="submit" class="btn btn-primary">
</form>
@endsection