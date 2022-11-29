<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAppealRequest;
use App\Models\Appeal;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AppealController extends Controller
{
    /**
     * @OA\Post(
     *  path="/appeals/store",
     **  tags={"Murojat qoldirish"},
     *  description="Murojat qoldirish",
     *  operationId="storeAppeal",
     *  @OA\RequestBody(
     *      required=true,
     *      @OA\JsonContent(
     *          @OA\Property(property="name", type="string"),
     *          @OA\Property(property="phone", type="string"),
     *          @OA\Property(property="addres", type="string"),
     *          @OA\Property(property="body", type="string"),
     *      )
     *  ),
     *
     *  @OA\Response(
     *      response=204,
     *      description="appeal sent successfully",
     *     @OA\JsonContent(
 *              @OA\Property(property="message", type="string", example="Appeal stored"),
 *          )
     *  ),
     *  @OA\Response(
     *      response=422,
     *      description="Validation error"
     *  )
     *
     * )
     */

    public function store(Request $request){

        $validator = \Validator::make($request->all(), [
            'name'=>'required',
            'phone'=>'required',
            'addres'=>'required',
            'body'=>'required',
        ]);

        if($validator->fails()){
            return response()->json(['error' => $validator->errors()], 422);
        }

        $data=Appeal::create($request->all());

        \Mail::to('saydaliyevabdurauf@gmail.com')->send(new \App\Mail\Appeal($data));

        return response()->json(['message'=>'murojat qoldirildi'], 204 );
    }
}
