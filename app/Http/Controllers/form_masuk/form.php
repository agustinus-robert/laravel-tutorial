<?php

namespace App\Http\Controllers\form_masuk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class form extends Controller
{
    //
    public function index(){
        return View('formMasuk.index');
    }
}
