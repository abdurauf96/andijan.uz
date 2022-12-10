<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Question extends Model
{
    use LogsActivity;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'questions';

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
    protected $fillable = ['title_uz', 'title_ru', 'title_en', 'title_kr'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
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
