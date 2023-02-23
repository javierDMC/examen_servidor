<?php
namespace Daw\services\impl;

use Daw\DTO\DeveloperDTO;
use Daw\DAO\impl\EloquentDeveloperDAO;
use Daw\services\impl\DeveloperServiceImpl;


class DeveloperServiceImpl implements DeveloperService {

    private DeveloperDAO $developerDao;

    public function __construct()
    {
        $this->developerDao = new EloquentDeveloperDAO();
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->developerDao->all();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findById(int $id)
    {
        return $this->developerDao->findById($id);
    }

    public function save(DeveloperDTO $developerDto): bool{
        return $this->developerDao->save($developerDto);
    }
}
