<?php

use \Carbon\Carbon;
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
        DB::table('users')->insert([
            'name'          => 'admin',
            'email'         => 'admin@admin.com',
            'password'      => bcrypt('admin'),
            'role_id'       => 1,
            'created_at'    => Carbon::now()
        ]);
    }
}
