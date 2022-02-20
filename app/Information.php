<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Information
 *
 * @property int $id
 * @property string $color
 * @property int $car_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Information newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Information newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Information query()
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereCarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Information extends Model
{
    protected  $table = 'informations';
}
