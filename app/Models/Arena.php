<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Arena extends Model
{
    use LogsActivity;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'arenas';

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
    protected $fillable = ['title_uz', 'title_ru', 'title_en', 'body_uz', 'body_ru', 'body_en', 'image', 'slug'];

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $model->slug = \Str::slug($model->title_uz);
        });
        static::deleting(function ($model) {
            if(file_exists('admin/images/arenas/'.$model->image)){
                unlink('admin/images/arenas/'.$model->image);
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
