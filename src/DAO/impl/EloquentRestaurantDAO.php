<?php
namespace FastFood\DAO\impl;
use App\Models\Client;
use App\Models\Restaurant;
use FastFood\DAO\RestaurantDAO;
use FastFood\DTO\ClientDTO;
use FastFood\DTO\RestaurantDTO;
use Renfe\DTO\PasajeroDTO;


class EloquentRestaurantDAO implements RestaurantDAO{

	public function all() {
        $restaurants = Restaurant::all();
        $restaurantDto = array();
        foreach ($restaurants as $restaurant) {
            $restaurantDto[] = new RestaurantDTO(
                $restaurant->id,
                $restaurant->name,
                $restaurant->cadena,
                $restaurant->client_id
            );
        }
        return $restaurantDto;
	}

	public function findById(int $id) {
        $restaurant = restaurant::findOrFail($id);
        $restaurantDto = new RestaurantDTO(
            $restaurant->id,
            $restaurant->name,
            $restaurant->cadena,
            $restaurant->client_id
        );
        return $restaurantDto;
	}

    public function save(RestaurantDTO $restaurantDto): bool {
        $restaurant = new Restaurant();
        $restaurant->name = $restaurantDto->getName();
        $restaurant->cadena = $restaurantDto->getCadena();
        $restaurant->client()->associate(Client::findOrFail($restaurantDto->getClient_id()));
        return $restaurant->save();
    }

    public function update(RestaurantDTO $restaurantDto, $id): RestaurantDTO{
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->name = $restaurantDto->getName();
        $restaurant->cadena = $restaurantDto->getCadena();
        $restaurant->save();
        return new RestaurantDTO($restaurant->id, $restaurant->name, $restaurant->cadena, $restaurant->client_id);

    }

    public function delete($id):bool {
        return 0;
    }

    public function clientesRestaurante(int $id){
        $restaurants = Restaurant::findOrFail($id)->clients;
        $resultado = [];
        foreach ($restaurants as $client) {
            $resultado[] = new ClientDTO(
                $client->id,
                $client->name
            );
        }
        return $resultado;
    }

}
