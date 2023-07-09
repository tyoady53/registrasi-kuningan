<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'mutiplechoice.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'mutiplechoice.quis', 'guard_name' => 'web']);
        Permission::create(['name' => 'mutiplechoice.results', 'guard_name' => 'web']);
    }
}
