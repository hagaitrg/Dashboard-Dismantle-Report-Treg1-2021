<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dismantle extends Model
{
    use HasFactory;

    protected function prepareForValidation()
    {
        $this->merge([
            'evidence' => (bool) $this->evidence,
        ]);
    }


    /**
     * Get the user that owns the Dismantle
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function month()
    {
        return $this->belongsTo(Month::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    /**
     * Get the user that owns the Dismantle
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
}
