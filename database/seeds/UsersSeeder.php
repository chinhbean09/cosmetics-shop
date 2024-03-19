<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Run SQL commands from users.sql
        DB::unprepared(file_get_contents(database_path('users.sql')));
    }
}
