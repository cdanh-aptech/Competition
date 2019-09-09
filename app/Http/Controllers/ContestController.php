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
        return view('admin.contest.them');
    }

    //
    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'txt_Ten' => 'required|min:8|max:100',
                'txt_Date_begin' => 'required',
                'txt_Date_end' => 'required',
                'txt_Date_result' => 'required',
                'txt_NoiDung' => 'required|min:8',
                'txt_QuyDinh' => 'required|min:8',
                'txt_QuyCach' => 'required|min:8',
                'txt_PhuongThuc' => 'required|min:8',
                'txt_DoiTuong' => 'required|min:8',
                'txt_GiaiThuong' => 'required|min:8'
            ],
            [
                'txt_Ten.required' => 'Bạn chưa nhập TÊN cuộc thi',
                'txt_Ten.min' => 'Tên cuộc thi tối thiểu 8 ký tự và tối đa 100 ký tự',
                'txt_Ten.max' => 'Tên cuộc thi tối thiểu 8 ký tự và tối đa 100 ký tự',
                'txt_Date_begin.required' => 'Bạn chưa nhập NGÀY BẮT ĐẦU',
                'txt_Date_end.required' => 'Bạn chưa nhập NGÀY KẾT THÚC',
                'txt_Date_result.required' => 'Bạn chưa nhập NGÀY KẾT QUẢ',
                'txt_NoiDung.required' => 'Bạn chưa nhập NỘI DUNG cuộc thi',
                'txt_NoiDung.min' => 'NỘI DUNG cuộc thi tối thiểu 8 ký tự',
                'txt_QuyDinh.required' => 'Bạn chưa nhập QUY ĐỊNH cuộc thi',
                'txt_QuyDinh.min' => 'QUY ĐỊNH cuộc thi tối thiểu 8 ký tự',
                'txt_QuyCach.required' => 'Bạn chưa nhập QUY CÁCH cuộc thi',
                'txt_QuyCach.min' => 'QUY CÁCH cuộc thi tối thiểu 8 ký tự',
                'txt_PhuongThuc.required' => 'Bạn chưa nhập PHƯƠNG THỨC cuộc thi',
                'txt_PhuongThuc.min' => 'PHƯƠNG THỨC cuộc thi tối thiểu 8 ký tự',
                'txt_DoiTuong.required' => 'Bạn chưa nhập ĐỐI TƯỢNG cuộc thi',
                'txt_DoiTuong.min' => 'ĐỐI TƯỢNG cuộc thi tối thiểu 8 ký tự',
                'txt_GiaiThuong.required' => 'Bạn chưa nhập GIẢI THƯỞNG cuộc thi',
                'txt_GiaiThuong.min' => 'GIẢI THƯỞNG cuộc thi tối thiểu 8 ký tự'
            ]);
        
        $contest = new Contest;
        $contest->Ten = $request->txt_Ten;
        $contest->Date_begin =$request->txt_Date_begin;
        $contest->Date_end =$request->txt_Date_end;
        $contest->Date_result =$request->txt_Date_result;
        $contest->Noidung =$request->txt_NoiDung;
        $contest->Quydinh =$request->txt_QuyDinh;
        $contest->Quycach =$request->txt_QuyCach;
        $contest->Phuongthuc =$request->txt_PhuongThuc;
        $contest->Doituong =$request->txt_DoiTuong;
        $contest->Giaithuong =$request->txt_GiaiThuong;
        $contest->save();

        return redirect('admin/contest/them')->with('thongbao','Thêm thành công!');
    }
}
