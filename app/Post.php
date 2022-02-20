<?php

namespace App;

use App\Scopes\StatusScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Post
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static Builder|Post newModelQuery()
 * @method static Builder|Post newQuery()
 * @method static Builder|Post query()
 * @method static Builder|Post whereCreatedAt($value)
 * @method static Builder|Post whereId($value)
 * @method static Builder|Post whereTitle($value)
 * @method static Builder|Post whereUpdatedAt($value)
 * @method static Builder|Post whereUserId($value)
 * @mixin \Eloquent
 */
class Post extends Model
{
//    public function image()
//    {
//        return $this->morphOne('App\Image', 'imageable');
//    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

//    public function comments()
//    {
//        return $this->hasMany('App\Comment');
//    }
//
//    public function tags()
//    {
//        return $this->morphToMany('App\Tag', 'taggable');
//    }

    protected $fillable = [
      'title', 'user_id'
    ];
}
