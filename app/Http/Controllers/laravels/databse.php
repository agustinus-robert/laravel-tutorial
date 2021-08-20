<?php

namespace App\Http\Controllers\laravels;

use App\gameModel as gm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class databse extends Controller
{
    //
    public function models_when(){
        $rating = 3;
        $data['vars'] = gm::when($rating == 1, function($q, $rating){
            return $q->select('nama')->where('rating','=',$rating);
        }, function($q){
            return $q->select('nama')->where('rating', '>', 1);
        })->get()->toArray();
        
        return view('laravels.view_model_when', $data);
    }
}
