<?php

namespace Database\Seeders;

use App\Models\Scholarship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScholarshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Scholarship::create(['name'=>'Scholarship: October 2023',	'description'=>'Started october 2023'		,'status'=>false]);
        Scholarship::create(['name'=>'Scholarship: July 2024',	'description'=>'Started July 15 2024'		,'status'=>false]);

    }
}
