<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['id' => 1], [
            'name' => 'Super Admin',
            'email' => 'super@admin.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
