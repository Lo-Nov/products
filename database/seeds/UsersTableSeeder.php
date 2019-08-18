<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$.8Q7LtCrksJz2v/c/iE.eeXCLzaUdJSVASjkdv8a.OkEYwTh4W9su',
            'remember_token' => null,
            'created_at'     => '2019-08-18 08:27:29',
            'updated_at'     => '2019-08-18 08:27:29',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
