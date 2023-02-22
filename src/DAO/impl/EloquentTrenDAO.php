<?php
namespace Renfe\DAO\impl;
use Renfe\DAO\TrenDAO;
use Renfe\DTO\PasajeroDTO;
use Renfe\DTO\PasajeroTrenDTO;
use Renfe\DTO\TrenDTO;
use App\Models\Maquinista;
use App\Models\Tren;

class EloquentTrenDAO implements TrenDAO{
    /**
	 * @return mixed
	 */
	public function all() {
        $trenes = Tren::all();
        $trenDto = array();
        foreach ($trenes as $tren) {
            $trenDto[] = new TrenDTO(
                $tren->id,
                $tren->name,
                $tren->number,
                $tren->model,
                $tren->maquinista_id
            );
        }
        return $trenDto;
	}

	/**
	 * @param int $id
	 * @return mixed
	 */
	public function findById(int $id) {
        $tren = Tren::findOrFail($id);
        $trenDto = new TrenDTO(
            $tren->id,
            $tren->name,
            $tren->number,
            $tren->model,
            $tren->maquinista_id
        );
        return $trenDto;
	}

    public function save(TrenDTO $trenDto): bool {
        $tren = new Tren();
        $tren->name = $trenDto->getName();
        $tren->number = $trenDto->getNumber();
        $tren->model = $trenDto->getModel();
        $tren->maquinista()->associate(Maquinista::findOrFail($trenDto->getMaquinista_id()));
        return $tren->save();
    }

    public function pasajerosTren(int $id){
        $trenes = Tren::findOrFail($id)->pasajeros;
        $resultado = [];
        foreach ($trenes as $pasajero) {
            $resultado[] = new PasajeroDTO(
                $pasajero->id,
                $pasajero->name
            );
        }
        return $resultado;
    }
}
