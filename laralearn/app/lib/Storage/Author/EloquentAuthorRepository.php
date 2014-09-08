<?php

namespace Storage\Author;

use Author;

class EloquentAuthorRepository implements AuthorRepository {
    
    public function index() {
        return Author::all();
    }

    public function store() {
        $author = new Author();
        $author->name = Input::get('name');
        $author->save();
        return $author;
    }

    public function show($id) {
        return Author::find($id);
    }

    public function update($id) {
        $author = Author::find($id);
        $author->name = Input::get('name');
        $author->save();
        return $author;
    }
    
    public function destroy($id) {
        $author = Author::find($id);
        $author->delete();
        return $author;
    }
    
}