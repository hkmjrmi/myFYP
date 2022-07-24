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
        // \App\Models\Supervisor::factory(10)->create();  
        // \App\Models\Lecturer::factory(1)->create();
        // \App\Models\Student::factory(10)->create();

    }

}
