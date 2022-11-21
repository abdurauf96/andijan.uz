<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Senator;
use App\Http\Resources\SenatorCollection;
use App\Http\Resources\SenatorResource;

class SenatorsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/deputats",
     *      operationId="getDeputats",
     *      tags={"Mahalliy kengash"},
     *      summary="Deputatlar",
     *      description="Returns list of deputats",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAllDeputats()
    {
        return new SenatorCollection(Senator::select('name_uz', 'name_ru', 'name_en', 'description_uz','description_ru','description_en','image','slug')
            ->deputat()
            ->paginate(10));
    }


    /**
     * @OA\Get(
     *      path="/senators",
     *      operationId="getSenators",
     *      tags={"Mahalliy kengash"},
     *      summary="Senatorlar",
     *      description="Returns list of senators",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAllSenators()
    {
        return new SenatorCollection(Senator::select('name_uz', 'name_ru', 'name_en', 'description_uz','description_ru','description_en','image','slug')
            ->senator()
            ->paginate(10));
    }

    /**
     * @OA\Get(
     *      path="/senators/{slug}",
     *      operationId="getOneSenator",
     *      tags={"Mahalliy kengash"},
     *      summary="Get one senator or deputat by slug",
     *      description="Returns one senator or deputat",
     *      @OA\Parameter(
     *          name="slug",
     *          required=true,
     *          description="Senator or Deputat Slug",
     *          in="path",
     *          @OA\Schema(type="string")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="if senator not found",
     *       )
     *     )
     */
    public function getOne($slug)
    {
        $senator=Senator::whereSlug($slug)->first();
        return $senator ? new SenatorResource($senator) : response()->json('Senator not found', 404);
    }
}
