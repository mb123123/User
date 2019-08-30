<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller {
    public function test1(){
        $student=DB::select("select * from qaward");
        // foreach ($student as $user) {
        //     echo $user->ts.'/n';
        // }
        var_dump($student);
        //返回一个二维数组  $student
        // $arr1=json_decode(json_encode($student),true);
        // foreach($arr1 as $value){
        //     print_r($value);
        //     echo "\n";
        // }
        // $student=DB::table("qaward")->first();//结果集第一条
        // $results = DB::select('select * from qaward where id = :id', ['id' => 1]);
        // $student=DB::table("qaward")->count();
        // var_dump($student);
        //以节点树的形式输出结果
        // dd($student);
    }

    
}
