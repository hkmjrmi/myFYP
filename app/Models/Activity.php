<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Supervisor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function students()
    {
        return $this->belongsTo(Student::class);
    }
    
    public function supervisors()
    {
        return $this->belongsTo(Supervisor::class);
    }
}
