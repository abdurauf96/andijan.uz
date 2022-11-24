<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CarPriceCollection;
use App\Models\CarPrice;
use Illuminate\Http\Request;

class CarPricesController extends Controller
{
    /**
     * @OA\Get(
     *      path="/car-prices",
     *      operationId="getCarPrices",
     *      tags={"Ma'lumotnoma"},
     *      summary="GM Mashina narxlari",
     *      description="Get list of car-prices",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new CarPriceCollection(CarPrice::all());
    }
}
