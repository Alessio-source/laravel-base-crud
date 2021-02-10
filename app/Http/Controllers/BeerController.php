<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\beer;

class BeerController extends Controller
{
    function index() {
        $beer = beer::all();
        return view('home', compact('beer'));
    }
}
