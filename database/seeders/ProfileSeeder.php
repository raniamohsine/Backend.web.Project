<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Admin',
            'email'=>'admin@ehb.be',
            'password'=>bcrypt('Password!321'),
            'is_admin'=>true,
        ]);

        $this->call(ProfileSeeder::class);
        
    }
}
