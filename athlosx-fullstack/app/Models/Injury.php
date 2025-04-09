<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Injury extends Model
{
    protected $fillable = ['player_id', 'injury_type', 'start_date', 'end_date', 'notes'];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}