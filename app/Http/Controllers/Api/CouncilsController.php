<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Council;
use App\Http\Resources\CouncilResource;

class CouncilsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/councils",
     *      operationId="getCouncils",
     *      tags={"Councils (Kengashlar)"},
     *      summary="Get list of Councils",
     *      description="Returns list of Councils",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return CouncilResource::collection(Council::with('members')->get());
    }
}
