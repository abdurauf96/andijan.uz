<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Resources\ScheduleCollection;

class SchedulesController extends Controller
{
    /**
     * @OA\Get(
     *      path="/schedules",
     *      operationId="getSchedules",
     *      tags={"Viloyat hokimligi"},
     *      summary="Kun tartibi",
     *      description="Returns list of schedules",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new ScheduleCollection(Schedule::all());
    }
}
