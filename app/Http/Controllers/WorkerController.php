<?php

namespace App\Http\Controllers;

use App\Position;
use App\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkerController extends Controller
{

    public function getWorkers() {
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

        $worker -> save();

        return response($worker, 200);

    }



    public function addAvatar($worker_id, Request $request) {

        $worker = Worker::findOrFail($worker_id);

        $file = $request->file('avatar_image');
        $file->store('files');

        $worker -> avatar_image = $file->getClientOriginalName();

        $worker -> save();

        return response($worker, 200);

    }



    public function editWorker($worker_id, Request $request) {

        $worker = Worker::findOrFail($worker_id);

        $input = $request->all();

        foreach ($input as $key=>$value) {
            $worker -> $key = $input[$key];
        }

        $worker -> save();

        return response($worker, 200);
    }



    public function removeWorkerById($worker_id) {

        $worker = Worker::findOrFail($worker_id);

        $worker->delete();

        return response(200);
    }

}
