<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::all();
        // dd($trains);

        return view('trains.index', compact('trains'));
    }
}
