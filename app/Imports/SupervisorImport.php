<?php

namespace App\Imports;

use App\Models\Supervisor;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class SupervisorImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Supervisor([
            'id' => $row[0],
            'name' => $row[1],
            'supervisor_id' => $row[2],
            'email'=> $row[3],
            'phone' => $row[4],
            'office' => $row[5],
            'password' => Hash::make($row[3]),
        ]);
    }
}
