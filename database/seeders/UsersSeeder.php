<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => 'test1@gmail.com',
                'password'=>'test1@pass',
                'mobile' => '+1 (555) 123-4567',
                'address' => '123 Main Street, Anytown, USA',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'test2@gmail.com',
                'password'=>'test2@pass',
                'mobile' => '+1 (555) 987-6543',
                'address' => '456 Elm Street, Otherville, USA',
            ],
            [
                'name' => 'Michael Johnson',
                'email' => 'test3@gmail.com',
                'password'=>'test3@pass',
                'mobile' => '+1 (555) 555-5555',
                'address' => '789 Oak Avenue, Somewhere City, USA',
            ],
            [
                'name' => 'Emily Brown',
                'email' => 'test4@gmail.com',
                'password'=>'test4@pass',
                'mobile' => '+1 (555) 111-2222',
                'address' => '101 Pine Road, Anytown, USA',
            ],
            [
                'name' => 'David Wilson',
                'email' => 'test5@gmail.com',
                'password'=>'test5@pass',
                'mobile' => '+1 (555) 222-3333',
                'address' => '555 Maple Street, Otherville, USA',
            ],
            [
                'name' => 'Sarah Martinez',
                'email' => 'test6@gmail.com',
                'password'=>'test6@pass',
                'mobile' => '+1 (555) 777-8888',
                'address' => '789 Cedar Lane, Someplace, USA',
            ],
        ]);
    }
}
