<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tourism;
use App\Http\Resources\TourismCollection;
use App\Http\Resources\TourismResource;

class TourismsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/tourisms",
     *      operationId="getTourisms",
     *      tags={"Viloyat haqida"},
     *      summary="Turizm",
     *      description="Returns list of tourisms",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new TourismCollection(Tourism::latest()->paginate(10));
    }

    /**
     * @OA\Get(
     *      path="/tourisms/{slug}",
     *      operationId="getOneTourism",
     *      tags={"Viloyat haqida"},
     *      summary="Turizm SLUG bo'yicha",
     *      description="Returns one tourism",
     *      @OA\Parameter(
     *          name="slug",
     *          required=true,
     *          description="tourism Slug",
     *          in="path",
     *          @OA\Schema(type="string")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="if tourisms not found",
     *       )
     *     )
     */
    public function getOne($slug)
    {
        $tourism=Tourism::whereSlug($slug)->first();

        return $tourism ? new TourismResource($tourism) : response()->json('Tourism not found', 404);

    }
}
