<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;
use App\Http\Resources\LinksCollection;

class LinksController extends Controller
{
    /**
     * @OA\Get(
     *      path="/sites",
     *      operationId="getLinks",
     *      tags={"Bosh sahifa"},
     *      summary="foydali saytlar",
     *      description="Returns list of useful sites",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new LinksCollection(Link::latest()->get());
    }
}
