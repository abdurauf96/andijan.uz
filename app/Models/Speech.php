<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Speech extends Model
{
    use LogsActivity;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'speeches';

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
    protected $fillable = ['title_uz', 'title_ru', 'title_en', 'body_uz', 'body_ru', 'body_en', 'image', 'file'];

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($model) {
            if(file_exists('admin/images/speeches/'.$model->image)){
                unlink('admin/images/speeches/'.$model->image);
            }
            if(file_exists('admin/videos/speeches/'.$model->file)){
                unlink('admin/videos/speeches/'.$model->file);
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
