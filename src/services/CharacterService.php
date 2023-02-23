<?php
namespace Daw\services;

use Daw\DTO\CharacterDTO;


interface CharacterService {
    public function all();

    public function findById(int $id);

    public function save(CharacterDTO $characterDto): bool;
}
