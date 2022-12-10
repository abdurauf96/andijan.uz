<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class OldDocument extends Model
{
    use LogsActivity;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'old_documents';

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
    protected $fillable = ['title_uz', 'title_ru', 'title_en', 'title_kr', 'organ_uz', 'organ_ru', 'organ_en', 'organ_kr', 'date', 'file'];

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
