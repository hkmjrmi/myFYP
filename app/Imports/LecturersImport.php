<?php

namespace App\Imports;

use App\Models\Lecturer;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;

class LecturersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model
    */
    public function model(array $row)
    {
        return new Lecturer([
            'id' => $row[0],
            'name' => $row[1],
            'lecturer_id' => $row[2],
            'email'=> $row[3],
            'phone' => $row[4],
            'office' => $row[5],
            'password' => Hash::make($row[3]),
        ]);
    }
    
}
