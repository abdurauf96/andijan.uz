<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UniversityCollection;
use App\Models\University;
use Illuminate\Http\Request;

class UniversitiesController extends Controller
{
    /**
     * @OA\Get(
     *      path="/universities",
     *      operationId="getUniversities",
     *      tags={"Viloyat haqida"},
     *      summary="Oliy o’quv yurtlari",
     *      description="Returns list of universities",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new UniversityCollection(University::latest()->get());
    }
}
