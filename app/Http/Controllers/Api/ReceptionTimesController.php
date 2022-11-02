<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReceptionTimesCollection;
use App\Models\ReceptionTime;
use Illuminate\Http\Request;

class ReceptionTimesController extends Controller
{
    /**
     * @OA\Get(
     *      path="/reception-times",
     *      operationId="getReceptionTimes",
     *      tags={"Fuqarolarni qabul qilish vaqtlari"},
     *      summary="Get list of reception-times",
     *      description="Returns list of reception-times",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new ReceptionTimesCollection(ReceptionTime::paginate(10));
    }
}
