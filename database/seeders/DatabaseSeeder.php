<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);

        Team::factory(10)->create();
        Player::factory(45)->create();
        Game::factory(15)->create();

    }
}
