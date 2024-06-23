<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRoadmaps extends Model
{
    use HasFactory;

    protected $fillable = [
        'roadmap',
        'technology'
    ];

    public function user ()
    {
        return $this->belongsTo(User::class);
    }
}
