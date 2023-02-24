<?php
namespace Daw\services\impl;

use Daw\DAO\GameDAO;
use Daw\DTO\GameDTO;
use Daw\services\GameService;
use Daw\DAO\impl\EloquentGameDAO;



class GameServiceImpl implements GameService {

    private GameDAO $gameDao;

    public function __construct()
    {
        $this->gameDao = new EloquentGameDAO();
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->gameDao->all();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findById(int $id)
    {
        return $this->gameDao->findById($id);
    }

    public function save(GameDTO $game): bool{
        return $this->gameDao->save($game);
    }

    public function update(GameDTO $game, int $id): GameDTO{
        return $this->gameDao->update($game, $id);
    }

    public function delete($id): bool{
        return $this->delete($id);
    }

    public function characterGame(int $id){
        return $this->gameDao->CharactersGame($id);
    }
}
