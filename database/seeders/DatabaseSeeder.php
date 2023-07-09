<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('secret')
        ]);
        DB::table('users')->insert([
            'username' => 'Customer Service',
            'firstname' => 'Customer',
            'lastname' => 'Service',
            'email' => 'cs@test.com',
            'password' => bcrypt('secret')
        ]);
        $this->call(PermissionTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ChoiceTestAnswerSeeder::class);
        $this->call(ChoiceTestQuestionSeeder::class);
    }
}
