<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ServiceResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
class ServicesController extends Controller
{
    /**
     * @OA\Get(
     *      path="/services",
     *      operationId="getServices",
     *      tags={"Services"},
     *      summary="Get list of services",
     *      description="Returns list of services",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     * )
     */
    public function getAll()
    {
        return ServiceResource::collection(Service::all());
    }

    /**
     * @OA\Get(
     *      path="/services/{id}",
     *      operationId="getOneService",
     *      tags={"Services"},
     *      summary="Get one service by ID",
     *      description="Returns one service",
     *      @OA\Parameter(
     *          name="id",
     *          required=true,
     *          description="Service ID",
     *          in="path",
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="if service not found",
     *       )
     *     )
     */
    public function getOne($id)
    {
        $service=Service::find($id);
        if(!$service){
            return response()->json('Service not found', 404);
        }
        return new ServiceResource($service);
    }
}
