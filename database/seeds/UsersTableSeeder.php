<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder{
    public function run(){
        \DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@transisi.id',
            'password' => bcrypt('transisi'),
            'email_verified_at' => '2019-11-20 21:00:00',
            'remember_token' => bcrypt('transisi'),
            'created_at' => '2019-11-20 21:00:00',
            'updated_at' => '2019-11-20 21:00:00',
        ]);
    }
}
