<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;
    public $incrementing = false;

    public function symptoms()
    {
        return $this->belongsToMany(Symptom::class);
    }
}