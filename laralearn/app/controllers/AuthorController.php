<?php

class AuthorController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        return Author::all();
    }    

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $author = new Author();
        $author->name = Input::get('name');
        $author->save();
        return $author;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return Author::find($id);
    }
   
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $author = Author::find($id);
        $author->name = Input::get('name');
        $author->save();
        return $author;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $author = Author::find($id);
        $author->delete();
        return $author;
    }

}
