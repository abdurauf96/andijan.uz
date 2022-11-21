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
 * @OA\Tag(
 *     name="Viloyat haqida",
 *     description="Viloyat haqida bo'limi uchun API Endpointlar"
 * )
 * @OA\Tag(
 *     name="Tuman va shaharlar",
 *     description="Tuman va shaharlar"
 * )
 * @OA\Tag(
 *     name="Mahalliy kengash",
 *     description="Mahalliy kengash bo'limi uchun API"
 * )
 * @OA\Tag(
 *     name="Ma'lumotnoma",
 *     description="Ma'lumotnoma bo'limi uchun API"
 * )
 *
 */
class BaseController extends Controller
{

}
