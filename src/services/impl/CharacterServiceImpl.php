<?php
namespace Daw\services\impl;

use Daw\DTO\CharacterDTO;
use Daw\DAO\impl\EloquentCharacterDAO;
use Daw\services\impl\CharacterServiceImpl;


class CharacterServiceImpl implements CharacterService {

    private CharacterDAO $characterDao;

    public function __construct()
    {
        $this->characterDao = new EloquentCharacterDAO();
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->characterDao->all();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findById(int $id)
    {
        return $this->characterDao->findById($id);
    }

    public function save(CharacterDTO $characterDto): bool{
        return $this->characterDao->save($characterDto);
    }
}
