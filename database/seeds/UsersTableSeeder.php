<?php

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
        $username = 'admin';
        $users[] = [
            'name' = $username,
            'password' = bcrypt('12345'),
            'email' = str_random(5) . '@m.r',
        ]
    }
}
