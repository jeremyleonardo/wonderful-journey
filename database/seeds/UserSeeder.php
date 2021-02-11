<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "Admin",
                'email' => "admin@mail.com",
                'phone' => "08123123",
                'role' => "admin",
                'password' => bcrypt("admin12345"),
            ],
            [
                'name' => "Anto",
                'email' => "anto@mail.com",
                'phone' => "08421421",
                'role' => "user",
                'password' => bcrypt("anto12345"),
            ],
            [
                'name' => "Budi",
                'email' => "budi@mail.com",
                'phone' => "084221421",
                'role' => "user",
                'password' => bcrypt("budi12345"),
            ],
            [
                'name' => "Jeremy",
                'email' => "jeremy@mail.com",
                'phone' => "08211421",
                'role' => "user",
                'password' => bcrypt("jeremy12345"),
            ],
        ]);
    }
}
