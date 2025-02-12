<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => "Kasatintin (System Administrator)",
                'email' => "admin@gmail.com",
                'password' => Hash::make("password")

            ]
        );
    }
}
