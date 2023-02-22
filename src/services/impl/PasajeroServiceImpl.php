<?php
namespace Renfe\services\impl;
use Renfe\DAO\impl\EloquentPasajeroDAO;
use Renfe\DAO\PasajeroDAO;
use Renfe\DTO\PasajeroDTO;
use Renfe\services\PasajeroService;

class PasajeroServiceImpl implements PasajeroService {

    private PasajeroDAO $pasajeroDao;

    public function __construct()
    {
        $this->pasajeroDao = new EloquentPasajeroDAO();
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->pasajeroDao->all();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findById(int $id)
    {
        return $this->pasajeroDao->findById($id);
    }

    public function save(PasajeroDTO $pasajeroDto): bool{
        return $this->pasajeroDao->save($pasajeroDto);
    }
}
