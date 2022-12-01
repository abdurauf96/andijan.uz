<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Post extends Model implements Searchable
{
    use LogsActivity;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    const ANDIJAN=1;
    const SPECIAL=2;
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title_uz', 'title_ru', 'title_en', 'description_uz', 'description_ru', 'description_en',
        'body_uz', 'body_ru', 'body_en', 'slug', 'meta_keywords', 'meta_description', 'image','type'];

    public static $searchFields=['title_uz', 'title_ru', 'title_en', 'description_uz', 'description_ru', 'description_en',
        'body_uz', 'body_ru', 'body_en'];

    protected $attributes=[
        'view'=>0,
    ];

    public function scopeType($query, $type){
        return $query->where('type', $type);
    }

    //public $searchableType = 'Xabarlar';

    public function getSearchResult(): SearchResult
    {
        return new \Spatie\Searchable\SearchResult(
            $this,
            $this->title_uz,
            $this->slug,
        );
    }

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $model->slug = \Str::slug($model->title_uz);
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
