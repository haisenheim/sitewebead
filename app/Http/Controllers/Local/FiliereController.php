<?php

namespace App\Http\Controllers\Local;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FiliereController extends Controller
{
    //
    public function index(){
        return view('local/filieres/index');
    }
}
