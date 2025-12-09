<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['name'=>'admin','email'=>'admin@gmail.com','status'=>'active','role'=>'admin','password'=>'admin']);
        User::create(['name'=>'staf','email'=>'staf@gmail.com','status'=>'active','role'=>'staf','password'=>'staf']);
        User::create(['name'=>'user','email'=>'user@gmail.com','status'=>'active','role'=>'user','password'=>'user']);
    }
}
