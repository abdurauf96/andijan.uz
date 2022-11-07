<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LocalPage;
use App\Http\Resources\LocalPageResource;
use Illuminate\Http\Request;

class LocalPagesController extends Controller
{
    /**
     * @OA\Get(
     *      path="/local-page",
     *      operationId="getLocal",
     *      tags={"Viloyat hokimligi"},
     *      summary="Mahalliy davlat hokimyati ",
     *      description="Get list of local page",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        $local=LocalPage::first();
        $local ? $local->increment('view') : '';
        return new LocalPageResource($local);
    }
}
