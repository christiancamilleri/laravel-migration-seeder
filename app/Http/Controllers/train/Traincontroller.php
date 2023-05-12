<?php

namespace App\Http\Controllers\train;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class Traincontroller extends Controller
{
    public function index()
    {
        $trains = Train::all()->where('orario_di_partenza', '>=', now());

        // dd($trains);

        return view('home', compact('trains'));
    }
}
