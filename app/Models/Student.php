<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'semester_id',
        'name',
        'lastName',
        'age',
        'gender',
        'levelOfStudies',
        'yearOfStudies',
        'scholarship',
        'part_timeStudent'
    ];

    public function semester(){
        return $this->belongsTo(Semester::class);
    }
}
