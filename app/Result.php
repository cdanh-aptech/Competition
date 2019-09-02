<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //
    protected $table = "Result";

    public function contest()
    {
        return $this->belongsTo('App\Contest','id_contest','id');
    }
}
