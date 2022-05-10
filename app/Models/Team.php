<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

     //Uno a muchos

     public function players(){
        return $this->hasMany(Player::class);
    }
    
        // Muchos a muchos
    
        public function games(){
           return $this->belongsToMany(Game::class);
        }
}
