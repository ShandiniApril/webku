<?php

namespace App\Models;

use App\Models\Reaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'highlight',
        'video',
        'pdf',
    ];

    public function reaction()
    {
        return $this->belongsTo(Reaction::class);
    }
}
