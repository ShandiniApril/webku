<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'no',
        'image',
        'question',
        'optionImage',
        'optionA',
        'optionB',
        'optionC',
        'optionD',
        'optionE',
        'answer',
    ];
}
