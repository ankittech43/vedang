<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =array(array(
            "name" =>"SuperAdmin",
            'status' => "1",
        ),array(
            "name" =>"Admin",
            'status' => "1",
        ));

        Role::insert($data);

    }


}
