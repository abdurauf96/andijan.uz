<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\OldDocument;
use App\Http\Resources\OldDocumentCollection;
use Illuminate\Http\Request;

class OldDocumentsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/old-documents",
     *      operationId="getOldDocuments",
     *      tags={"Viloyat hokimligi"},
     *      summary="Kuchini yo'qotgan xujjatlar ",
     *      description="Returns list of OldDocuments",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new OldDocumentCollection(OldDocument::paginate(10));
    }
}
