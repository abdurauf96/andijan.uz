<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PressPageResource;
use App\Models\PressPage;
use Illuminate\Http\Request;

class PressPagesController extends Controller
{
    /**
     * @OA\Get(
     *      path="/press-page",
     *      operationId="getPress",
     *      tags={"Viloyat hokimligi"},
     *      summary="Matbuot xizmati",
     *      description="Get list of press page",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new PressPageResource(PressPage::first());
    }
}
