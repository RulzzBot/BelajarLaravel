<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    // protected $with = ['classroom'];
    protected $fillable = [
        'name',
        'major',
    ];
    public function students() // merelasikan ke id dari student
    {
        // hasMany(), 1 classroom memiliki banyak student
        return $this->hasMany(Student::class, 'classroom_id');
    }
}
