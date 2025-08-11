<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create user
        $user = User::create([
            'name'      => 'Super Admin',
            'email'     => 'admin@test.com',
            'username'  => 'admin@test.com',
            'active'    => '1',
            'gender'    => 'm',
            // 'password'  => bcrypt('secret'),
            'password'  => 'secret',
            'encrypted_id' => 'e10adc3949ba59abbe56e057f20f883e'
        ]);
    }
}
