<?php

namespace Renfe\services;

use Renfe\DTO\TrenDTO;

interface TrenService {

    public function all();

    public function findById(int $id);

    public function save(TrenDTO $trenDto): bool;

    public function pasajerosTren(int $id);
}
