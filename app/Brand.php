<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $primaryKey = 'brand_id';

    public function product() {
        return $this->hasMany(Product::class);
    }
}
