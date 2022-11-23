<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class OrganCollection extends ResourceCollection
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

            'organs' => $this->collection->map(function($data) {
                return [
                    'title_uz'=>$data->title_uz,
                    'title_ru'=>$data->title_ru,
                    'title_en'=>$data->title_en,
                    'websites'=>$data->websites,
                ];
            })

        ];
    }
}
