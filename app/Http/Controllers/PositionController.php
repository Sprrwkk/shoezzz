<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    //
    public function getPositions()
    {
        $positions = Position::all();

        return response($positions, 200);
    }
}
