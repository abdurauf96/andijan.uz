<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ConstitutionResource;
use App\Models\Constitution;
use Illuminate\Http\Request;

class ConstitutionsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/constitution",
     *      operationId="getConstitution",
     *      tags={"Ma'lumotnoma"},
     *      summary="Konstitutsiya",
     *      description="Get list of constitutions",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new ConstitutionResource(Constitution::first());
    }
}
