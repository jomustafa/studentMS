<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'unitCode',
        'credits'
    ];

    public function semesters(){
        return $this->belongsTo(Semester::class);
    }
}
