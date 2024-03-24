<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }
}
