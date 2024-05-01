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
        User::create([
            'name' => 'marcos',
            'email' => 'marcos@comic.com',
            'password' => Hash::make('1234'),
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@comic.com',
            'password' => Hash::make('1234'),
        ]);
    }
}