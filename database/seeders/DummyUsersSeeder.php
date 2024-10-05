<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersData = [
            [
                'name' => 'mas operator',
                'email' => 'operator@gmail.com',
                'role' => 'operator',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'mas keuangan',
                'email' => 'keuangan@gmail.com',
                'role' => 'keuangan',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'mas marketing',
                'email' => 'marketing@gmail.com',
                'role' => 'marketing',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($usersData as $key => $val) {
            User::create($val);
        }
    }
}

