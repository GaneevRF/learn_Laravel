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
        $users = [
            [
                'name'     => 'Автор неизвестен',
                'email'    => 'tut_tam@g.t',
                'password' => bcrypt(str_random(16))
            ],
            [
                'name'     => 'Автор',
                'email'    => 'gan.raf@g.c',
                'password' => bcrypt('12345')
            ]
        ];

        DB::table('users')->insert($users);
    }
}
