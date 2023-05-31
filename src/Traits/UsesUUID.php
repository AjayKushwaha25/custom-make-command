<?php

namespace AjayKushwaha25\CustomMakeCommand\Traits;

use Illuminate\Support\Str;

trait UsesUUID
{
   /**
     * Boot function from Laravel.
     */
    protected static function bootUsesUuid(): void
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
     */
    public function getIncrementing(): bool
    {
        return false;
    }
   /**
     * Get the auto-incrementing key type.
     *
     */
    public function getKeyType(): string
    {
        return 'string';
    }
}
