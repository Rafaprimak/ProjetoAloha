<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        //User::factory()->create([
        //    'name' => 'Admin',
        //    'email' => 'admin@example.com',
        //    'password' => bcrypt('12345678'),
        //    'is_admin' => true,
        //]);
        $this->call([
            PaisesTableSeeder::class,
            LocaisTableSeeder::class,
            AdminUserSeeder::class,
        ]);
    }
}