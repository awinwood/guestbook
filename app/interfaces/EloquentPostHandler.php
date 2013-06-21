<?php

class EloquentPostHandler implements PostInterface
{
	public function all()
	{
		return Post::orderby('date', 'desc')->paginate(10);
	}

	public function find($id)
	{
		return Post::find($id);
	}

	public function store($data)
	{
		$post = new Post($data);
		return $post->save();
	}
}