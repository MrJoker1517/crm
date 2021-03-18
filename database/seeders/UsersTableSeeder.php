<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'SuperAdmin',
            'email' => 'super@admin.com',
            'password' => '$2y$10$Sz/2/32qibP1iW928ooHY.uIk7y757ROCXMaXFPUiyJBYN8.uKmN2' //12345678
        ]);
    }
}
