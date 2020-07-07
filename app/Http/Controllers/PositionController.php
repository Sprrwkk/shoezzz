<?php

namespace App\Http\Controllers;

use App\Position;
use App\Worker;
use Illuminate\Http\Request;



class PositionController extends Controller
{

    public function getPositions()
    {

        $positions = Position::all();

        return response($positions, 200);
    }



    public function getPositionById($position_id)
    {

        $position = Position::findOrFail($position_id);

        return response($position, 200);
    }



    public function createPosition(Request $request)
    {

        $position = new Position;

        $position->position_name = $request->position_name;

        $position->save();

        return response($position, 200);
    }



    public function editPosition($position_id, Request $request) {

        $position = Position::findOrFail($position_id);

        $input = $request -> all();

        $key = key($input);
        $value = $input[$key];

        $position[$key] = $value;

        $position -> save();

        return response($position, 200);
    }



    public function removePositionById($position_id) {

        $position = Position::findOrFail($position_id);

        $position -> delete();

        return response(200);
    }
}
