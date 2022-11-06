<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin'),
            'remember_token'=>Str::random(60),
            'role'=>'Admin',
            'is_aktif'=>true,
            'foto'=>'admin.png'
        ]);

        // User::factory(5)->create();
    }
}
