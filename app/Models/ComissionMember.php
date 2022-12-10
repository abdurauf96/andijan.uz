<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class ComissionMember extends Model
{
    use LogsActivity;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comission_members';

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
    protected $fillable = ['name_uz', 'name_ru', 'name_en', 'name_kr', 'comission_id', 'description_uz', 'description_ru', 'description_en', 'description_kr', 'image', 'phone', 'email'];

    public function comission()
    {
        return $this->belongsTo(Comission::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($model) {
            if(file_exists(public_path($model->image))){
                unlink(public_path($model->image));
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
