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
        return new PostCollection(Post::paginate(10));
    }

    /**
     * @OA\Get(
     *      path="/posts/{slug}",
     *      operationId="getOnePost",
     *      tags={"Posts"},
     *      summary="Get one post by slug",
     *      description="Returns one post",
     *      @OA\Parameter(
     *          name="slug",
     *          required=true,
     *          description="Post slug",
     *          in="path",
     *          @OA\Schema(type="string")
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
    public function getOne($slug)
    {
        $post=Post::whereSlug($slug)->first();
        $post ? $post->increment('view') : '';

        return $post ? new PostResource($post) : response()->json('Post not found', 404);
    }
}
