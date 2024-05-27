<?php

namespace App\Http\Controllers;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {

        $trains = Train::whereDate('orario_di_partenza', today())->get();

    return view('home', compact('trains'));
    }
}
