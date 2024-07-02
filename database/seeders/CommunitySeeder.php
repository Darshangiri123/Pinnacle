<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
            DB::table('communities')->insert([
            [
                'name' => 'Sports',
                'fa_icon_class' =>  'fa-solid fa-table-tennis-paddle-ball',
                'themecolor'=>'#00FF00',
            ],
            [
                'name' => 'Music',
                'fa_icon_class' =>  'fa-solid fa-music',
                'themecolor'=>'#008080',
            ],
            [
                'name' => 'Hobby Groups',
                'fa_icon_class' =>  'fa-solid fa-user-group',
                'themecolor'=>'#A52A2A',
            ],
            [
                'name' => 'Team Projects',
                'fa_icon_class' =>  'fa-solid fa-list-check',
                'themecolor'=>' #000080',
            ],
            [
                'name' => 'Game Clans',
                'fa_icon_class' =>  'fa-solid fa-gamepad',
                'themecolor'=>' #39FF14',
            ],
            [
                'name' => 'Organizations',
                'fa_icon_class' =>  'fa-solid fa-building',
                'themecolor'=>' #0e380e',
            ],
            [
                'name' => 'Family, Friends',
                'fa_icon_class' =>  'fa-solid fa-house-chimney',
                'themecolor'=>' #FFD700',
            ],
            [
                'name' => 'Custom',
                'fa_icon_class' =>  'fa-solid fa-plus',
                'themecolor'=>' #740AA1',
            ],
        ]);
    }
}
