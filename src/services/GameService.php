<?php
namespace Daw\services;

use Daw\DTO\GameDTO;


interface GameService {

    public function all();

    public function findById(int $id);

    public function save(GameDTO $gameDto): bool;

    public function update(GameDTO $gameDto, int $id): GameDTO;

    public function delete($id): bool;

    public function characterGame(int $id);

}
