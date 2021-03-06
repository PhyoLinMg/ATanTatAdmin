<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'=>'admin',
        	'email'=>'admin@gmail.com',
        	'password'=>Hash::make('admin1234'),
        	'role'=>'admin',
            'uni_id'=>1,
            'major_id'=>1
        ]);
    }
}
