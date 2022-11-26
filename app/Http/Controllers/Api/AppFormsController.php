<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AppFormResource;
use App\Models\AppForm;
use Illuminate\Http\Request;

class AppFormsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/app-form",
     *      operationId="getAppForm",
     *      tags={"Interaktiv"},
     *      summary="Murojat tartibi",
     *      description="Get list of app-forms",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new AppFormResource(AppForm::first());
    }
}
