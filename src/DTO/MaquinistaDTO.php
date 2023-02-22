<?php
namespace Renfe\DTO;

class MaquinistaDTO implements \JsonSerializable{

    private ?int $id;

    private string $name;


    /**
     * @param int $id
     * @param string $name
     */
    public function __construct(?int $id, string $name){
        $this->id = $id;
        $this->name = $name;

    }

    public function getId():int{
        return $this->id;
    }

    public function getName():string{
        return $this->name;
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
		];
	}
}
