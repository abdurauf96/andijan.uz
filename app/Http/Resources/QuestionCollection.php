<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class QuestionCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

            'questions' => $this->collection->map(function($data) {
                return [
                    'title_uz'=>$data->title_uz,
                    'title_ru'=>$data->title_ru,
                    'title_en'=>$data->title_en,
                    'title_kr'=>$data->title_kr,
                    'answers'=>$data->answers,

                ];
            })

        ];
    }
}
