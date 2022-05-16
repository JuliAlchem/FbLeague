<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class Game extends Model
{
    use HasFactory;
    protected $fillable = ['team1_id','team1_result','team2_id','team2_result','date'];
    
/*
    public function teams(){
        return $this->hasMany(Team::class);
    }
*/
    public function team1(){
        return $this->hasMany(Team::class, 'team1_id'); 
    }

    public function team2(){
        return $this->hasMany(Team::class, 'team2_id'); 
    }

}
