<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz1 extends Model
{
    use HasFactory;

    protected $table = 'quiz1';
    protected $fillable = ['user_id', 'no1', 'no2', 'no3', 'no4', 'no5', 'score'];
}
