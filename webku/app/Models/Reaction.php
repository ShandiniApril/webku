<?php

namespace App\Models;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        return $this->belongsTo(Subject::class);
    }
}
