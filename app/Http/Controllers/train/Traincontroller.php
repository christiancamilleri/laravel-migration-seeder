<?php

namespace App\Http\Controllers\train;

use App\Http\Controllers\Controller;
use App\Models\train;
use Illuminate\Http\Request;

class Traincontroller extends Controller
{
    public function index()
    {
        $trains = train::all();

        // dd($trains);

        return view('home', compact('trains'));
    }
}
