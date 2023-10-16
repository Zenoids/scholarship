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
        $courses=[ 'Medicine and Allied Health Science',
        'Education Programs - B.Ed., M.Ed',
        'Civil Services: Scholarships for students pursuing civil services courses',
        'Economics and Commerce',
        'Political science',
        'History',
        'Humanities',
        'Artificial Intelligence (AI) and Neural Networks',
        'Data Science',
        'Design thinking & Innovation',
        'Research & Book Publishing',
        'Budgeting and financial planning',
        'LLB / LLM',
        'Journalism & Mass Communication',
        'Media Management & Digital Media',
        'Script Writing & Short Film Making',
        'Leadership & Management',
        'Children Management & Development'];

        foreach($courses as $course){
        Course::create(['name'=>$course]);
        }

    }
}

