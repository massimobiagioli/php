<?php

class AuthorTableSeeder extends Seeder {
    
    public function run() {
        Author::create(array(
           'name' => 'Stephen King' 
        ));
        
        Author::create(array(
           'name' => 'Dean Koontz' 
        ));
    }
    
}