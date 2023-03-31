<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
 
    public function run(): void
    {
        User:: create([
            'name' => 'Yuderly',
            'email' => 'yuderly@gmail.com',
            'password' => bcrypt('1234')
        ])->assignRole('Admin');

        
        User:: create([
            'name' => 'sapuy',
            'email' => 'sapuy@gmail.com',
            'password' => bcrypt('1234')
        ])->assignRole('Admin');

        
        User:: create([
            'name' => 'chavarro',
            'email' => 'chavarro@gmail.com',
            'password' => bcrypt('1234')
        ])->assignRole('User');

        
    }
}
