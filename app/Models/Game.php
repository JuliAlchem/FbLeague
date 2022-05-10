<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    // Muchos a muchos

    public function teams(){
        return $this->belongsToMany(Team::class);
    }
}
