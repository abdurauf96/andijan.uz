<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Speech;
use Illuminate\Http\Request;
use App\Http\Resources\SpeechResource;

class SpeechesController extends Controller
{
    /**
     * @OA\Get(
     *      path="/speeches",
     *      operationId="getSpeeches",
     *      tags={"Viloyat hokimligi"},
     *      summary="Hokim ma'ruzalari",
     *      description="Returns list of speeches",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return SpeechResource::collection(Speech::latest()->get());
    }

    /**
     * @OA\Get(
     *      path="/speeches/{id}",
     *      operationId="getOneSpeech",
     *      tags={"Viloyat hokimligi"},
     *      summary="Hokim ma'ruzalari by ID",
     *      description="Returns one speech",
     *      @OA\Parameter(
     *          name="id",
     *          required=true,
     *          description="Speech ID",
     *          in="path",
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="if speech not found",
     *       )
     *     )
     */
    public function getOne($id)
    {
        $speech=Speech::find($id);
        if(!$speech){
            return response()->json('Speech not found', 404);
        }
        return new SpeechResource($speech);
    }
}
