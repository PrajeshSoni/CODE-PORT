<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcourse extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'title',
        'description',
        'duration',
        'document_url',
    ];
    protected $casts = [
        'duration' => 'string', // Changed from 'time' to 'string'
    ];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
