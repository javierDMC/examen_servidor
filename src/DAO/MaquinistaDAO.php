<?php
namespace Renfe\DAO;
use Renfe\DTO\MaquinistaDTO;

interface MaquinistaDAO {
    public function all();

    public function findById(int $id);

    public function save(MaquinistaDTO $maquinistaDto): bool;
}
