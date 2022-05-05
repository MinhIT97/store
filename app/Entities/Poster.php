<?php

namespace App\Entities;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Poster.
 *
 * @package namespace App\Entities;
 */
class Poster extends Model implements Transformable
{
    use TransformableTrait, Sluggable, SluggableScopeHelpers;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'link',
        'status',
        'type',
        'thumbnail',
    ];
    public function getDate()
    {
        return Carbon::parse($this->created_at)->format('d/m/Y');
    }
    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }
    public function scopePublished($query)
    {
        $query->where('status', Product::PUBLISHED);
    }
}
