<?php

namespace App\Http\Controllers;

use App\Position;
use App\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkerController extends Controller
{
    //
    public function getWorkers()
    {
        $workers = Worker::with('position')->get();

        return response($workers, 200);
    }


    public function getWorkerById($worker_id) {
        $worker = Worker::with('position')->findOrFail($worker_id);

        return response($worker, 200);
    }


    public function createWorker(Request $request) {

        $worker = new Worker;

        $worker -> first_name = $request -> first_name;
        $worker -> last_name = $request -> last_name;
        $worker -> birthday = $request -> birthday;
        $worker -> position = $request -> position;
        $worker -> active = $request -> active;
        $worker -> avatar_image= $request -> avatar_image;

        $worker -> save();

        return response($worker, 200);
    }


    public function editWorkerInformation($worker_id, Request $request)

    {
        $worker = Worker::findOrFail($worker_id);
        if (!$worker) {
            abort(404);
        }


        $input = $request->all();

        $key = key($input);
        $value = $input[$key];

        $worker[$key] = $value;
        $worker -> save();

        return response($worker, 200);
    }


    public function removeWorkerById($id) {
        $worker = Worker::findOrFail($id);

        $worker->delete();

        return response(200);
    }

}
