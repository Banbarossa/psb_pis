<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'banbarossa@gmail.com',
            'password' => Hash::make('secret')
        ]);
        User::factory()->create([
            'name' => 'admin1',
            'email' => 'admin@softui.com',
            'password' => Hash::make('secret')
        ]);
    }
}
