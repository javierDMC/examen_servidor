<?php
namespace Daw\DAO;

use Daw\DTO\GameDTO;


interface GameDAO {
    public function all();

    public function findById(int $id);

    public function save(GameDTO $gameDto): bool;

    public function update(GameDTO $gameDTO, int $id): GameDTO;

    public function delete($id): bool;

    public function charactersGame(int $id);
}
