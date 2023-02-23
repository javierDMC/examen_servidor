<?php
namespace Daw\DAO\impl;

use App\Models\Character;
use Daw\DAO\CharacterDAO;
use Daw\DTO\CharacterDTO;

class EloquentCharacterDAO implements CharacterDAO{
    /**
	 * @return mixed
	 */
	public function all() {
        $characters = Character::all();
        $characterDto = array();
        foreach ($characters as $character) {
            $characterDto[] = new CharacterDTO(
                $character->id,
                $character->name
            );
        }
        return $characterDto;
	}

	/**
	 * @param int $id
	 * @return mixed
	 */
	public function findById(int $id) {
        $character = Character::findOrFail($id);
        $characterDto = new CharacterDTO(
            $character->id,
            $character->name
        );
        return $characterDto;
	}

    public function save(CharacterDTO $characterDto): bool {
        $character = new Character();
        $character->name = $characterDto->getName();
        return $character->save();
    }
}
