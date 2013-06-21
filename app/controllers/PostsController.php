<?php

class PostsController extends BaseController {

    protected $posts;

    public function __construct(PostInterface $posts)
    {
        $this->posts = $posts;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = $this->posts->all();

        return View::make('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $result = $this->posts->store(Input::all());

        return $result
            ? Redirect::route('posts.index')
            : Redirect::route('posts.create')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}