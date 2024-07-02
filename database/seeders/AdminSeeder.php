<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('admins')->insert([
            [
                'name' => 'mihir',
                'email' => 'mihir@admin.com',
                'password' => bcrypt("Mihir_123"),
            ],
            [
                'name' => 'yash',
                'email' => 'yash@admin.com',
                'password' => bcrypt("Yash_123"),
            ],
        ]);
    }
}
