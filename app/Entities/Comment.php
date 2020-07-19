<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Comment.
 *
 * @package namespace App\Entities;
 */
class Comment extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "commentable_id",
        "commentable_type",
        "body",
        "user_id",
        'parent_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function chilrens()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
