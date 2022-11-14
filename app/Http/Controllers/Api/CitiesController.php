<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Models\City;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    /**
     * @OA\Get(
     *      path="/cities",
     *      operationId="getCities",
     *      tags={"Tuman va shaharlar"},
     *      summary="Tuman va shaharlar ",
     *      description="Returns list of cities",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return CityResource::collection(City::latest()->get());
    }

    /**
     * @OA\Get(
     *      path="/cities/{slug}",
     *      operationId="getOneCity",
     *      tags={"Tuman va shaharlar"},
     *      summary="Tumanlar Slug bo'yicha",
     *      description="Returns one city",
     *      @OA\Parameter(
     *          name="slug",
     *          required=true,
     *          description="City Slug",
     *          in="path",
     *          @OA\Schema(type="string")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="if city not found",
     *       )
     *     )
     */
    public function getOne($slug)
    {
        $city=City::whereSlug($slug)->first();
        if(!$city){
            return response()->json('City not found', 404);
        }
        return new CityResource($city);
    }
}
