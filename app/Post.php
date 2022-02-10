<?php

namespace App;

use App\Scopes\StatusScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
//    protected $table = 'my_posts';

//    protected $primaryKey = 'post_id';
//    public $incrementing = false;
//    protected $keyType = 'string';
//    public $timestamps = false;
//    const created_at = 'creation_date';
//    protected $attributes = [
//        'status' => false
    //    ];

//    protected $guarded = ['id'];

//    protected static function boot()
//    {
//        parent::boot();
//        static::addGlobalScope(new StatusScope());
//    }

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('user_id', function (Builder $builder){
            $builder->where('user_id', 5);
        });
    }

}
