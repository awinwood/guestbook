@extends('layouts.default')

@section('content')
	<br/>
	<a href="{{url('posts/create')}}" class="btn btn-primary"><i class="icon-plus-sign"></i> Add New Post</a><br/>
	<hr/>
	@foreach ($posts as $post)
		<p><em>{{$post->name }}</em> <span class="muted">{{date('d/m/Y', strtotime($post->date))}}</span></p>
		<p>
			@if(strlen($post->body) > 100)
				{{substr($post->body, 0, 100)}}...<a href="{{url('posts/'.$post->id)}}" class="btn btn-success pull-right"><i class="icon-search"></i> Read More</a>
			@else
				{{$post->body}}
			@endif
		</p>
		<hr/>
	@endforeach
	{{$posts->links()}}
@stop