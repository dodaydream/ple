<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            'course_id'=>1,
            'title'=>'Lecture 1',
            'brief'=>'Lecture 1 of course 1',
            'description'=>'',
            'content_type'=>'PAGE',
            'content'=>'
                Lecture 1 of course 1
                Lecture 1 of course 1
                Lecture 1 of course 1
            ',
            'frontpage'=>false,
            'user_id'=>1
        ]);
        DB::table('contents')->insert([
            'course_id'=>1,
            'title'=>'Lecture 1 reference',
            'brief'=>'Lecture 1 of course 1 reference',
            'description'=>'',
            'content_type'=>'URL',
            'content'=>'
                https://www.mpu.edu.mo
            ',
            'frontpage'=>false,
            'user_id'=>1
        ]);
        DB::table('contents')->insert([
            'course_id'=>1,
            'title'=>'Lecture 1',
            'brief'=>'Lecture 1 of course 1',
            'description'=>'',
            'content_type'=>'PAGE',
            'content'=>'
                Lecture 1 of course 1
                Lecture 1 of course 1
                Lecture 1 of course 1
            ',
            'frontpage'=>true,
            'user_id'=>1
        ]);
    }
}