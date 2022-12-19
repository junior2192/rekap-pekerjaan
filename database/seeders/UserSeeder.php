<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('rahasia123'),
        ]);
        
        User::Create([
            'name' => 'admin2',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('rahasia123'),
        ]);
    }
}
