<?php

namespace App\Exports;

use App\Models\Supervisor;
use Maatwebsite\Excel\Concerns\FromCollection;

class SupervisorExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Supervisor::all();
    }
}
