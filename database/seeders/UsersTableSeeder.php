<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'whoisraa',
            'email' => 'whoisraa@pm.me',
            'password' => bcrypt('okelahkalobegitu')
        ]);
    }
}
