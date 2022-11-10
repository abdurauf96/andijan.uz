<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\InvestmentCollection;
use App\Http\Resources\InvestmentResource;
use App\Models\Investment;
use Illuminate\Http\Request;

class InvestmentsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/investments",
     *      operationId="getInvestMents",
     *      tags={"Viloyat haqida"},
     *      summary="Investitsiyalar",
     *      description="Returns list of investments",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new InvestmentCollection(Investment::latest()->paginate(10));
    }

    /**
     * @OA\Get(
     *      path="/investments/{slug}",
     *      operationId="getOneInvestment",
     *      tags={"Viloyat haqida"},
     *      summary="Investitsiyalar SLUG bo'yicha",
     *      description="Returns one investments",
     *      @OA\Parameter(
     *          name="slug",
     *          required=true,
     *          description="investment Slug",
     *          in="path",
     *          @OA\Schema(type="string")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="if investments not found",
     *       )
     *     )
     */
    public function getOne($slug)
    {
        $invest=Investment::whereSlug($slug)->first();

        return $invest ? new InvestmentResource($invest) : response()->json('Investment not found', 404);

    }
}
