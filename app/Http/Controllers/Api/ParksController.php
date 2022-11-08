<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ParkCollection;
use App\Models\Park;

class ParksController extends Controller
{
    /**
     * @OA\Get(
     *      path="/parks",
     *      operationId="getParks",
     *      tags={"Viloyat haqida"},
     *      summary="Madaniyat va Istirohat bog’lari",
     *      description="Returns list of parks",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new ParkCollection(Park::latest()->get());
    }
}
