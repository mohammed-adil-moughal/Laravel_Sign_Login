<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        DB::table('users')->insert([
            'name' => "baba",
            'email' => 'baba@gmail.com',
            'password' => bcrypt('foobar'),
            'admin'=>1
        ]);
    }
}
