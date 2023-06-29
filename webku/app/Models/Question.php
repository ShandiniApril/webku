<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'q_type',
        'q_code',
        'no',
        'q_image',
        'question',
        'a',
        'b',
        'c',
        'd',
        'e',
        'answer',
        'point',
    ];
}
