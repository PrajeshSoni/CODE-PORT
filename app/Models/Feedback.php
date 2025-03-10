<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public $table = "feedbacks";
    protected $guarded = [];
    protected $with = ['roundups'];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function roundups()
    {
        return $this->hasMany(Roundup::class);
    }
}
