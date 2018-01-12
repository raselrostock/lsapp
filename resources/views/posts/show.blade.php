@extends('layouts.app');
@section('content')
	<h1>{{$post->title}}</h1>
	<a href="/posts" class="btn btn-default">Back</a>
@endsection