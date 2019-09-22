<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contest;
use App\TheLoai;
use App\GiamKhao;
use App\Slide;
use App\TacPham;
use App\Result;

class ContestController extends Controller
{
    // Danh sách Cuộc thi
    public function getDanhSach()
    {
        $contest = Contest::all();
        return view('admin.contest.danhsach',['contest'=>$contest]);
    }

    // Thêm Cuộc thi
    public function getThem()
    {
        return view('admin.contest.them');
    }

    // Thêm Cuộc thi
    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'txt_Ten' => 'required|min:8|max:100',
                'txt_Date_begin' => 'required',
                'txt_Date_end' => 'required',
                'txt_Date_result' => 'required',
                // 'txt_NoiDung' => 'required|min:8',
                'txt_TheLe' => 'required|min:8',
                // 'txt_TheLe_tomtat' => 'required|min:8',
                // 'txt_QuyCach' => 'required|min:8',
                'txt_PhuongThuc' => 'required|min:8',
                // 'txt_DoiTuong' => 'required|min:8',
                'txt_GiaiThuong' => 'required|min:8',
                'txt_BanToChuc' => 'required|min:8',
                'txt_BanGiamKhao' => 'required|min:8'
            ],
            [
                'txt_Ten.required' => 'Bạn chưa nhập TÊN cuộc thi',
                'txt_Ten.min' => 'Tên cuộc thi tối thiểu 8 ký tự và tối đa 100 ký tự',
                'txt_Ten.max' => 'Tên cuộc thi tối thiểu 8 ký tự và tối đa 100 ký tự',
                'txt_Date_begin.required' => 'Bạn chưa nhập NGÀY BẮT ĐẦU',
                'txt_Date_end.required' => 'Bạn chưa nhập NGÀY KẾT THÚC',
                'txt_Date_result.required' => 'Bạn chưa nhập NGÀY KẾT QUẢ',
                // 'txt_NoiDung.required' => 'Bạn chưa nhập NỘI DUNG cuộc thi',
                // 'txt_NoiDung.min' => 'NỘI DUNG cuộc thi tối thiểu 8 ký tự',
                'txt_TheLe.required' => 'Bạn chưa nhập THỂ LỆ cuộc thi',
                'txt_TheLe.min' => 'THỂ LỆ cuộc thi tối thiểu 8 ký tự',
                // 'txt_TheLe_tomtat.required' => 'Bạn chưa nhập THỂ LỆ TÓM TẮT cuộc thi',
                // 'txt_TheLe_tomtat.min' => 'THỂ LỆ TÓM TẮT cuộc thi tối thiểu 8 ký tự',
                // 'txt_QuyCach.required' => 'Bạn chưa nhập QUY CÁCH cuộc thi',
                // 'txt_QuyCach.min' => 'QUY CÁCH cuộc thi tối thiểu 8 ký tự',
                'txt_PhuongThuc.required' => 'Bạn chưa nhập PHƯƠNG THỨC cuộc thi',
                'txt_PhuongThuc.min' => 'PHƯƠNG THỨC cuộc thi tối thiểu 8 ký tự',
                // 'txt_DoiTuong.required' => 'Bạn chưa nhập ĐỐI TƯỢNG cuộc thi',
                // 'txt_DoiTuong.min' => 'ĐỐI TƯỢNG cuộc thi tối thiểu 8 ký tự',
                'txt_GiaiThuong.required' => 'Bạn chưa nhập GIẢI THƯỞNG cuộc thi',
                'txt_GiaiThuong.min' => 'GIẢI THƯỞNG cuộc thi tối thiểu 8 ký tự',
                'txt_BanToChuc.required' => 'Bạn chưa nhập BAN TỔ CHỨC cuộc thi',
                'txt_BanToChuc.min' => 'BAN TỔ CHỨC cuộc thi tối thiểu 8 ký tự',
                'txt_BanGiamKhao.required' => 'Bạn chưa nhập BAN GIÁM KHẢO cuộc thi',
                'txt_BanGiamKhao.min' => 'BAN GIÁM KHẢO cuộc thi tối thiểu 8 ký tự',
            ]);
        
        $contest = new Contest;
        $contest->Ten = $request->txt_Ten;
        $contest->Date_begin =$request->txt_Date_begin;
        $contest->Date_end =$request->txt_Date_end;
        $contest->Date_result =$request->txt_Date_result;
        // $contest->Noidung =$request->txt_NoiDung;
        $contest->Thele =$request->txt_TheLe;
        // $contest->Thele_tomtat =$request->txt_TheLe_tomtat;
        // $contest->Quycach =$request->txt_QuyCach;
        $contest->Phuongthuc =$request->txt_PhuongThuc;
        // $contest->Doituong =$request->txt_DoiTuong;
        $contest->Giaithuong =$request->txt_GiaiThuong;
        $contest->Bantochuc =$request->txt_BanToChuc;
        $contest->Bangiamkhao =$request->txt_BanGiamKhao;
        $contest->save();

        return redirect('admin/contest/them')->with('thongbao','Thêm thành công!');
    }

    //Sửa Cuộc thi
    public function getSua($id)
    {
        $contest = Contest::find($id);
        return view('admin.contest.sua', ['contest' => $contest]);
    }

    //Sửa Cuộc thi
    public function postSua(Request $request, $id)
    {
        $contest = Contest::find($id);
        // $contestAll = Contest::all();

        $this->validate($request,
            [
                'txt_Ten' => 'required|min:8|max:100',
                'txt_Date_begin' => 'required',
                'txt_Date_end' => 'required',
                'txt_Date_result' => 'required',
                // 'txt_NoiDung' => 'required|min:8',
                'txt_TheLe' => 'required|min:8',
                // 'txt_TheLe_tomtat' => 'required|min:8',
                // 'txt_QuyCach' => 'required|min:8',
                'txt_PhuongThuc' => 'required|min:8',
                // 'txt_DoiTuong' => 'required|min:8',
                'txt_GiaiThuong' => 'required|min:8',
                'txt_BanToChuc' => 'required|min:8',
                'txt_BanGiamKhao' => 'required|min:8'
            ],
            [
                'txt_Ten.required' => 'Bạn chưa nhập TÊN cuộc thi',
                'txt_Ten.min' => 'Tên cuộc thi tối thiểu 8 ký tự và tối đa 100 ký tự',
                'txt_Ten.max' => 'Tên cuộc thi tối thiểu 8 ký tự và tối đa 100 ký tự',
                'txt_Date_begin.required' => 'Bạn chưa nhập NGÀY BẮT ĐẦU',
                'txt_Date_end.required' => 'Bạn chưa nhập NGÀY KẾT THÚC',
                'txt_Date_result.required' => 'Bạn chưa nhập NGÀY KẾT QUẢ',
                // 'txt_NoiDung.required' => 'Bạn chưa nhập NỘI DUNG cuộc thi',
                // 'txt_NoiDung.min' => 'NỘI DUNG cuộc thi tối thiểu 8 ký tự',
                'txt_TheLe.required' => 'Bạn chưa nhập THỂ LỆ cuộc thi',
                'txt_TheLe.min' => 'THỂ LỆ cuộc thi tối thiểu 8 ký tự',
                // 'txt_TheLe_tomtat.required' => 'Bạn chưa nhập THỂ LỆ TÓM TẮT cuộc thi',
                // 'txt_TheLe_tomtat.min' => 'THỂ LỆ TÓM TẮT cuộc thi tối thiểu 8 ký tự',
                // 'txt_QuyCach.required' => 'Bạn chưa nhập QUY CÁCH cuộc thi',
                // 'txt_QuyCach.min' => 'QUY CÁCH cuộc thi tối thiểu 8 ký tự',
                'txt_PhuongThuc.required' => 'Bạn chưa nhập PHƯƠNG THỨC cuộc thi',
                'txt_PhuongThuc.min' => 'PHƯƠNG THỨC cuộc thi tối thiểu 8 ký tự',
                // 'txt_DoiTuong.required' => 'Bạn chưa nhập ĐỐI TƯỢNG cuộc thi',
                // 'txt_DoiTuong.min' => 'ĐỐI TƯỢNG cuộc thi tối thiểu 8 ký tự',
                'txt_GiaiThuong.required' => 'Bạn chưa nhập GIẢI THƯỞNG cuộc thi',
                'txt_GiaiThuong.min' => 'GIẢI THƯỞNG cuộc thi tối thiểu 8 ký tự',
                'txt_BanToChuc.required' => 'Bạn chưa nhập BAN TỔ CHỨC cuộc thi',
                'txt_BanToChuc.min' => 'BAN TỔ CHỨC cuộc thi tối thiểu 8 ký tự',
                'txt_BanGiamKhao.required' => 'Bạn chưa nhập BAN GIÁM KHẢO cuộc thi',
                'txt_BanGiamKhao.min' => 'BAN GIÁM KHẢO cuộc thi tối thiểu 8 ký tự',
            ]);

        $contest->Ten = $request->txt_Ten;
        $contest->Date_begin =$request->txt_Date_begin;
        $contest->Date_end =$request->txt_Date_end;
        $contest->Date_result =$request->txt_Date_result;
        // $contest->Noidung =$request->txt_NoiDung;
        $contest->Thele =$request->txt_TheLe;
        // $contest->Thele_tomtat =$request->txt_TheLe_tomtat;
        // $contest->Quycach =$request->txt_QuyCach;
        $contest->Phuongthuc =$request->txt_PhuongThuc;
        // $contest->Doituong =$request->txt_DoiTuong;
        $contest->Giaithuong =$request->txt_GiaiThuong;
        $contest->Bantochuc =$request->txt_BanToChuc;
        $contest->Bangiamkhao =$request->txt_BanGiamKhao;

        if($request->sel_Active == 1 && $contest->Active == 0)
        {
            Contest::where('Active',1)->update(['Active'=>'0']);
            $contest->Active = $request->sel_Active;
        }
        else $contest->Active = $request->sel_Active;

        $contest->save();

        return redirect('admin/contest/sua/'.$id)->with('thongbao', 'Cập nhật thành công');
    }

    //Xóa Cuộc thi
    public function getXoa($id)
    {
        $contest = Contest::find($id);
        $contest->delete();

        return redirect('admin/contest/danhsach');
    }

}
