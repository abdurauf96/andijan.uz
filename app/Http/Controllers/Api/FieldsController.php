<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Field;
use App\Http\Resources\FieldResource;
use Illuminate\Http\Request;

class FieldsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/fields",
     *      operationId="getFields",
     *      tags={"Fields"},
     *      summary="Get list of fields",
     *      description="Returns list of fields",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return FieldResource::collection(Field::latest()->get());
    }

    /**
     * @OA\Get(
     *      path="/fields/{id}",
     *      operationId="getOneField",
     *      tags={"Fields"},
     *      summary="Get one field by ID",
     *      description="Returns one field",
     *      @OA\Parameter(
     *          name="id",
     *          required=true,
     *          description="Field ID",
     *          in="path",
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="if field not found",
     *       )
     *     )
     */
    public function getOne($id)
    {
        $field=Field::find($id);
        if(!$field){
            return response()->json('Field not found', 404);
        }
        return new FieldResource($field);
    }
}
