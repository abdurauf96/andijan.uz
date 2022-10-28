<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DocumentResource;
use Illuminate\Http\Request;
use App\Models\Document;

class DocumentsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/documents",
     *      operationId="getDocuments",
     *      tags={"Xujjatlar"},
     *      summary="Get list of documents",
     *      description="Returns list of documents",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return DocumentResource::collection(Document::all());
    }
}
