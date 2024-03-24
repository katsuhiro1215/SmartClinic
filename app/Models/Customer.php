<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class Customer extends BaseModel
{
    use HasFactory;

    protected $guarded = [];

    public function customerInformation()
    {
        return $this->hasOne(CustomerInformation::class);
    }
}
