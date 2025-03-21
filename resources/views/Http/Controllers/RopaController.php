<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RopaController extends Controller
{
    public function index(){
        return view('ropa.index');
    }
}
