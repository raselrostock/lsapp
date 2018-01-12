@extends('layouts.app');
@section('content')
	<h1>posts</h1>
	@if( count( $posts ) >0 )
	<ul>
		@foreach( $posts as $post )
			<p><a href="/posts/{{$post->id}}">{{$post->title}}</a></p>
			<span>Created at {{$post->created_at}}</span>
		@endforeach
	</ul>
	@else 
		<p> No Posts Found</p>
	@endif
@endsection