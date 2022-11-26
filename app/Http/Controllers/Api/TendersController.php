<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TenderResource;
use Illuminate\Http\Request;
use App\Models\Tender;

class TendersController extends Controller
{
    /**
     * @OA\Get(
     *      path="/tenders",
     *      operationId="getTenders",
     *      tags={"Interaktiv"},
     *      summary="Tender savdolari",
     *      description="Returns list of tenders",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new TenderResource(Tender::first());
    }
}
