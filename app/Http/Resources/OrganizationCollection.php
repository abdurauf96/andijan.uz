<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class OrganizationCollection extends ResourceCollection
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

            'categories' => $this->collection->map(function($data) {
                return [
                    'title_uz'=>$data->title_uz,
                    'title_ru'=>$data->title_ru,
                    'title_en'=>$data->title_en,
                    'image'=>$data->image,
                    'position_uz'=>$data->position_uz,
                    'position_ru'=>$data->position_ru,
                    'position_en'=>$data->position_en,
                    'director'=>$data->director,
                    'slug'=>$data->slug,
                ];
            })

        ];

    }
}
