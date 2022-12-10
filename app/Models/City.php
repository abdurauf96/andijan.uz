<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class City extends Model
{
    use LogsActivity;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cities';

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
    protected $fillable = ['title_uz', 'title_ru', 'title_en', 'title_kr', 'body_kr', 'body_uz', 'body_ru', 'body_en', 'hokim_image', 'hokim_text_uz', 'hokim_text_ru', 'hokim_text_en', 'hokim_text_kr', 'addres_uz', 'addres_ru', 'addres_en', 'addres_en', 'phone1', 'phone2', 'exat', 'website', 'work_time', 'decision', 'statute', 'slug'];

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $model->slug = \Str::slug($model->title_uz);
        });
        static::deleting(function ($model) {
            if(file_exists(public_path($model->hokim_image))){
                unlink(public_path($model->hokim_image));
            }
            if(file_exists(public_path($model->decision))){
                unlink(public_path($model->decision));
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
