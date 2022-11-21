<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CouncilDecision;
use Illuminate\Http\Request;
use App\Http\Resources\CouncilDecisionCollection;

class CouncilDecisionsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/council-decisions",
     *      operationId="getCouncilDecisions",
     *      tags={"Mahalliy kengash"},
     *      summary="Kengash qarorlari",
     *      description="Returns list of council-decisions",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new CouncilDecisionCollection(CouncilDecision::latest()->get());
    }
}
