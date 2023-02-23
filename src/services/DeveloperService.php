<?php
namespace Daw\services;

use Daw\DTO\DeveloperDTO;


interface DeveloperService {
    public function all();

    public function findById(int $id);

    public function save(DeveloperDTO $developerDto): bool;

}
