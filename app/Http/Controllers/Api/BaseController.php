<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Andijon xokimligi web sayti API Documentation"
 * )
 *
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="Demo API Server"
 * )
 *
 * @OA\Tag(
 *     name="Posts",
 *     description="API Endpoints of Posts"
 * )
 * @OA\Tag(
 *     name="InfoCategories",
 *     description="API Endpoints of InfoCategories"
 * )
 * @OA\Tag(
 *     name="Projects",
 *     description="API Endpoints of Projects"
 * )
 * @OA\Tag(
 *     name="Useful Sites",
 *     description="API Endpoints of useful sites"
 * )
 *  @OA\Tag(
 *     name="Services",
 *     description="API Endpoints of services"
 * )
 */
class BaseController extends Controller
{

}
