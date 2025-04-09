<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = ['name', 'type', 'season', 'rules'];

    public function clubs()
    {
        return $this->belongsToMany(Club::class, 'club_tournament');
    }

    public function matches()
    {
        return $this->hasMany(FootballMatch::class);
    }

    public function statistics()
    {
        return $this->hasMany(Statistics::class);
    }
}