<?php

namespace App\Http\Controllers\laravels;

use App\gameModel as gm;
use App\ratingModel as rm;
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
    
    public function sub_query(){
        $hasil = gm::whereIn('rating', function($query){
           $query->select(rm::raw('nilai_rating'))->from('game_nilai_rating')->whereRaw('nilai_rating > 1'); 
        })->toSql();
        
        dd($hasil);
        
    }
}
