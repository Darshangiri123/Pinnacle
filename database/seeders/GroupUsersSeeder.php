<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('group_users')->insert([
            [
                'group_id'=>'1',
                'user_id'=>'1',
                'role'=>'Admin',
            ],
            [
                'group_id'=>'1',
                'user_id'=>'2',
                'role'=>'User',
            ],
            [
                'group_id'=>'1',
                'user_id'=>'3',
                'role'=>'User',
            ],
            [
                'group_id'=>'2',
                'user_id'=>'1',
                'role'=>'Admin',
            ],
            [
                'group_id'=>'2',
                'user_id'=>'2',
                'role'=>'User',
            ],
            [
                'group_id'=>'1',
                'user_id'=>'4',
                'role'=>'User',
            ],
            [
                'group_id'=>'2',
                'user_id'=>'3',
                'role'=>'User',
            ],
        ]);
    }
}
