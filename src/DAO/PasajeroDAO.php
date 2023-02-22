<?php
namespace Renfe\DAO;
use Renfe\DTO\PasajeroDTO;

interface PasajeroDAO {
    public function all();

    public function findById(int $id);

    public function save(PasajeroDTO $pasajeroDto): bool;
}
