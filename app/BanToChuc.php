<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BanToChuc extends Model
{
    //
    protected $table = "BanToChuc";

    public function contest()
    {
        return $this->belongsTo('App\Contest','id_contest','id');
    }
}
