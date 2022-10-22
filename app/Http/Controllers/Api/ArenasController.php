<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArenaResource;
use App\Models\Arena;
use Illuminate\Http\Request;

class ArenasController extends Controller
{
    /**
     * @OA\Get(
     *      path="/arenas",
     *      operationId="getArenas",
     *      tags={"Arenas"},
     *      summary="Get list of arenas",
     *      description="Returns list of arenas",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return ArenaResource::collection(Arena::all());
    }

    /**
     * @OA\Get(
     *      path="/arenas/{id}",
     *      operationId="getOneArena",
     *      tags={"Arenas"},
     *      summary="Get one arena by ID",
     *      description="Returns one arena",
     *      @OA\Parameter(
     *          name="id",
     *          required=true,
     *          description="Arena ID",
     *          in="path",
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="if arena not found",
     *       )
     *     )
     */
    public function getOne($id)
    {
        $arena=Arena::find($id);
        if(!$arena){
            return response()->json('Arena not found', 404);
        }
        return new ArenaResource($arena);
    }
}
