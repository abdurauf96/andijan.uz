<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Rekvizit extends Model
{
    use LogsActivity;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rekvizits';

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
    protected $fillable = ['title_uz', 'title_ru', 'title_en', 'body_uz', 'body_ru', 'body_en', 'file'];

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($model) {
            if(file_exists(public_path($model->file))){
                unlink(public_path($model->file));
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
