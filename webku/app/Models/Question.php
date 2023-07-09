<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'no',
        'image',
        'question',
        'optionImage',
        'a',
        'b',
        'c',
        'd',
        'e',
        'answer',
        'point',
    ];
}
