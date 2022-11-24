<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RegionWebsiteCollection;
use App\Models\RegionWebsite;
use Illuminate\Http\Request;

class RegionWebsitesController extends Controller
{
    /**
     * @OA\Get(
     *      path="/region-websites",
     *      operationId="getRegionWebsites",
     *      tags={"Ma'lumotnoma"},
     *      summary="Viloyat saytlari",
     *      description="Get list of websites",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new RegionWebsiteCollection(RegionWebsite::all());
    }
}
