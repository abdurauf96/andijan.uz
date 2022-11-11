<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Http\Resources\VacancyCollection;

class VacanciesController extends Controller
{
    /**
     * @OA\Get(
     *      path="/vacancies",
     *      operationId="getVacancies",
     *      tags={"Viloyat haqida"},
     *      summary="Bo'sh ish o'rinlari",
     *      description="Returns list of vacancies",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new VacancyCollection(Vacancy::latest()->get());
    }
}
