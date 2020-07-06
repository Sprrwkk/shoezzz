<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //
    protected $primaryKey = 'position_id';

    public function worker()
    {
        return $this->hasMany(Worker::class);
    }
}
