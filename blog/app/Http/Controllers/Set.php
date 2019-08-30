<?php

namespace App\Http\Controllers;
use App\qaward;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
class Set extends Controller
{
    //
    public function a(){
    //     $qaward=\App\qaward::all();
        
    //     $test=$qaward->reverse();
    //     $test->all();
    //     echo $test;
    // 
    $qaward=\App\qaward::find(1);
    $answer=$qaward->answer;
    // var_dump($answer);
    // $answer['key']='value';
    // $qaward->answer=$answer;
    // var_dump($answer);
    $qaward->save();

    $qawardts=\app\qaward::find(1);
    $ts=$qaward->ts;
    // var_dump($ts);
    echo $ts;
    }
    
}
