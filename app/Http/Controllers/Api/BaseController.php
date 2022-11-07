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
 *     name="Bosh sahifa",
 *     description="Bosh sahifaga qarashli API Endpointlar"
 * )
 * @OA\Tag(
 *     name="Viloyat hokimligi",
 *     description="Viloyat hokimligi bo'limi uchun API Endpointlar"
 * )
 *
 */
class BaseController extends Controller
{

}
