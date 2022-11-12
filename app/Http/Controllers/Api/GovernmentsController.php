<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Government;
use App\Http\Resources\GovernmentResource;

class GovernmentsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/governments",
     *      operationId="getGovernments",
     *      tags={"Viloyat haqida"},
     *      summary="Hukumat",
     *      description="Returns list of governments",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return GovernmentResource::collection(Government::latest()->get());
    }

    /**
     * @OA\Get(
     *      path="/governments/{slug}",
     *      operationId="getOneGovernment",
     *      tags={"Viloyat haqida"},
     *      summary="hukumat slug bo'yicha",
     *      description="Returns one government",
     *      @OA\Parameter(
     *          name="slug",
     *          required=true,
     *          description="government SLUG",
     *          in="path",
     *          @OA\Schema(type="string")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="if government not found",
     *       )
     *     )
     */
    public function getOne($slug)
    {
        $government=Government::whereSlug($slug)->first();
        if(!$government){
            return response()->json('Government not found', 404);
        }
        return new GovernmentResource($government);
    }
}
