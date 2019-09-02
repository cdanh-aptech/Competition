<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    //
    protected $table = "Slide";

    public function contest()
    {
        return $this->belongsTo('App\Contest','id_contest','id');
    }
}
