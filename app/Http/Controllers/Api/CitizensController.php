<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CitizenResource;
use App\Models\Citizen;
use Illuminate\Http\Request;

class CitizensController extends Controller
{
    /**
     * @OA\Get(
     *      path="/citizens",
     *      operationId="getCitizens",
     *      tags={"Interaktiv"},
     *      summary="Fuqarolar uchun",
     *      description="Returns list of citizens",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return CitizenResource::collection(Citizen::all());
    }


    /**
     * @OA\Get(
     *      path="/citizens/{slug}",
     *      operationId="getOneCitizens",
     *      tags={"Interaktiv"},
     *      summary="Get one citizen by slug",
     *      description="Returns one citizen ",
     *      @OA\Parameter(
     *          name="slug",
     *          required=true,
     *          description="Citizen Slug",
     *          in="path",
     *          @OA\Schema(type="string")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="if citizen not found",
     *       )
     *     )
     */
    public function getOne($slug)
    {
        $citizen=Citizen::whereSlug($slug)->first();
        return $citizen ? new CitizenResource($citizen) : response()->json('Citizen not found', 404);
    }
}
