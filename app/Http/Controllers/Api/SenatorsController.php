<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Senator;
use App\Http\Resources\SenatorCollection;

class SenatorsController extends Controller
{
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
    public function getAll()
    {
        return new SenatorCollection(Senator::paginate(10));
    }
}
