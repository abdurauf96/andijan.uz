<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Http\Resources\ProgramsCollection;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/programs",
     *      operationId="getPrograms",
     *      tags={"Davlat dasturlari"},
     *      summary="Get list of programs",
     *      description="Returns list of programs",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new ProgramsCollection(Program::paginate(10));
    }
}
