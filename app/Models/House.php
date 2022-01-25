<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    /**
     * Get the offer that owns the house.
     */
    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
