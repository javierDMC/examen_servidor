<?php

namespace App\Http\Controllers;

use App\Http\Requests\RestaurantRequest;
use App\Models\Client;
use App\Models\Restaurant;
use FastFood\DTO\RestaurantDTO;
use FastFood\services\impl\RestaurantServiceImpl;
use FastFood\services\RestaurantService;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    private RestaurantService $restaurantService;

    public function __construct(){
        $this->middleware('auth:sanctum', ['except' => ['index']]);
        $this->restaurantService = new RestaurantServiceImpl();
    }
    public function index()
    {
        $restaurantes = $this->restaurantService->all();
        return response()->json($restaurantes, 200);
    }


    public function store(RestaurantRequest $restaurantRequest)
    {
        $restaurantDto = new RestaurantDTO(
            null,
            $restaurantRequest->name,
            $restaurantRequest->cadena,
            $restaurantRequest->client_id
        );
        return response()->json($this->restaurantService->save($restaurantDto));
    }


    public function show(int $id)
    {
        $restaurant = $this->restaurantService->findById($id);
        return response()->json($restaurant,200);
    }


    public function update(RestaurantRequest $restaurantRequest, Restaurant $restaurant)
    {
        $restaurant->name = $restaurantRequest->name;
        $restaurant->cadena = $restaurantRequest->cadena;
        $restaurant->maquinista()->associate(Client::findOrFail($restaurantRequest->maquinista_id));
        $restaurant->update();
        return response()->json($restaurant, 200);
    }


    public function destroy(restaurant $restaurant)
    {
        $restaurant->delete();
    }

    public function getClientesRestaurante($id){
        $clientsrestaurant = $this->restaurantService->clientesRestaurante($id);
        return response()->json($clientsrestaurant,200);
    }
}
