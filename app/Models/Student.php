<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Semester;

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
        'part_timeStudent',
        'created_at',
        'updated_at'
    ];

    public function semester(){
        return $this->belongsTo(Semester::class);
    }
}
