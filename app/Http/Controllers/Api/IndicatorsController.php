<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Indicator;
use App\Http\Resources\IndicatorCollection;

class IndicatorsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/indicators",
     *      operationId="getIndicators",
     *      tags={"Viloyat haqida"},
     *      summary="Iqtisodiy ko'rsatkichlar",
     *      description="Returns list of indicators",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new IndicatorCollection(Indicator::latest()->get());
    }
}
