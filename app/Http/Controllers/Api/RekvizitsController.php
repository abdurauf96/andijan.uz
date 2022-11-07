<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rekvizit;
use App\Http\Resources\RekvizitsCollection;

class RekvizitsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/rekvizits",
     *      operationId="getRekvizits",
     *      tags={"Viloyat hokimligi"},
     *      summary="Rekvizitlar",
     *      description="Returns list of rekvizits",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new RekvizitsCollection(Rekvizit::paginate(10));
    }
}
