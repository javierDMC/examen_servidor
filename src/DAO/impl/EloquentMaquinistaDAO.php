<?php
namespace Renfe\DAO\impl;
use Renfe\DAO\maquinistaDAO;
use Renfe\DTO\maquinistaDTO;
use App\Models\Maquinista;

class EloquentMaquinistaDAO implements MaquinistaDAO{
    /**
	 * @return mixed
	 */
	public function all() {
        $maquinistas = Maquinista::all();
        $maquinistaDto = array();
        foreach ($maquinistas as $maquinista) {
            $maquinistaDto[] = new MaquinistaDTO(
                $maquinista->id,
                $maquinista->name
            );
        }
        return $maquinistaDto;
	}

	/**
	 * @param int $id
	 * @return mixed
	 */
	public function findById(int $id) {
        $maquinista = Maquinista::findOrFail($id);
        $maquinistaDto = new MaquinistaDTO(
            $maquinista->id,
            $maquinista->name
        );
        return $maquinistaDto;
	}

    public function save(MaquinistaDTO $trainDto): bool {
        $maquinista = new Maquinista();
        $maquinista->name = $trainDto->getName();
        return $maquinista->save();
    }
}
