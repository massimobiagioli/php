<?php

class AuthorTableSeeder extends Seeder {
    
    public function run() {
        DB::table('authors')->delete();
        
        Author::create(array(
           'name' => 'Stephen King' 
        ));
        
        Author::create(array(
           'name' => 'Dean Koontz' 
        ));
    }
    
}