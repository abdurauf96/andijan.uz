<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Resources\ProjectsResource;
use App\Http\Resources\ProjectsCollection;

class ProjectsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/projects",
     *      operationId="getProjects",
     *      tags={"Bosh sahifa"},
     *      summary="Get list of Projects",
     *      description="Returns list of Projects",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new ProjectsCollection(Project::paginate(10));
    }

    /**
     * @OA\Get(
     *      path="/projects/{slug}",
     *      operationId="getOneProject",
     *      tags={"Bosh sahifa"},
     *      summary="Get one project by slug",
     *      description="Returns one project",
     *      @OA\Parameter(
     *          name="slug",
     *          required=true,
     *          description="Project Slug",
     *          in="path",
     *          @OA\Schema(type="string")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="if project not found",
     *       )
     *     )
     */
    public function getOne($slug)
    {
        $project=Project::whereSlug($slug)->first();
        return $project ? new ProjectsResource($project) : response()->json('Project not found', 404);
    }
}
