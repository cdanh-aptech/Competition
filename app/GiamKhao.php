<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiamKhao extends Model
{
    //
    protected $table = "GiamKhao";

    public function contest()
    {
        return $this->belongsTo('App\Contest','id_contest','id');
    }
}
