<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;
use App\Http\Resources\InformationResource;

class InformationsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/informations",
     *      operationId="getInformations",
     *      tags={"Ma'lumotnoma"},
     *      summary="Ma'lumotlar ro'yhati",
     *      description="Get list of informations",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        $info=Information::first();
        return new InformationResource($info);
    }
}
