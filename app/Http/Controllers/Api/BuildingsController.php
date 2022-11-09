<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Building;
use App\Http\Resources\BuildingCollection;

class BuildingsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/buildings",
     *      operationId="getBuildings",
     *      tags={"Viloyat haqida"},
     *      summary="Bino Va Inshootlar",
     *      description="Returns list of buildings",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new BuildingCollection(Building::latest()->get());
    }
}
