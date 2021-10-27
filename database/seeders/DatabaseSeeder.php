<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // create user
        // create design
        // create invitation
        // create guest book

        User::create([
            'name' => 'Didi Prasetyo',
            'username' => 'Prasetyo17',
            'email' => 'didiprasetyo360@gmail.com',
            'admin' => 1,
            'password' => bcrypt('password')
        ]);
        \App\Models\User::factory(2)->create();
        \App\Models\Invitations::factory(3)->create();
        \App\Models\GuestBook::factory(20)->create();
        \App\Models\Testimoni::factory(3)->create();
    }
}
