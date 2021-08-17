<?php

namespace App\Http\Controllers\image;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class main extends Controller
{
    //
    public function index(){
        return view('image.main');
    }
}
