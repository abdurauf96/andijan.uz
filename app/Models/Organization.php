<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Organization extends Model
{
    use LogsActivity;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'organizations';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title_uz', 'title_ru', 'title_en', 'title_kr', 'position_uz', 'position_ru', 'position_en', 'position_kr', 'image', 'statute', 'addres_uz', 'addres_ru', 'addres_en', 'addres_kr', 'phone', 'website', 'email', 'fax', 'reception_time_uz', 'reception_time_ru', 'reception_time_en', 'reception_time_kr', 'telegram', 'facebook', 'instagram', 'view', 'slug', 'meta_keywords', 'meta_description', 'director', 'director_image', 'director_phone', 'director_info_uz', 'director_info_ru', 'director_info_en', 'director_info_kr', 'director_facebook', 'director_telegram', 'director_instagram'];

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $model->slug = \Str::slug($model->title_uz);
        });
        static::deleting(function ($model) {
            if(file_exists(public_path($model->image))){
                unlink(public_path($model->image));
            }
            if(file_exists(public_path($model->director_image))){
                unlink(public_path($model->director_image));
            }
            if(file_exists(public_path($model->statute))){
                unlink(public_path($model->statute));
            }
        });
    }

    /**
     * Change activity log event description
     *
     * @param string $eventName
     *
     * @return string
     */
    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }
}
