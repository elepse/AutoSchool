<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Plan
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Plan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Plan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Plan query()
 * @mixin \Eloquent
 */
class Plan extends Model
{
    protected $table = 'plans';
    protected $primaryKey = 'plan_id';
    protected $guarded = [];
    public $timestamps = false;

}
