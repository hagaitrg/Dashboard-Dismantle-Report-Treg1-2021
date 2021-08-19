<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dismantle extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the Dismantle
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function month()
    {
        return $this->belongsTo(Month::class);
    }

    /**
     * Get the user that owns the Dismantle
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
}
