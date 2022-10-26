<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GovernorResource;
use App\Models\Governor;
use Illuminate\Http\Request;

class GovernorsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/governors",
     *      operationId="getGovernors",
     *      tags={"Governors (Hokimlar)"},
     *      summary="Get list of governors",
     *      description="Returns list of governors",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return GovernorResource::collection(Governor::latest()->get());
    }

    /**
     * @OA\Get(
     *      path="/governors/{id}",
     *      operationId="getOneGovernor",
     *      tags={"Governors (Hokimlar)"},
     *      summary="Get one governor by ID",
     *      description="Returns one governor",
     *      @OA\Parameter(
     *          name="id",
     *          required=true,
     *          description="Governor ID",
     *          in="path",
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="if governor not found",
     *       )
     *     )
     */
    public function getOne($id)
    {
        $governor=Governor::find($id);
        if(!$governor){
            return response()->json('Governor not found', 404);
        }
        return new GovernorResource($governor);
    }
}
