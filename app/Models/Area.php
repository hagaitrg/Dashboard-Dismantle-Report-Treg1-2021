<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
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
        return $this->belongsTo(recabp23::class);
    }
}
