<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'subject_id',
        'expression',
        'comment',
    ];

    public function subject()
    {
        return $this->hasMany(Subject::class, 'subject_id', 'id');
    }
}
