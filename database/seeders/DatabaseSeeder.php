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
        $this->call(PermissionTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ChoiceTestAnswerSeeder::class);
        $this->call(ChoiceTestQuestionSeeder::class);
        $this->call(RolePlayGroup::class);
        $this->call(RolePlaySubGroup::class);
        $this->call(RolePlayQuestions::class);
    }
}
