<?php

namespace AjayKushwaha25\CustomMakeCommand\Helpers;

use Illuminate\Support\Str;
// dd('re');

trait UsesUUID
{
   /**
     * Boot function from Laravel.
     */
    protected static function bootUsesUuid()
    {
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }
   /**
     * Get the value indicating whether the IDs are incrementing.
     *
     * @return bool
     */
    public function getIncrementing()
    {
        return false;
    }
   /**
     * Get the auto-incrementing key type.
     *
     * @return string
     */
    public function getKeyType()
    {
        return 'string';
    }
}
