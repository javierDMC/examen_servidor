<?php
namespace Renfe\DTO;

class PasajeroTrenDTO implements \JsonSerializable{

    private ?int $idTren;

    private int $idPasajero;

    private string $namePasajero;

    /**
     * @param int $idTren
     * @param int $idPasajero
     * @param int $namePasajero
     */
    public function __construct(?int $idTren, int $idPasajero, string $namePasajero){
        $this->idTren = $idTren;
        $this->idPasajero = $idPasajero;
        $this->namePasajero = $namePasajero;
    }

    public function getIdTren():int{
        return $this->idTren;
    }

    public function getIdPasajero():int{
        return $this->idPasajero;
    }

    public function getNamePasajero():string{
        return $this->namePasajero;
    }

    /**
	 * Specify data which should be serialized to JSON
	 * Serializes the object to a value that can be serialized natively by json_encode().
	 * @return mixed Returns data which can be serialized by json_encode(), which is a value of any type other than a resource .
	 */
	public function jsonSerialize() {
        return [
			'idTren' => $this->idTren,
			'idPasajero' => $this->idPasajero,
            'namePasajero' => $this->namePasajero
		];
	}
}
