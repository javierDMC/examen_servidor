<?php
namespace Renfe\DTO;

class TrenDTO implements \JsonSerializable{

    private ?int $id;

    private string $name;

    private int $number;

    private int $model;

    private int $maquinista_id;

    /**
     * @param int $id
     * @param string $name
     * @param int $number
     * @param int $model
     * @param int $maquinista_id
     */
    public function __construct(?int $id, string $name, int $number, int $model, int $maquinista_id){
        $this->id = $id;
        $this->name = $name;
        $this->number = $number;
        $this->model = $model;
        $this->maquinista_id = $maquinista_id;
    }

    public function getId():int{
        return $this->id;
    }

    public function getName():string{
        return $this->name;
    }

    public function getNumber():int{
        return $this->number;
    }

    public function getModel():int{
        return $this->model;
    }

    public function getMaquinista_id(){
        return $this->maquinista_id;
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
			'number' => $this->number,
			'model' => $this->model,
            'maquinista_id' => $this->maquinista_id
		];
	}
}
