<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/posts",
     *      operationId="getPosts",
     *      tags={"Posts"},
     *      summary="Get list of posts",
     *      description="Returns list of posts",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new PostCollection(Post::paginate(1));
    }

    /**
     * @OA\Get(
     *      path="/posts/{id}",
     *      operationId="getOnePost",
     *      tags={"Posts"},
     *      summary="Get one post by ID",
     *      description="Returns one post",
     *      @OA\Parameter(
     *          name="id",
     *          required=true,
     *          description="Post ID",
     *          in="path",
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="if post not found",
     *       )
     *     )
     */
    public function getOne($id)
    {
        $post=Post::find($id);
        if(!$post){
            return response()->json('Post not found', 404);
        }
        return new PostResource($post);
    }
}
