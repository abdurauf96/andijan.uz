<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrganizationResource;
use App\Models\Organization;
use App\Http\Resources\OrganizationCollection;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/organizations",
     *      operationId="getOrganizations",
     *      tags={"Tashkilotlar"},
     *      summary="Get list of organizations",
     *      description="Returns list of organizations",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new OrganizationCollection(Organization::all());
    }

    /**
     * @OA\Get(
     *      path="/organizations/{slug}",
     *      operationId="getOneOrganization",
     *      tags={"Tashkilotlar"},
     *      summary="Get one organization by slug",
     *      description="Returns one organization",
     *      @OA\Parameter(
     *          name="slug",
     *          required=true,
     *          description="Organization Slug",
     *          in="path",
     *          @OA\Schema(type="string")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="if organization not found",
     *       )
     *     )
     */
    public function getOne($slug)
    {
        $organization=Organization::whereSlug($slug)->first();
        if(!$organization){
            return response()->json('Organization not found', 404);
        }
        return new OrganizationResource($organization);
    }
}
