<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function treatmentCategory()
    {
        return $this->belongsTo(TreatmentCategory::class);
    }
}
