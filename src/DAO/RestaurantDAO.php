<?php
namespace FastFood\DAO;

use FastFood\DTO\RestaurantDTO;

interface RestaurantDAO {
    public function all();

    public function findById(int $id);

    public function save(RestaurantDTO $restaurantDto): bool;

    public function update(RestaurantDTO $restaurantDTO, int $id): RestaurantDTO;

    public function delete($id): bool;

    public function clientesRestaurante(int $id);
}
