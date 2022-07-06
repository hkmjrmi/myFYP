<?php

namespace App\Imports;

use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model
    */
    public function model(array $row)
    {
    
        return new Student([
            'id' => $row[0],
            'student_id' => $row[1],
            'name' => $row[2],
            'email'=> $row[3],
            'password' => Hash::make($row[4]),
            'supervisor_id' => $row[5],
            'lecturer_id' => $row[6],
            'project' => $row[7],
            'chapter1_url' => $row[8],
            'chapter2_url' => $row[9],
            'chapter3_url' => $row[10],
            'chapter4_url' => $row[11],
            'chapter5_url' => $row[12],
        ]);
    }
}
