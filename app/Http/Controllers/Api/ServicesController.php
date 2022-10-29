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
     *      path="/main-services",
     *      operationId="getServices",
     *      tags={"Services"},
     *      summary="Get list of main services",
     *      description="Returns list of main services",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     * )
     */
    public function getAllMain()
    {
        $services=Service::whereType(1)->latest()->get();
        return ServiceResource::collection($services);
    }

    /**
     * @OA\Get(
     *      path="/services/{slug}",
     *      operationId="getOneService",
     *      tags={"Services"},
     *      summary="Get one service by SLug",
     *      description="Returns one service",
     *      @OA\Parameter(
     *          name="slug",
     *          required=true,
     *          description="Service Slug",
     *          in="path",
     *          @OA\Schema(type="string")
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
    public function getOne($slug)
    {
        $service=Service::whereSlug($slug)->first();
        return $service ? new ServiceResource($service) : response()->json('Service not found', 404);
    }

    /**
     * @OA\Get(
     *      path="/secondary-services",
     *      operationId="getSecondaryServices",
     *      tags={"Services"},
     *      summary="Get list of secondary services",
     *      description="Returns list of secondary services",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     * )
     */
    public function getAllSecondary()
    {
        $services=Service::whereType(2)->latest()->get();
        return ServiceResource::collection($services);
    }
}
