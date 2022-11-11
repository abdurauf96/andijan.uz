<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GeneralInfoResource;
use Illuminate\Http\Request;
use App\Models\GeneralInfo;

class GeneralInfosController extends Controller
{
    /**
     * @OA\Get(
     *      path="/general-info",
     *      operationId="getGeneralinfos",
     *      tags={"Viloyat haqida"},
     *      summary="Umumiy ma'lumotlar",
     *      description="Returns one general-infos",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new GeneralInfoResource(GeneralInfo::first());
    }
}
