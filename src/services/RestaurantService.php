<?php
namespace FastFood\services;

use FastFood\DTO\RestaurantDTO;

interface RestaurantService {

    public function all();

    public function findById(int $id);

    public function save(RestaurantDTO $restaurantDto): bool;

    public function update(RestaurantDTO $restaurantDTO, int $id): RestaurantDTO;

    public function delete($id): bool;

    public function clientesRestaurante(int $id);

}
