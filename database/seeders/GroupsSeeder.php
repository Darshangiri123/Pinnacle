<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('groups')->insert([
            [
                'community_id'=>'1',
                'name'=>'Gryfinndor',
                'image_path'=>'public/group_images/C6wsD3MYvBdjvTGULWaScYCi3T1aurMWXMg94KBf.jpg',
                'type'=>'public',

            ],
            [
                'community_id'=>'2',
                'name'=>'Slytherin',
                'image_path'=>'public/group_images/AKOlxP4DXguvHnZw7MlXHUtQWWpRyftPDyWkNR0u.jpg',
                'type'=>'public',
            ],
            [
                'community_id'=>'3',
                'name'=>'Hufflepuff',
                'image_path'=>'public/group_images/docJr6WPg7hsQxW6RDCQdeQZj55en8NsM5XUCaEy.jpg',
                'type'=>'public',
            ],
            [
                'community_id'=>'4',
                'name'=>'Ravenclaw',
                'image_path'=>'public/group_images/Js8NmlOZGwH2Hks9ainEuXovIzYoSFrA5cFcZeyS.jpg',
                'type'=>'public',
            ],
        ]);
    }
}
