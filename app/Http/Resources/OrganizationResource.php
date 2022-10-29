<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrganizationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'title_ru'=>$this->title_ru,
            'title_uz'=>$this->title_uz,
            'title_en'=>$this->title_en,
            'nizom'=>$this->statute,
            'addres_uz'=>$this->addres_uz,
            'addres_ru'=>$this->addres_ru,
            'addres_en'=>$this->addres_en,
            'phone'=>$this->phone,
            'fax'=>$this->fax,
            'email'=>$this->email,
            'website'=>$this->website,
            'reception_time_uz'=>$this->reception_time_uz,
            'reception_time_ru'=>$this->reception_time_ru,
            'reception_time_en'=>$this->reception_time_en,
            'view_count'=>$this->view,
            'telegram'=>$this->telegram,
            'facebook'=>$this->facebook,
            'instagram'=>$this->instagram,

            'director'=>$this->director,
            'director_image'=>$this->image,
            'director_info_uz'=>$this->director_info_uz,
            'director_info_ru'=>$this->director_info_ru,
            'director_info_en'=>$this->director_info_en,
            'phone'=>$this->director_phone,
            'director_telegram'=>$this->director_telegram,
            'director_instagram'=>$this->director_instagram,
            'director_facebook'=>$this->director_facebook,
        ];
    }
}
