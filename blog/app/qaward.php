<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class qaward extends Model
{   
    public $table='qaward';
    // protected $casts = [
    //     'answer' => 'array',
    //     'ts' => 'datetime:Y-m-d'
    // ];
    
    
    public function currency_score_log()
    {
        return $this->hasOne('App\currency_score_log');
        

    }


}
