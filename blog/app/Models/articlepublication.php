<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;   //软删除
class articlepublication extends Model
{
    //
    use SoftDeletes;    //导入软删除
    public $table='articlepublication';
    
    // protected $fillable = ['article_id','article_author','article_title','article_Content','created_at','updated_at'];
    public function comments()
    {
        return $this->hasOne(comments::class);
    }
}

