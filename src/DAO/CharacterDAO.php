<?php
namespace Daw\DAO;

use Daw\DTO\CharacterDTO;


interface CharacterDAO {
    public function all();

    public function findById(int $id);

    public function save(CharacterDTO $characterDto): bool;
}
