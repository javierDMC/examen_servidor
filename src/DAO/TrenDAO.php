<?php
namespace Renfe\DAO;
use Renfe\DTO\TrenDTO;

interface TrenDAO {
    public function all();

    public function findById(int $id);

    public function save(TrenDTO $trenDto): bool;

    public function pasajerosTren(int $id);
}
