<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        $trainsList= Train::all();
        return view('guest.trains.index', compact('trainsList'));
    }
}
