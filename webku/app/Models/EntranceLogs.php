<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntranceLogs extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'status',
        'loged_in_at',
        'loged_out_at',
        'duration'
    ];
}
