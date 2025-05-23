<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $fillable = [
        'f_name',
        'user_id',
        'message',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
