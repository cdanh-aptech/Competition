<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contest;
use App\BanToChuc;
use App\GiamKhao;
use App\Slide;
use App\TacPham;
use App\Result;

class BanToChucController extends Controller
{
    public function getDanhSach()
    {
        $bantochuc = BanToChuc::all();
        return view('admin.bantochuc.danhsach',['bantochuc'=>$bantochuc]);
    }

    // Thêm Ban tổ chức
    public function getThem()
    {
        $contest = Contest::all();
        return view('admin.bantochuc.them', ['contest'=>$contest]);
    }

    // Thêm Ban tổ chức
    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'txt_ThanhPhan' => 'required|min:8',
                'sel_CuocThi' => 'required',
            ],
            [
                'txt_ThanhPhan.required' => 'Bạn chưa nhập THÀNH PHẦN Ban Tổ Chức',
                'txt_ThanhPhan.min' => 'THÀNH PHẦN tối thiểu 8 ký tự',
                'sel_CuocThi.required' => 'Bạn chưa chọn CUỘC THI',
                
            ]);
        
        $bantochuc = new BanToChuc;
        $bantochuc->Thanhphan = $request->txt_ThanhPhan;
        $bantochuc->id_contest =$request->sel_CuocThi;
        
        $bantochuc->save();

        return redirect('admin/bantochuc/them')->with('thongbao','Thêm thành công!');
    }
}
