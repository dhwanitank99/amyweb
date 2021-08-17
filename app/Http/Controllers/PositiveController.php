<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PositiveController extends Controller
{
    public function index(){
        return view('positive-energy');
    }
}
