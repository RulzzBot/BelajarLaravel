<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /** @use HasFactory<\Database\Factories\SubjectFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function teachers() // merelasikan ke id dari teacher
    {
        // hasMany(), 1 subject memiliki banyak teacher
        return $this->belongsTo(Teachers::class, 'teacher_id');
    }
}
