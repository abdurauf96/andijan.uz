<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Http\Resources\PlanResource;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    /**
     * @OA\Get(
     *      path="/plans",
     *      operationId="getPLans",
     *      tags={"Majlis o'tkazish rejalari"},
     *      summary="Get list of plans",
     *      description="Get list of plans",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        $plan=Plan::first();
        return new PlanResource($plan);
    }
}
