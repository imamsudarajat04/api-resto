<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create(
            [
                'name'     => 'Admin',
                'no_hp'    => '081234123412',
                'email'    => 'admin@resto.com',
                'password' => '12345',
                'address'  => 'lorem ipsum',
            ]
        );
    }
}
