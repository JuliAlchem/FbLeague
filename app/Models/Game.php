<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class Game extends Model
{
    use HasFactory;
    protected $fillable = ['team1_id','team1_result','team2_id','team2_result','date'];
    // Muchos a muchos

    public function team(){
        return $this->belongsTo(Team::class);
    }
}
