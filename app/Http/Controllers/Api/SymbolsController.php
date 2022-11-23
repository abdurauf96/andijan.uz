<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SymbolCollection;
use App\Models\Symbol;
use Illuminate\Http\Request;

class SymbolsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/symbols",
     *      operationId="getSymbols",
     *      tags={"Ma'lumotnoma"},
     *      summary="Davlat ramzlari",
     *      description="Get list of symbols",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new SymbolCollection(Symbol::all());
    }
}
