@extends('layouts.app')
@section('content')
	<h1>{{$title}}</h1>
	@if( count($services) > 0)
	@foreach($services as $service)
		<h2>{{$service}}</h2>
	@endforeach
	@endif
@endsection