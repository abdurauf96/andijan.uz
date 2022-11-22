<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HolidayResource;
use App\Models\Holiday;
use Illuminate\Http\Request;

class HolidaysController extends Controller
{
    /**
     * @OA\Get(
     *      path="/holidays",
     *      operationId="getHolidays",
     *      tags={"Ma'lumotnoma"},
     *      summary="Bayram va Muhim sanalar",
     *      description="Get list of holidays",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new HolidayResource(Holiday::first());
    }
}
