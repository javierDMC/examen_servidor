<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //User::factory()->count(5)->create();

        $user = new User();
        $user->login='admin';
        $user->password='1234';
        $user->rol='admin';
        $user->save();

        $user1 = new User();
        $user1->login='user';
        $user1->password='1234';
        $user1->rol='user';
        $user1->save();
    }
}
