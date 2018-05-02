<?php

use Illuminate\Database\Seeder;
use App\Course;
use App\Subject;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // model factories (ordenadamente segun las entidades)
        factory(Course::class, 10)->create();
        factory(Subject::class, 50)->create();
    }
}
