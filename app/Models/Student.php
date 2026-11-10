<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
    protected $with = ['classroom'];
    protected $fillable = [
        'name',
        'nis',
        'classroom_id',
        'action',
    ];

    public function classroom() // merelasikan ke id dari classroom
    {
        // belongsTo(), 1 student memiliki 1 classroom
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }
}
