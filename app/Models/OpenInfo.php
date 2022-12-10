<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class OpenInfo extends Model
{
    use LogsActivity;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'open_infos';

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
    protected $fillable = ['title_uz', 'title_ru', 'title_en', 'title_kr', 'passport_uz', 'passport_ru', 'passport_en', 'passport_kr', 'table_uz', 'table_ru', 'table_en', 'table_kr', 'slug'];

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $model->slug = \Str::slug($model->title_uz);
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
