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
                'txt_ThanhPhanBTC' => 'required|min:8',
                'txt_ThanhPhanGK' => 'required|min:8',
                'sel_CuocThi' => 'required',
            ],
            [
                'txt_ThanhPhanBTC.required' => 'Bạn chưa nhập THÀNH PHẦN Ban Tổ Chức',
                'txt_ThanhPhanBTC.min' => 'THÀNH PHẦN Ban Tổ Chức tối thiểu 8 ký tự',
                'txt_ThanhPhanGK.required' => 'Bạn chưa nhập THÀNH PHẦN Giám Khảo',
                'txt_ThanhPhanGK.min' => 'THÀNH PHẦN Giám Khảo tối thiểu 8 ký tự',
                'sel_CuocThi.required' => 'Bạn chưa chọn CUỘC THI',
                
            ]);
        
        $bantochuc = new BanToChuc;
        $bantochuc->ThanhphanBTC = $request->txt_ThanhPhanBTC;
        $bantochuc->ThanhphanGK = $request->txt_ThanhPhanGK;
        $bantochuc->id_contest =$request->sel_CuocThi;
        
        $bantochuc->save();

        return redirect('admin/bantochuc/them')->with('thongbao','Thêm thành công!');
    }

    public function getSua($id)
    {
        $contest = Contest::all();
        $bantochuc = BanToChuc::find($id);
        return view('admin.bantochuc.sua', ['bantochuc'=>$bantochuc, 'contest'=>$contest]);
    }

    public function postSua(Request $request, $id)
    {
        $bantochuc = BanToChuc::find($id);

        $this->validate($request,
            [
                'txt_ThanhPhanBTC' => 'required|min:8',
                'txt_ThanhPhanGK' => 'required|min:8',
                'sel_CuocThi' => 'required',
            ],
            [
                'txt_ThanhPhanBTC.required' => 'Bạn chưa nhập THÀNH PHẦN Ban Tổ Chức',
                'txt_ThanhPhanBTC.min' => 'THÀNH PHẦN Ban Tổ Chức tối thiểu 8 ký tự',
                'txt_ThanhPhanGK.required' => 'Bạn chưa nhập THÀNH PHẦN Giám Khảo',
                'txt_ThanhPhanGK.min' => 'THÀNH PHẦN Giám Khảo tối thiểu 8 ký tự',
                'sel_CuocThi.required' => 'Bạn chưa chọn CUỘC THI',
                
            ]);
        
      
        $bantochuc->ThanhphanBTC = $request->txt_ThanhPhanBTC;
        $bantochuc->ThanhphanGK = $request->txt_ThanhPhanGK;
        $bantochuc->id_contest =$request->sel_CuocThi;
        
        $bantochuc->save();

        return redirect('admin/bantochuc/sua/'.$id)->with('thongbao','Cập nhật thành công!');
    }

    public function getXoa($id)
    {
        $bantochuc = BanToChuc::find($id);
        $bantochuc->delete();

        return redirect('admin/bantochuc/danhsach');
    }
}
