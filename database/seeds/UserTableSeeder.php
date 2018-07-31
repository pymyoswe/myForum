<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => "Admin",
                'email' => "admin@gmail.com",
                'password' => bcrypt('password'),
                'role' =>"admin",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        DB::table('users')->insert(
            [
                'name' => "User",
                'email' => "user@gmail.com",
                'password' => bcrypt('password'),
                'role' =>"user",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );
    }
}
