<?php
namespace Renfe\services;

use Renfe\DTO\MaquinistaDTO;

interface MaquinistaService {
    public function all();

    public function findById(int $id);

    public function save(MaquinistaDTO $maquinistaDto): bool;

}
