<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Decision;
use App\Http\Resources\DecisionResource;
use Illuminate\Http\Request;

class DecisionsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/decisions",
     *      operationId="getDecisions",
     *      tags={"Qarorlar"},
     *      summary="Get list of decisions",
     *      description="Returns list of decisions",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return DecisionResource::collection(Decision::all());
    }
}
