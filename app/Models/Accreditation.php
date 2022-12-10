<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Accreditation extends Model implements Searchable
{
    use LogsActivity;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'accreditations';

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
    protected $fillable = ['body_uz', 'body_ru', 'body_en' ,'body_kr'];

    public static $searchFields=['body_uz', 'body_ru', 'body_en', 'body_kr'];

    //public $searchableType = 'Xabarlar';

    public function getSearchResult(): SearchResult
    {
        return new SearchResult(
            $this,
            $this->title_uz
        );
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
