<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    use HasFactory;

    /**
     * Get all of the comments for the Month
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dismantles()
    {
        return $this->hasMany(Dismantle::class);
    }

    /**
     * Get the user that owns the Month
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recabp23()
    {
        return $this->hasOne(recabp23::class);
    }

}
