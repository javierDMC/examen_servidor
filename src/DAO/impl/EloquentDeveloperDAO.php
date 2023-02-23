<?php
namespace Daw\DAO\impl;

use App\Models\Developer;
use Daw\DAO\DeveloperDAO;
use Daw\DTO\DeveloperDTO;


class EloquentDeveloperDAO implements DeveloperDAO{
    /**
	 * @return mixed
	 */
	public function all() {
        $developers = Developer::all();
        $developerDto = array();
        foreach ($developers as $developer) {
            $developerDto[] = new DeveloperDTO(
                $developer->id,
                $developer->name
            );
        }
        return $developerDto;
	}

	/**
	 * @param int $id
	 * @return mixed
	 */
	public function findById(int $id) {
        $developer = Developer::findOrFail($id);
        $developerDto = new DeveloperDTO(
            $developer->id,
            $developer->name
        );
        return $developerDto;
	}

    public function save(DeveloperDTO $developerDto): bool {
        $developer = new Developer();
        $developer->name = $developerDto->getName();
        return $developer->save();
    }
}
