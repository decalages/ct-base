<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'firstname' => 'Admin',
            'lastname' => 'Istrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'admin',
            'display_name' => 'Administrateur',
        ]);
        DB::table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 1,
        ]);
    }
}
