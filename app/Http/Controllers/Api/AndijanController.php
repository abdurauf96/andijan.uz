<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Andijan;
use App\Http\Resources\AndijanResource;
use Illuminate\Http\Request;

class AndijanController extends Controller
{
    /**
     * @OA\Get(
     *      path="/andijan",
     *      operationId="getAndijan",
     *      tags={"Viloyat hokimligi"},
     *      summary="Rahbariyat",
     *      description="Returns info about rahbariyat",
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getOne()
    {
        $andijan=Andijan::first();
        return new AndijanResource($andijan);
    }
}
