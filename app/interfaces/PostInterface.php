<?php

interface PostInterface
{
	public function all();
	public function find($id);
	public function store($data);
}