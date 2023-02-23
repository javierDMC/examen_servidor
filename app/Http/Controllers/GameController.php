<?php

namespace App\Http\Controllers;

use App\Http\Requests\GameRequest;
use App\Models\Character;
use App\Models\Game;
use Daw\DTO\GameDTO;
use Daw\services\impl\GameServiceImpl;
use Daw\services\GameService;
use Illuminate\Http\Request;


class GameController extends Controller
{
    private GameService $gameService;

    public function __construct(){
        $this->middleware('auth:sanctum', ['except' => ['index','show']]);
        $this->gameService = new GameServiceImpl();
    }

    public function index()
    {
        $gamees = $this->gameService->all();
        return response()->json($gamees, 200);
    }


    public function store(GameRequest $gameRequest)
    {
        $gameDto = new GameDTO(
            null,
            $gameRequest->title,
            $gameRequest->year,
            $gameRequest->character_id
        );
        return response()->json($this->gameService->save($gameDto));
    }


    public function show(int $id)
    {
        $game = $this->gameService->findById($id);
        return response()->json($game,200);
    }


    public function update(GameRequest $gameRequest, Game $game)
    {
        $game->name = $gameRequest->title;
        $game->cadena = $gameRequest->year;
        $game->developer()->associate(Character::findOrFail($gameRequest->developer_id));
        $game->update();
        return response()->json($game, 200);
    }


    public function destroy(Game $game)
    {
        $game->delete();
    }

    public function getDevelopersGame($id){
        $developersGame = $this->gameService->developersGame($id);
        return response()->json($developersGame,200);
    }
}
