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
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array(
                'name' => "Super-A1",
                'email' => "ankittech43@gmail.com",
                'role_id' => 1,
                'password' => Hash::make("ankittech43@gmail.com"),
            ),
            array(
                'name' => "Super-A2",
                'email' => "ankittech44@gmail.com",
                'role_id' => 1,
                'password' => Hash::make("ankittech44@gmail.com")
            ),
            array(
                'name' => "Admin-A1",
                'email' => "admin43@gmail.com",
                'role_id' => 2,
                'password' => Hash::make("admin43@gmail.com")),
            array(
                'name' => "Admin-A2",
                'email' => "admin44@gmail.com",
                'role_id' => 2,
                'password' => Hash::make("admin44@gmail.com"))

        );

        User::insert($data);

    }
}
