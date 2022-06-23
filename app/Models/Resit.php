<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Unit;

class Resit extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'unit_id',
        'created_at',
        'updated_at',
    ];

    public function unit(){
        return $this->belongsTo(Unit::class);
    }
}
