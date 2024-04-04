<?php

declare(strict_types=1);

namespace App\Model;

/**
 */
class Link extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'links';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = [];
}
