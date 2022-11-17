<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ComissionResource;
use App\Models\Comission;
use Illuminate\Http\Request;

class ComissionsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/comissions",
     *      operationId="getComissions",
     *      tags={"Mahalliy kengash"},
     *      summary="Doimiy komissiyalar",
     *      description="Returns list of comissions",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return ComissionResource::collection(Comission::latest()->get());
    }
}
