<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Senator extends Model
{
    use LogsActivity;

    protected const SENATOR=1;
    protected const DEPUTAT=2;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'senators';

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
    protected $fillable = ['name_uz', 'name_ru', 'name_en', 'description_uz', 'description_ru', 'description_en', 'image','body_uz', 'body_ru', 'body_en', 'phone', 'email', 'fax', 'meta_keywords', 'meta_description','type'];

    public function scopeDeputat($query){
        return $query->where('type', self::DEPUTAT);
    }

    public function scopeSenator($query){
        return $query->where('type', self::SENATOR);
    }

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $model->slug = \Str::slug($model->name_uz);
        });
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
