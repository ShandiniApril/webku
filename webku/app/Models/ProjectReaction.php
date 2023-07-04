<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectReaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'emphatize',
        'react1',
        'define',
        'react2',
        'ideate',
        'react3',
        'prototype',
        'react4',
        'test',
        'react5',
        'reactAll',
    ];
}
