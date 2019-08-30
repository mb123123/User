<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;   //软删除

class Flight extends Model
{
    //
    use SoftDeletes;    //导入软删除
    protected $table='qaward'; //指定表
    public $timestamps=false;   //不管理created_at 和 updated_at
    protected $dateFormat='U';  //时间戳默认格式
    // protected $attributes = [
    //     'delayed' => false,
    // ];

    protected $fillable = ['id','ts','answer','phone']; //你只能使用 $fillable 白名单 或 $guarded 黑名单 二者中的一个，不可同时使用




}
