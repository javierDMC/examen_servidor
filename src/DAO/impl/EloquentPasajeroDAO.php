<?php
namespace Renfe\DAO\impl;
use Renfe\DAO\pasajeroDAO;
use Renfe\DTO\pasajeroDTO;
use App\Models\Pasajero;

class EloquentPasajeroDAO implements pasajeroDAO{
    /**
	 * @return mixed
	 */
	public function all() {
        $pasajeros = Pasajero::all();
        $pasajeroDto = array();
        foreach ($pasajeros as $pasajero) {
            $pasajeroDto[] = new pasajeroDTO(
                $pasajero->id,
                $pasajero->name
            );
        }
        return $pasajeroDto;
	}

	/**
	 * @param int $id
	 * @return mixed
	 */
	public function findById(int $id) {
        $pasajero = Pasajero::findOrFail($id);
        $pasajeroDto = new PasajeroDTO(
            $pasajero->id,
            $pasajero->name
        );
        return $pasajeroDto;
	}

    public function save(PasajeroDTO $trainDto): bool {
        $pasajero = new Pasajero();
        $pasajero->name = $trainDto->getName();
        return $pasajero->save();
    }
}
