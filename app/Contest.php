<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    //
    protected $table = "Contest";

    public function theloai()
    {
        return $this->hasMany('App\TheLoai','id_contest','id');
    }


    public function slide()
    {
        return $this->hasMany('App\Slide','id_contest','id');
    }

    public function tacpham()
    {
        return $this->hasMany('App\TacPham','id_contest','id');
    }

    public function result()
    {
        return $this->hasMany('App\Result','id_contest','id');
    }
}
