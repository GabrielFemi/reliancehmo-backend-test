<?php

namespace Database\Factories;

use App\Models\Game;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $namesOfgames = ['Call of Duty', 'Mortal Kombat', 'FIFA', 'Just Cause', 'Apex Legend'];
        $game = Arr::random($namesOfgames);
        return [
            'name' => $game,
            'version' => 'Test version',
        ];
    }
}
