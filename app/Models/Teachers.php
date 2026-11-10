<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;
    protected $with = ['subject'];
    protected $fillable = [
        'name',
        'niy',
        'subject_id',
        'start_date',
    ];
    // belongsTo
    public function subject() // merelasikan ke id dari subject
    {
        return $this->hasOne(Subject::class, 'teacher_id');
    }
}
