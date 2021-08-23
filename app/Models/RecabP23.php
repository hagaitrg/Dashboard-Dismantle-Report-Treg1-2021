<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecabP23 extends Model
{
    use HasFactory;

    public function month()
    {
        return $this->belongsTo(Month::class);
    }

    public function area(){
        return $this->belongsTo(Area::class);
    }
}
