<?php

namespace Database\Seeders;

use App\Models\User;
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
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'john@mail.com',
                'password' => Hash::make('admin12345'),
                'remember_token' => null,
                'created_at' => \date('Y-m-d h:i:s'),
                'updated_at' => \date('Y-m-d h:i:s'),
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane@mail.com',
                'password' => Hash::make('admin12345'),
                'remember_token' => null,
                'created_at' => \date('Y-m-d h:i:s'),
                'updated_at' => \date('Y-m-d h:i:s'),
            ],
        ];

        User::insert($users);
    }
}
