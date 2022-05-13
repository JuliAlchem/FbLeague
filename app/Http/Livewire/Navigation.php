<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Game;

class Navigation extends Component
{
    public function render()
    {
        $games = Game::all();
        return view('livewire.navigation');

    }
}
