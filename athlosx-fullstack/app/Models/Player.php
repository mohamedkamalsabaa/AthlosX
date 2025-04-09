<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'full_name', 'birth_date', 'nationality', 'number', 'position', 'height', 'weight',
        'preferred_foot', 'matches_played', 'goals', 'assists', 'photo', 'join_date', 
        'status', 'contract_start', 'contract_end', 'team_id'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function matches()
    {
        return $this->belongsToMany(FootballMatch::class, 'football_match_player')->withPivot('goals', 'minute');
    }
}