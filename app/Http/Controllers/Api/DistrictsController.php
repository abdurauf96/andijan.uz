<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DistrictResource;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/districts/{id}",
     *      operationId="getOneDistrict",
     *      tags={"Districts"},
     *      summary="Get one district by ID",
     *      description="Returns one district",
     *      @OA\Parameter(
     *          name="id",
     *          required=true,
     *          description="District ID",
     *          in="path",
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="if district not found",
     *       )
     *     )
     */
    public function getOne($id)
    {
        $district=District::find($id);
        if(!$district){
            return response()->json('District not found', 404);
        }
        return new DistrictResource($district);
    }
}
