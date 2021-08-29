<?php

namespace App\Http\Controllers\hydrate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class hydrate extends Controller
{
    public $nama;
    public $hydr;
    
    public function mount(){
        $this->nama = "agus";
    }
    
    public function hydrate(){
        $this->hydr = "robert";
    }
    
    public function index(){
        return View('hydrate.index');
    }
}
