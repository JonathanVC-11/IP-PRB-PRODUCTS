<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lomascompradoController extends Controller
{
    public function index(){
        return view('lomascomprado.index');
    }
}
