<?php
namespace Renfe\services\impl;
use Renfe\DAO\impl\EloquentMaquinistaDAO;
use Renfe\DAO\MaquinistaDAO;
use Renfe\DTO\MaquinistaDTO;
use Renfe\services\MaquinistaService;

class MaquinistaServiceImpl implements MaquinistaService {

    private MaquinistaDAO $maquinistaDao;

    public function __construct()
    {
        $this->maquinistaDao = new EloquentMaquinistaDAO();
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->maquinistaDao->all();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findById(int $id)
    {
        return $this->maquinistaDao->findById($id);
    }

    public function save(MaquinistaDTO $MaquinistaDto): bool{
        return $this->maquinistaDao->save($MaquinistaDto);
    }
}
