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
        Course::create(['name'=>' Medicine and Allied Health Science']);
        Course::create(['name'=>'Education Programs - B.Ed., M.Ed']);
        Course::create(['name'=>'Civil Services: Scholarships for students pursuing civil services courses']);
        Course::create(['name'=>'Economics and Commerce']);
        Course::create(['name'=>'Political science']);
        Course::create(['name'=>'History']);
        Course::create(['name'=>'Humanities']);
        Course::create(['name'=>'Artificial Intelligence (AI) and Neural Networks']);
        Course::create(['name'=>'Data Science']);
        Course::create(['name'=>'Design thinking & Innovation']);
        Course::create(['name'=>'Research & Book Publishing']);
        Course::create(['name'=>'Budgeting and financial planning']);
        Course::create(['name'=>'LLB / LLM']);
        Course::create(['name'=>'Journalism & Mass Communication']);
        Course::create(['name'=>'Media Management & Digital Media']);
        Course::create(['name'=>'Script Writing & Short Film Making']);
        Course::create(['name'=>'Leadership & Management']);
        Course::create(['name'=>'Children Management & Development ']);

    }
}

