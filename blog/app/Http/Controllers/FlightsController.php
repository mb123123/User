<?php
namespace App\Http\Controllers;

use App\http\Controller\RESTORE;
use App\Flight;

use App\qaward;
// use App\Phone;

class FlightsController extends Controller{

public function a(){
    //all方法返回所有结果
    // $flights = \App\Flight::all();
    // foreach ($flights as $flight) {
    //     // echo $flight->phone."\n";
    // }
    //
    
    // $flight = \App\Flight::where('id','>','2')
    //             // ->orderBy('ts','desc')   //排序
    //             ->take(3)
    //             ->get();
    // echo $flight;

    // $flight = \App\Flight::create(['id' => '57']);
    // echo $flight;
    // $flight = \App\Flight::firstOrNew(['id' => '58']);

    // $flight=\App\Flight::updateOrCreate(
    //     ['id'=>56],
    //     ['ts'=>333,'answer'=>'aaaaaa','phone'=>333333]);
    
    // $flight = \App\Flight::find(57);
    // echo $flight;
    // $flight->delete();

    // \App\Flight::destroy(56,57);  //匹配主键 删除模型

    //检索软删除模型
    // $flights = \App\Flight::onlyTrashed()
    // ->where('id', 56)
    // ->get();
    // echo $flights;

    //恢复所有软删除模型
    // \App\Flight::withTrashed() ->restore();
    //恢复单个软删除模型
    // \App\Flight::withTrashed()->where('id','56') ->restore();

    // 单个模型实例的永久删除...
    // \App\Flight::where('id','56')->forceDelete();
    // $currency_score_log = qaward::find(1)->uid;
    // var_dump($currency_score_log.'1');
}
}