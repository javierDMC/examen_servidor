<?php
namespace Daw\DTO;

class GameDTO implements \JsonSerializable{

    private ?int $id;

    private string $title;

    private int $year;

    private int $developer_id;

    /**
     * @param int $id
     * @param string $title
     * @param int $year
     * @param int $developer_id
     */
    public function __construct(?int $id, string $title, int $year, int $developer_id){
        $this->id = $id;
        $this->title = $title;
        $this->year = $year;
        $this->developer_id = $developer_id;
    }

    public function getId():int{
        return $this->id;
    }

    public function getTitle():string{
        return $this->title;
    }

    public function getYear():int{
        return $this->year;
    }

    public function getDeveloper_id(){
        return $this->developer_id;
    }

    /**
	 * Specify data which should be serialized to JSON
	 * Serializes the object to a value that can be serialized natively by json_encode().
	 * @return mixed Returns data which can be serialized by json_encode(), which is a value of any type other than a resource .
	 */
	public function jsonSerialize() {
        return [
			'id' => $this->id,
			'title' => $this->title,
			'year' => $this->year,
            'developer_id' => $this->developer_id
		];
	}
}
