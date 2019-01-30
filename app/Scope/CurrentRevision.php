<?php
/**
 * Created by PhpStorm.
 * User: z.stepcheva
 * Date: 30.01.2019
 * Time: 16:48
 */

namespace App\Scope;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class CurrentRevision implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        $builder->whereNotNull('prev_post_id');
    }
}

