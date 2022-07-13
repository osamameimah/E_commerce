<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AttributeValue;


class ProductAttribute extends Model
{
    use HasFactory;

    public function attributeValues()
    {
        return $this->hasMany(AttributeValue::class);
    }
}
