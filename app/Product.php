<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id';
    //
    public function category() {
        return $this->belongsTo('App\Category', 'category', 'category_id');
    }

    public function brand() {
        return $this->belongsTo('App\Brand', 'brand', 'brand_id');
    }


}
