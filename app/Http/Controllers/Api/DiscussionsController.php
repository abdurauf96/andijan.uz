<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DiscussionResource;
use App\Models\Discussion;
class DiscussionsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/discussions",
     *      operationId="getDiscussions",
     *      tags={"Viloyat hokimligi"},
     *      summary="Hujjatlar muhokamasi",
     *      description="Returns list of discussions",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return DiscussionResource::collection(Discussion::all());
    }
}
