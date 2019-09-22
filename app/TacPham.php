<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TacPham extends Model
{
    //
    protected $table = "TacPham";

    public function contest()
    {
        return $this->belongsTo('App\Contest','id_contest','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','id_user','id');
    }

    public function theloai()
    {
        return $this->belongsTo('App\TheLoai','id_theloai','id');
    }
}
