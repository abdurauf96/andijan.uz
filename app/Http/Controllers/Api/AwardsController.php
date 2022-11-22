<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AwardCollection;
use App\Models\Award;
use Illuminate\Http\Request;

class AwardsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/awards",
     *      operationId="getAwards",
     *      tags={"Ma'lumotnoma"},
     *      summary="Davlat mukofotlari",
     *      description="Get list of awards",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new AwardCollection(Award::latest()->get());
    }
}
