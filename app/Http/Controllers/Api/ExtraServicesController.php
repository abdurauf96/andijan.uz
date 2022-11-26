<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExtraService;
use App\Http\Resources\ExtraServiceResource;

class ExtraServicesController extends Controller
{
    /**
     * @OA\Get(
     *      path="/extra-services",
     *      operationId="getExtraServices",
     *      tags={"Interaktiv"},
     *      summary="Qo'shimcha xizmatlari",
     *      description="Returns list of extra-services",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return ExtraServiceResource::collection(ExtraService::all());
    }


    /**
     * @OA\Get(
     *      path="/extra-services/{slug}",
     *      operationId="getOneExtraServices",
     *      tags={"Interaktiv"},
     *      summary="Get one extra-service by slug",
     *      description="Returns one extra-service ",
     *      @OA\Parameter(
     *          name="slug",
     *          required=true,
     *          description="extra-service Slug",
     *          in="path",
     *          @OA\Schema(type="string")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="if extra-service not found",
     *       )
     *     )
     */
    public function getOne($slug)
    {
        $extraService=ExtraService::whereSlug($slug)->first();
        return $extraService ? new ExtraServiceResource($extraService) : response()->json('extraService not found', 404);
    }
}
