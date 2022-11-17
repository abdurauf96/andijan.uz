<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MeetingResource;
use App\Models\Meeting;
use Illuminate\Http\Request;

class MeetingsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/meetings",
     *      operationId="getMeetings",
     *      tags={"Mahalliy kengash"},
     *      summary="Senat yalpi majlislari",
     *      description="Returns list of meetings",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new MeetingResource(Meeting::first());
    }
}
