<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Worker extends Model



{
    //
    protected $primaryKey = 'worker_id';

    public function position()
    {
        return $this->belongsTo('App\Position', 'position', 'position_id');
    }
}


