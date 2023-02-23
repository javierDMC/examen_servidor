<?php
namespace Daw\DAO\impl;

use App\Models\Game;
use Daw\DAO\GameDAO;
use Daw\DTO\GameDTO;
use Daw\DAO\impl\EloquentGameDAO;



class EloquentGameDAO implements GameDAO{

	public function all() {
        $games = Game::all();
        $gameDto = array();
        foreach ($games as $game) {
            $gameDto[] = new GameDTO(
                $game->id,
                $game->title,
                $game->year,
                $game->developer_id
            );
        }
        return $gameDto;
	}

	public function findById(int $id) {
        $game = Game::findOrFail($id);
        $gameDto = new GameDTO(
            $game->id,
            $game->title,
            $game->year,
            $game->developer_id
        );
        return $gameDto;
	}

    public function save(GameDTO $gameDto): bool {
        $game = new Game();
        $game->title = $gameDto->getTitle();
        $game->year = $gameDto->getyear();
        $game->character()->associate(Character::findOrFail($gameDto->getCharacter_id()));
        return $game->save();
    }

    public function update(GameDTO $gameDto, $id): GameDTO{
        $game = Game::findOrFail($id);
        $game->title = $gameDto->getTitle();
        $game->year = $gameDto->getYear();
        $game->save();
        return new GameDTO($game->id, $game->title, $game->year, $game->character_id);

    }

    public function delete($id):bool {
        return 0;
    }

    public function charactersGame(int $id){
        $games = Game::findOrFail($id)->characters;
        $resultado = [];
        foreach ($games as $character) {
            $resultado[] = new CharacterDTO(
                $character->id,
                $character->name
            );
        }
        return $resultado;
    }

}
