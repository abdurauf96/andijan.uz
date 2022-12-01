<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Accreditation;
use App\Models\Arena;
use App\Models\Post;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class SearchController extends Controller
{
    /**
     * @OA\Get(
     *      path="/search",
     *      operationId="search",
     *      tags={"Search"},
     *      summary="qidiruv",
     *
     *      @OA\Parameter(
     *          name="key",
     *
     *          description="key",
     *          in="query",
     *          @OA\Schema(type="string")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="if senator not found",
     *       )
     *     )
     */
    public function search(Request $request){

        $searchResults = (new Search())
            ->registerModel(Post::class, Post::$searchFields)
            ->registerModel(Accreditation::class, Accreditation::$searchFields)
            ->perform($request->key);
        return response()->json($searchResults);
    }
}
