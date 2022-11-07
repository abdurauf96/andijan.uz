<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PartnerCollection;
use App\Http\Resources\PartnerResource;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    /**
     * @OA\Get(
     *      path="/partners",
     *      operationId="getPartners",
     *      tags={"Viloyat hokimligi"},
     *      summary="Hamkorlar",
     *      description="Returns list of partners",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new PartnerCollection(Partner::paginate(10));
    }

    /**
     * @OA\Get(
     *      path="/partners/{slug}",
     *      operationId="getOnePartner",
     *      tags={"Viloyat hokimligi"},
     *      summary="Hamkorlar SLUG bo'yicha",
     *      description="Returns one partner",
     *      @OA\Parameter(
     *          name="slug",
     *          required=true,
     *          description="Partner Slug",
     *          in="path",
     *          @OA\Schema(type="string")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="if partner not found",
     *       )
     *     )
     */
    public function getOne($slug)
    {
        $partner=Partner::whereSlug($slug)->first();
        if(!$partner){
            return response()->json('Partner not found', 404);
        }
        return new PartnerResource($partner);
    }
}
