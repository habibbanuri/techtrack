<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnologyRoadmap extends Model
{
    use HasFactory;

    public function technologies()
    {
        return $this->belongsTo(SuggestedTechnologies::class);
    }
}
