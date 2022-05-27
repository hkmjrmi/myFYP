<?php

namespace App\Models;

use App\Models\Lecturer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Assignment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function lecturers()
    {
        return $this->belongsTo(Lecturer::class);
    }
}
