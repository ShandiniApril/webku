<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultQuizes extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'user_id',
        'no1',
        'no2',
        'no3',
        'no4',
        'no5',
        'score'
    ];
}
