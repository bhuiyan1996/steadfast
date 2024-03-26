<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'User 1',
            'email'=>'user1@gmail.com',
            'password'=>bcrypt('12345'),
            'role'=>'admin',
         ]);

         User::create([
            'name'=>'User 2',
            'email'=>'user2@gmail.com',
            'password'=>bcrypt('12345'),
            'role'=>'reader',
         ]);

         User::create([
            'name'=>'User 3',
            'email'=>'user3@gmail.com',
            'password'=>bcrypt('12345'),
            'role'=>'reader',
         ]);
         User::create([
            'name'=>'User 4',
            'email'=>'user4@gmail.com',
            'password'=>bcrypt('12345'),
            'role'=>'reader',
         ]);
         User::create([
            'name'=>'User 5',
            'email'=>'user5@gmail.com',
            'password'=>bcrypt('12345'),
            'role'=>'reader',
         ]);
         User::create([
            'name'=>'User 6',
            'email'=>'user6@gmail.com',
            'password'=>bcrypt('12345'),
            'role'=>'reader',
         ]);
    }
}
