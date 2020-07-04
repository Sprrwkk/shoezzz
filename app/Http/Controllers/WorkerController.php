<?php

namespace App\Http\Controllers;

use App\Position;
use App\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    //
    public function getWorkers()
    {
        $workers = Worker::with('position')->get();

        return response($workers, 200);
    }
}
