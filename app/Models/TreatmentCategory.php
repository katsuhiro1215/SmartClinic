<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreatmentCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function treatments()
    {
        return $this->hasMany(Treatment::class);
    }
}
