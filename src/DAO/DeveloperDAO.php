<?php
namespace Daw\DAO;

use Daw\DTO\DeveloperDTO;


interface developerDAO {
    public function all();

    public function findById(int $id);

    public function save(DeveloperDTO $developerDto): bool;
}
