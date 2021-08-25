<?php

namespace App\Http\Controllers\datatables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatatablesController extends Controller
{
    //
    public function index(){
        return View('datatables.indexdata');
    }
}
