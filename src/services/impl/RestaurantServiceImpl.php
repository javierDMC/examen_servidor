<?php
namespace FastFood\services\impl;
use FastFood\DAO\impl\EloquentRestaurantDAO;
use FastFood\DAO\RestaurantDAO;
use FastFood\DTO\RestaurantDTO;
use FastFood\services\RestaurantService;


class RestaurantServiceImpl implements RestaurantService {

    private RestaurantDAO $restaurantDao;

    public function __construct()
    {
        $this->restaurantDao = new EloquentRestaurantDAO();
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->restaurantDao->all();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findById(int $id)
    {
        return $this->restaurantDao->findById($id);
    }

    public function save(RestaurantDTO $restaurant): bool{
        return $this->restaurantDao->save($restaurant);
    }

    public function update(RestaurantDTO $restaurant, int $id): RestaurantDTO{
        return $this->restaurantDao->update($restaurant, $id);
    }

    public function delete($id): bool{
        return $this->delete($id);
    }

    public function clientesRestaurante(int $id){
        return $this->restaurantDao->clientesRestaurante($id);
    }
}
