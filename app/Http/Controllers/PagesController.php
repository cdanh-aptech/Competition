<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contest;
use App\BanToChuc;
use App\GiamKhao;
use App\Slide;
use App\TacPham;
use App\Result;
use App\User;

class PagesController extends Controller
{
    function __construct()
    {
        $contest = Contest::where('Active',1)->get();
        $bantochuc = BanToChuc::all();
        $slide = Slide::all();
        $user = User::all();
        $tacpham = TacPham::all();
        view()->share('contest',$contest);
        view()->share('bantochuc',$bantochuc);
        view()->share('slide',$slide);
        view()->share('user',$user);
        view()->share('tacpham',$tacpham);
    }
    // Trang chủ
    public function getTrangChu()
    {
        return view('pages.trangchu');
    }

    // Đăng nhập
    public function getDangNhap()
    {
        return view('pages.dangnhap');
    }

    public function postDangNhap()
    {
        
    }
}
