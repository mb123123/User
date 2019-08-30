<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class currency_score_log extends Model
{
    //
    public $table='currency_score_log';
    public function qaward()
    {
        return $this->belongsTo('App\qaward');
        

    }
}
