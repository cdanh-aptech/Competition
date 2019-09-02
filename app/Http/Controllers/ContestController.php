<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contest;
use App\BanToChuc;
use App\GiamKhao;
use App\Slide;
use App\TacPham;
use App\Result;

class ContestController extends Controller
{
    //
    public function getDanhSach()
    {
        $contest = Contest::all();
        return view('admin.contest.danhsach',['contest'=>$contest]);
    }

    //
    public function getSua()
    {
        
    }

    //
    public function getThem()
    {
        
    }
}
