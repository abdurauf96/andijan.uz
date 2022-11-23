<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AccreditationResource;
use App\Models\Accreditation;
use Illuminate\Http\Request;

class AccreditationsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/accreditations",
     *      operationId="getaccreditations",
     *      tags={"Ma'lumotnoma"},
     *      summary="Akkreditatsiya qilish tartibi	",
     *      description="Get list of accreditations",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new AccreditationResource(Accreditation::first());
    }
}
