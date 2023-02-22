<?php
namespace FastFood\DTO;

class RestaurantDTO implements \JsonSerializable{

    private ?int $id;

    private string $name;

    private string $cadena;

    private int $client_id;

    /**
     * @param int $id
     * @param string $name
     * @param string $cadena
     * @param int $client_id
     */
    public function __construct(?int $id, string $name, string $cadena, int $client_id){
        $this->id = $id;
        $this->name = $name;
        $this->cadena = $cadena;
        $this->client_id = $client_id;
    }

    public function getId():int{
        return $this->id;
    }

    public function getName():string{
        return $this->name;
    }

    public function getCadena():string{
        return $this->cadena;
    }

    public function getClient_id(){
        return $this->client_id;
    }

    /**
	 * Specify data which should be serialized to JSON
	 * Serializes the object to a value that can be serialized natively by json_encode().
	 * @return mixed Returns data which can be serialized by json_encode(), which is a value of any type other than a resource .
	 */
	public function jsonSerialize() {
        return [
			'id' => $this->id,
			'name' => $this->name,
			'cadena' => $this->cadena,
            'client_id' => $this->client_id
		];
	}
}
