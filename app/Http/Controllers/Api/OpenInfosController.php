<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OpenInfoResource;
use Illuminate\Http\Request;
use App\Models\OpenInfo;
use App\Http\Resources\OpenInfoCollection;

class OpenInfosController extends Controller
{
    /**
     * @OA\Get(
     *      path="/open-infos",
     *      operationId="getOPenInfos",
     *      tags={"Viloyat haqida"},
     *      summary="Ochiq malumotlar",
     *      description="Returns list of open infos",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new OpenInfoCollection(OpenInfo::latest()->paginate(10));
    }

    /**
     * @OA\Get(
     *      path="/open-infos/{slug}",
     *      operationId="getOneOpenInfo",
     *      tags={"Viloyat haqida"},
     *      summary="Ochiq malumotlar SLUG bo'yicha",
     *      description="Returns one open-infos",
     *      @OA\Parameter(
     *          name="slug",
     *          required=true,
     *          description="ochiq malumot Slug",
     *          in="path",
     *          @OA\Schema(type="string")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="if open-info not found",
     *       )
     *     )
     */
    public function getOne($slug)
    {
        $openInfo=OpenInfo::whereSlug($slug)->first();

        return $openInfo ? new OpenInfoResource($openInfo) : response()->json('Open Info not found', 404);


    }
}
