<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'admin',
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'role' => 1,
                'email' => 'admin@gmail.com'
            ],
            [
                'name' => 'operator',
                'username' => 'operator',
                'password' => bcrypt('operator'),
                'role' => 2,
                'email' => 'operator'
            ],
        ];

        foreach($user as $key => $value) {
            User::create($value);
        }
    }
}
