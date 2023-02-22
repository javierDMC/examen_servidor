<?php
namespace Renfe\services;

use Renfe\DTO\PasajeroDTO;

interface PasajeroService {
    public function all();

    public function findById(int $id);

    public function save(PasajeroDTO $pasajeroDto): bool;
}
