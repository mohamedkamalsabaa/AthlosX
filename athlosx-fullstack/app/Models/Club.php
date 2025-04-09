<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = [
        'name', 'founded_date', 'logo', 'city', 'country', 'stadium', 
        'current_coach', 'titles', 'website'
    ];

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function tournaments()
    {
        return $this->belongsToMany(Tournament::class, 'club_tournament');
    }
}