<?php

use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->truncate();
        DB::table('user_roles')->insert([
            [
                'id' => 1,
                'name' => 'user',
                'description' => 'default user',
            ],
            [
                'id' => 2,
                'name' => 'admin',
                'description' => 'main administrator',
            ],

        ]);
    }
}
