<?php

namespace App\Http\Controllers;

use App\Events\ScoreEvent;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){

        return view('front.showscoe');
    }

    public function addScore(){
        return view('front.score ');
    }
    public function updateScore(Request $request){
          

       $scoreValue = $request->input('score');
        
       event(new ScoreEvent($scoreValue));
       return $scoreValue;
    }
}
