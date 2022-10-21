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
     *      tags={"Projects"},
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
     *      path="/projects/{id}",
     *      operationId="getOneProject",
     *      tags={"Projects"},
     *      summary="Get one project by ID",
     *      description="Returns one project",
     *      @OA\Parameter(
     *          name="id",
     *          required=true,
     *          description="Project ID",
     *          in="path",
     *          @OA\Schema(type="integer")
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
    public function getOne($id)
    {
        $project=Project::find($id);
        if(!$project){
            return response()->json('Project not found', 404);
        }
        return new ProjectsResource($project);
    }
}
