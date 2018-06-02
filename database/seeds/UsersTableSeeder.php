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
        DB::table('users')->where('email', 'user@user.com')->delete();

        //add admin
        DB::table('users')->insert([
            [
                'name' => 'Василь',
                'nickname' => 'Super-V',
                'last_name' => 'Столотенісов',
                'birthday' => '1990-10-10',
                'email' => 'user@user.com',
                'password' => bcrypt('111111'),
            ]
        ]);
    }
}
