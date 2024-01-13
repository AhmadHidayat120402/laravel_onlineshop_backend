<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // general dibuatkan
        User::factory(9)->create();

        // buat statis
        User::factory()->create([
            'name' => 'Admin Dayat',
            'email' => 'dayatfic12@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '085676543345',
            'roles' => 'ADMIN'
        ]);
    }
}
