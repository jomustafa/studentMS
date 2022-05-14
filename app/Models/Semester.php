<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Student;

class Semester extends Model
{
    use HasFactory;
    protected $fillable = [
        'semesterPeriod',
        'year',
        'academicLevel'
    ];

    public function students(){
        return $this->hasMany(Student::class);
    }
}
