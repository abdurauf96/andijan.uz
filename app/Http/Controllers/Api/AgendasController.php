<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Http\Resources\AgendaCollection;

class AgendasController extends Controller
{
    /**
     * @OA\Get(
     *      path="/agendas",
     *      operationId="getAgendas",
     *      tags={"Mahalliy kengash"},
     *      summary="Sessiya kun tartibi",
     *      description="Returns list of agendas",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new AgendaCollection(Agenda::latest()->get());
    }
}
