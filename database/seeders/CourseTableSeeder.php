<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Course::create([
            'name' => 'Artificial Intelligence'
        ]);

        Course::create([
            'name' => 'Medical'
        ]);

        Course::create([
            'name' => 'Engineering'
        ]);

        Course::create([
            'name' => 'Management'
        ]);
    }
}

