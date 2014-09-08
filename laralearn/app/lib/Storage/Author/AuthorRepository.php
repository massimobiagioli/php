<?php

namespace Storage\Author;

interface AuthorRepository {
    
    public function index();
    
    public function store();
    
    public function show($id);
    
    public function update($id);
    
    public function destroy($id);
    
}