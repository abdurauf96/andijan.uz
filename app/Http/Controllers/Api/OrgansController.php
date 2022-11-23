<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrganCollection;
use App\Models\Organ;
use Illuminate\Http\Request;

class OrgansController extends Controller
{
    /**
     * @OA\Get(
     *      path="/organs",
     *      operationId="getOrgans",
     *      tags={"Ma'lumotnoma"},
     *      summary="Davlat organlari websitelari",
     *      description="Get list of organs",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new OrganCollection(Organ::with('websites')->get());
    }
}
