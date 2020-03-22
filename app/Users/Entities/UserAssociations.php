<?php

namespace App\Users\Entities;

use App\Models\Helpers;
use Illuminate\Database\Eloquent\Relations\MorphPivot;

class UserAssociations extends MorphPivot
{
    use Helpers;

    /**
     * The user abilities
     * @var array
     */
    protected $casts = ['abilities' => 'json'];
}