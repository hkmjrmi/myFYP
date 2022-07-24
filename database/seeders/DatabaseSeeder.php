<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Student;
use App\Models\Lecturer;
use App\Models\Supervisor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin::factory(1)->create();
        //\App\Models\Supervisor::factory(10)->create();
        //\App\Models\Lecturer::factory(1)->create();

        /*Student::create([
            'name' => 'Muhammad Abdul Hakim bin Jurimi',
            'student_id' => '2020872304',
            'email' => '2020872304@student.uitm.edu.my',
            'supervisor_id' => 1,
            'lecturer_id' => 1,
            'project' => 'myFYP Collaborative Platform Using MVC Architecture',
            'chapter1_url' => '',
            'chapter2_url' => '',
            'chapter3_url' => '',
            'chapter4_url' => '',
            'chapter5_url' => '',
            'password' => bcrypt('12345'),
        ]);
        */
    }

}
