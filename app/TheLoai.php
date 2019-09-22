<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    //
    protected $table = "TheLoai";

    public function contest()
    {
        return $this->belongsTo('App\Contest','id_contest','id');
    }

    public function tacpham()
    {
        return $this->hasMany('App\TacPham','id_theloai','id');
    }
}
