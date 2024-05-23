<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuggestedTechnologies extends Model
{
    use HasFactory;


    public function Roadmaps()
    {
        return $this->hasOne(TechnologyRoadmap::class);
    }
}
