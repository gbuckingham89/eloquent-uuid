<?php

namespace Gbuckingham89\EloquentUuid\Traits;

use Illuminate\Support\Str;

/**
 * Class UuidForKey
 * @package Gbuckingham89\EloquentUuid\Traits
 */
trait UuidForKey
{

    /**
     * Stop the model thinking it has an incrementing ID
     *
     * @return bool
     */
    public function getIncrementing() : bool
    {
        return false;
    }

    /**
     * Hook into the 'creating' method to set the key to be a UUID
     *
     * @return void
     */
    public static function bootUuidForKey()
    {
        static::creating(function ($model) {
            $model->incrementing = false;
            $model->attributes[$model->getKeyName()] = (string) Str::orderedUuid();
        });
    }

}