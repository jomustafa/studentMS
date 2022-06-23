<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Semester;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'semester_id',
        'name',
        'credits',
        'created_at',
        'unitCode',
        'updated_at',
        'lecturer'
    ];

    public function semester(){
        return $this->belongsTo(Semester::class);
    }

    public function resit(){
        return $this->hasMany(Resit::class);
    }
}
