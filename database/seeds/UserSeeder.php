<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'adan',
            'email'=>'adan@gmail.com',
            'password'=>bcrypt('123'),
        ]);

        DB::table('users')->insert([
            'name'=>'crineth',
            'email'=>'crineth@gmail.com',
            'password'=>bcrypt('123'),
        ]);

        DB::table('users')->insert([
            'name'=>'alex',
            'email'=>'alex@gmail.com',
            'password'=>bcrypt('123'),
        ]);
    }
}
