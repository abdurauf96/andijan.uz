<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AnswerResource;
use App\Models\Answer;
use App\Models\Vote;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Http\Resources\QuestionCollection;

class QuestionsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/questions",
     *      operationId="getQuestions",
     *      tags={"So'rovnoma"},
     *      summary="sorovnoma",
     *      description="Returns list of questions",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getAll()
    {
        return new QuestionCollection(Question::latest()->get());
    }

    /**
     * @OA\Post(
     *  path="/vote",
     **  tags={"So'rovnoma"},
     *  description="Ovoz berish",
     *  operationId="storeVote",
     *  @OA\RequestBody(
     *      required=true,
     *      @OA\JsonContent(
     *          @OA\Property(property="question_id", type="integer"),
     *          @OA\Property(property="answer_id", type="integer"),
     *      )
     *  ),
     *
     *  @OA\Response(
     *      response=204,
     *      description="Ovoz qabul qilindi",
     *     @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="Ovoz berildi"),
     *          )
     *  ),
     *  @OA\Response(
     *      response=422,
     *      description="Validation error"
     *  )
     *
     * )
     */

    public function vote(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'question_id'=>'required',
            'answer_id'=>'required',
        ]);

        if($validator->fails()){
            return response()->json(['success'=>false, 'error' => $validator->errors()], 422);
        }

        $vote=Vote::where('question_id', $request->question_id)->where('user_ip', $request->ip())->get();

        if(count($vote)>0){
            return response()->json(['success'=>false, 'error' => ['siz ovoz bergansiz']], 403);
        }else{
            $vote=new Vote;
            $vote->user_ip=$request->ip();
            $vote->question_id=$request->question_id;
            $vote->answer_id=$request->answer_id;
            $vote->save();

            $data=AnswerResource::collection(Answer::where('question_id', $request->question_id)->withCount('votes')->get());

            return response()->json(['success' => true, 'data'=>$data], 204);
        }

    }

}
