<?php

namespace App\Entities;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Post.
 *
 * @package namespace App\Entities;
 */
class Post extends Model implements Transformable
{
    use TransformableTrait, Sluggable, SluggableScopeHelpers;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    const PUBLISHED = 1;
    const PENDING   = 0;

    public function postTypes()
    {
        return [
            'pages',
        ];
    }
    protected $fillable = [
        "title",
        "content",
        "slug",
        "description",
        "view",
        "thumbnail",
        "status",
        "type",
        "user_id",
    ];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoryable');
    }
    public function getDate()
    {
        return Carbon::parse($this->created_at)->format('d/m/Y');
    }

    public function getMonth()
    {
        return Carbon::parse($this->created_at)->format('l jS \\of F Y h:i:s A');
    }

    public function getDateUpdate()
    {
        return Carbon::parse($this->updated_at)->format('d/m/Y');
    }

    public function scopePublished($query)
    {
        return $query->where('status', Post::PUBLISHED);
    }
}
