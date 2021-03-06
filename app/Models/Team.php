<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name','played','won','drawn','lost','points'];

     //Uno a muchos

     public function players(){
        return $this->hasMany(Player::class);
    }
    
        
    
        public function games(){
           return $this->belongsToMany(Game::class);
        }
}
