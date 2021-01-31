<?php


namespace App\Http\Controllers;


use App\Http\Resources\GameResource;
use App\Models\Game;
use Symfony\Component\HttpFoundation\Response;

class GameController extends Controller
{
    public function index()
    {
        return GameResource::collection(Game::all());
    }
}
