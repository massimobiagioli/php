<?php

use Storage\Author\AuthorRepository as Author;

class AuthorController3 extends BaseController {
    
    protected $author;
	
    public function __construct(Author $author) {
        $this->author = $author;
        $this->beforeFilter('auth.api');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        Log::info('Full Name: ' . Auth::user()->fullname);
        return $this->author->index();
    }    

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        return $this->author->store();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return $this->author->show($id);
    }
   
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        return $this->author->update($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        return $this->author->destroy($id);
    }
    
}
