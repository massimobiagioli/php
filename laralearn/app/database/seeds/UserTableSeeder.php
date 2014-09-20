<?php

class UserTableSeeder extends Seeder {
    
    public function run() {
        DB::table('users')->delete(); 
        
        User::create(array(
            'username' => 'admin',
            'password' => Hash::make('Bazzw03dd'),
            'fullname' => 'Amministratore Laralearn',
            'email' => 'admin@laralearn.it'
        ));      
    }
    
}