<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llamar a los seeders de comics y usuarios
        $this->call([
            ComicsTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}
