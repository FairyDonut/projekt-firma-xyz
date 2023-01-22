<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::parse('1.01.2023 0:00')->toDateTimeString();

        User::insert([
            'login' => 'admin',
            'password' => Hash::make('zaq1@WSX'),
            'firstName' => 'admin',
            'lastName' => 'admin',
            'role' => 'Admin',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        User::insert([
            'login' => 'j.kowalski',
            'password' => Hash::make('zaq1@WSX'),
            'firstName' => 'Janusz',
            'lastName' => 'Kowlaski',
            'role' => 'Manager',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        User::insert([
            'login' => 'm.nowak',
            'password' => Hash::make('zaq1@WSX'),
            'firstName' => 'Mariusz',
            'lastName' => 'Nowak',
            'role' => 'Worker',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        User::insert([
            'login' => 'k.wolny',
            'password' => Hash::make('zaq1@WSX'),
            'firstName' => 'Krzysztof',
            'lastName' => 'Wolny',
            'role' => 'Worker',
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }
}
