<?php
namespace Renfe\services\impl;
use Renfe\DAO\impl\EloquentTrenDAO;
use Renfe\DAO\TrenDAO;
use Renfe\DTO\TrenDTO;
use Renfe\services\TrenService;

class TrenServiceImpl implements TrenService {

    private TrenDAO $trenDao;

    public function __construct()
    {
        $this->trenDao = new EloquentTrenDAO();
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->trenDao->all();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findById(int $id)
    {
        return $this->trenDao->findById($id);
    }

    public function save(TrenDTO $trenDto): bool{
        return $this->trenDao->save($trenDto);
    }

    public function pasajerosTren(int $id){
        return $this->trenDao->pasajerosTren($id);
    }
}
