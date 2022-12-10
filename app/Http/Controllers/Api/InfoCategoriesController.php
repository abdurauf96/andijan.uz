<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\InfoCategory;
use Illuminate\Http\Request;
use App\Http\Resources\InfoCategoriesCollection;

class InfoCategoriesController extends Controller
{
//    /**
//     * @OA\Get(
//     *      path="/info-categories",
//     *      operationId="getInfoCategories",
//     *      tags={"Bosh sahifa"},
//     *      summary="Ma'lumotlar",
//     *      description="Returns list of InfoCategories",
//     *      @OA\Response(
//     *          response=200,
//     *          description="Successful operation",
//     *       )
//     *     )
//     */
    public function getAll()
    {
        return new InfoCategoriesCollection(InfoCategory::paginate(10));
    }
}
