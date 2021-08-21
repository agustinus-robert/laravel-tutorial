<?php

namespace App\Http\Controllers\chart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class charts extends Controller
{
    //
    public function index_chart(){
        return View('chart.index_chart');
    }
}
