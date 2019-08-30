<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;   //软删除
class comments extends Model
{
    //
    use SoftDeletes;    //导入软删除
    public $table='comments';
    
    // protected $fillable = ['id','article_id','comment_name','comment_content','author_reply_content','created_at','updated_at'];
    public function articlepublication()
    {
        return $this->belongsTo(articlepublication::class);
    }
}
