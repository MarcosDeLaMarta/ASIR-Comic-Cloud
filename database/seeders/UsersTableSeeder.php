<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Verificar si el usuario 'marcos' ya existe
        if (!User::where('email', 'marcos@comic.com')->exists()) {
            User::create([
                'name' => 'marcos',
                'email' => 'marcos@comic.com',
                'password' => Hash::make('1234'),
            ]);
        }

        // Verificar si el usuario 'admin' ya existe
        if (!User::where('email', 'admin@comic.com')->exists()) {
            User::create([
                'name' => 'admin',
                'email' => 'admin@comic.com',
                'password' => Hash::make('1234'),
                'rol' => '1',
            ]);
        }
    }
}
