<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;   //软删除
use Illuminate\Database\Eloquent\Model;

class testssss extends Model
{
    //
    use SoftDeletes;    //导入软删除
    public $table='testssss';
    // protected $fillable = ['id','txt']; //你只能使用 $fillable 白名单 或 $guarded 黑名单 二者中的一个，不可同时使用


}
