<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contest;
use App\TheLoai;
use App\GiamKhao;
use App\Slide;
use App\TacPham;
use App\Result;

class TheLoaiController extends Controller
{
    // Danh sách Thể loại
    public function getDanhSach()
    {
        $theloai = TheLoai::all();
        return view('admin.theloai.danhsach',['theloai'=>$theloai]);
    }

    // Thêm Thể loại
    public function getThem()
    {
        $contest = Contest::all();
        return view('admin.theloai.them', ['contest'=>$contest]);
    }

    // Thêm Thể loại
    public function postThem(Request $request)
    {
        // $theloai = TheLoai::find($id);
        // $contestAll = TheLoai::all();

        $this->validate($request,
            [
                'txt_Ten' => 'required|min:8|max:30',
                'txt_Ten_ChuDe' => 'required|min:8|max:300',
                // 'txt_MucDich' => 'required|min:8',
                // 'txt_DoiTuong' => 'required|min:8',
                // 'txt_NoiDung' => 'required|min:8',
                // 'txt_TheLe' => 'required|min:8',
                // 'txt_TheLe_tomtat' => 'required|min:8',
                // 'txt_QuyDinh' => 'required|min:8',
                // 'txt_TieuChi' => 'required|min:8',
                // 'txt_GiaiThuong' => 'required|min:8',
                // 'txt_GiaiThuong_tomtat' => 'required|min:8',
                // 'txt_QuyCach' => 'required|min:8',
                // 'txt_PhuongThuc' => 'required|min:8',
                // 'txt_BanToChuc' => 'required|min:8',
                // 'txt_BanGiamKhao' => 'required|min:8'
            ],
            [
                'txt_Ten.required' => 'Bạn chưa nhập TÊN thể loại',
                'txt_Ten.min' => 'Tên thể loại tối thiểu 8 ký tự và tối đa 30 ký tự',
                'txt_Ten.max' => 'Tên thể loại tối thiểu 8 ký tự và tối đa 30 ký tự',
                'txt_Ten_ChuDe.required' => 'Bạn chưa nhập TÊN chủ đề thể loại',
                'txt_Ten_ChuDe.min' => 'Tên chủ đề tối thiểu 8 ký tự và tối đa 300 ký tự',
                'txt_Ten_ChuDe.max' => 'Tên chủ đề tối thiểu 8 ký tự và tối đa 300 ký tự',
                // 'txt_MucDich.required' => 'Bạn chưa nhập MỤC ĐÍCH thể loại',
                // 'txt_MucDich.min' => 'MỤC ĐÍCH thể loại tối thiểu 8 ký tự',
                // 'txt_DoiTuong.required' => 'Bạn chưa nhập ĐỐI TƯỢNG thể loại',
                // 'txt_DoiTuong.min' => 'ĐỐI TƯỢNG thể loại tối thiểu 8 ký tự',
                // 'txt_NoiDung.required' => 'Bạn chưa nhập NỘI DUNG thể loại',
                // 'txt_NoiDung.min' => 'NỘI DUNG thể loại tối thiểu 8 ký tự',
                // 'txt_TheLe.required' => 'Bạn chưa nhập THỂ LỆ thể loại',
                // 'txt_TheLe.min' => 'THỂ LỆ thể loại tối thiểu 8 ký tự',
                // 'txt_TheLe_tomtat.required' => 'Bạn chưa nhập THỂ LỆ TÓM TẮT thể loại',
                // 'txt_TheLe_tomtat.min' => 'THỂ LỆ TÓM TẮT thể loại tối thiểu 8 ký tự',
                // 'txt_QuyDinh.required' => 'Bạn chưa nhập QUY ĐỊNH thể loại',
                // 'txt_QuyDinh.min' => 'QUY ĐỊNH thể loại tối thiểu 8 ký tự',
                // 'txt_TieuChi.required' => 'Bạn chưa nhập TIÊU CHÍ thể loại',
                // 'txt_TieuChi.min' => 'TIÊU CHÍ thể loại tối thiểu 8 ký tự',
                // 'txt_GiaiThuong.required' => 'Bạn chưa nhập GIẢI THƯỞNG thể loại',
                // 'txt_GiaiThuong.min' => 'GIẢI THƯỞNG thể loại tối thiểu 8 ký tự',
                // 'txt_GiaiThuong_tomtat.required' => 'Bạn chưa nhập GIẢI THƯỞNG TÓM TẮT thể loại',
                // 'txt_GiaiThuong_tomtat.min' => 'GIẢI THƯỞNG TÓM TẮT thể loại tối thiểu 8 ký tự',
                // 'txt_QuyCach.required' => 'Bạn chưa nhập QUY CÁCH thể loại',
                // 'txt_QuyCach.min' => 'QUY CÁCH thể loại tối thiểu 8 ký tự',
                // 'txt_PhuongThuc.required' => 'Bạn chưa nhập PHƯƠNG THỨC thể loại',
                // 'txt_PhuongThuc.min' => 'PHƯƠNG THỨC thể loại tối thiểu 8 ký tự',
                // 'txt_BanToChuc.required' => 'Bạn chưa nhập BAN TỔ CHỨC thể loại',
                // 'txt_BanToChuc.min' => 'BAN TỔ CHỨC thể loại tối thiểu 8 ký tự',
                // 'txt_BanGiamKhao.required' => 'Bạn chưa nhập BAN GIÁM KHẢO thể loại',
                // 'txt_BanGiamKhao.min' => 'BAN GIÁM KHẢO thể loại tối thiểu 8 ký tự'
                
            ]);

        $theloai = new TheLoai;

        $theloai->Ten = $request->txt_Ten;
        $theloai->Ten_chude = $request->txt_Ten_ChuDe;
        $theloai->Mucdich = $request->txt_MucDich;
        $theloai->Doituong = $request->txt_DoiTuong;
        $theloai->Noidung = $request->txt_NoiDung;
        $theloai->Thele =$request->txt_TheLe;
        $theloai->Thele_tomtat =$request->txt_TheLe_tomtat;
        $theloai->Quydinh = $request->txt_QuyDinh;
        $theloai->Tieuchi = $request->txt_TieuChi;
        $theloai->Giaithuong = $request->txt_GiaiThuong;
        $theloai->Giaithuong_tomtat = $request->txt_GiaiThuong_tomtat;
        $theloai->Quycach = $request->txt_QuyCach;
        $theloai->Phuongthuc = $request->txt_PhuongThuc;
        $theloai->Bantochuc =$request->txt_BanToChuc;
        $theloai->Bangiamkhao =$request->txt_BanGiamKhao;
        
        if($request->has('sel_Contest'))
            $theloai->id_contest = $request->sel_Contest;

        if($request->hasFile('txt_TheLe_pdf'))
        {
            $file = $request->file('txt_TheLe_pdf');
            $ext = $file->getClientOriginalExtension();
            $ext = strtolower($ext);
            if($ext != 'pdf')
            {
                return redirect('admin/theloai/them')->with('thongbao', 'Bạn chỉ chọn file có đuôi pdf');
            }
            $name = $file->getClientOriginalName();
            $pdf = str_random(4)."_".$name;
            while(file_exists("files/pdf/".$pdf));
            {
                $pdf = str_random(4)."_".$name;
            }
            $file->move("files/pdf/",$pdf);
            $theloai->Thele_pdf = $pdf;
        }
        // else {
        //     $theloai->Thele_pdf = "";
        // }

        $theloai->save();

        return redirect('admin/theloai/them')->with('thongbao', 'Thêm mới thành công');
    }

    //Sửa Thể loại
    public function getSua($id)
    {
        $theloai = TheLoai::find($id);
        $contest = Contest::all();
        return view('admin.theloai.sua', ['theloai' => $theloai, 'contest' => $contest]);
    }

    //Sửa Thể loại
    public function postSua(Request $request, $id)
    {
        $theloai = TheLoai::find($id);
        // $contestAll = TheLoai::all();

        $this->validate($request,
            [
                'txt_Ten' => 'required|min:8|max:30',
                'txt_Ten_ChuDe' => 'required|min:8|max:300',
                // 'txt_MucDich' => 'required|min:8',
                // 'txt_DoiTuong' => 'required|min:8',
                // 'txt_NoiDung' => 'required|min:8',
                // 'txt_TheLe' => 'required|min:8',
                // 'txt_TheLe_tomtat' => 'required|min:8',
                // 'txt_QuyDinh' => 'required|min:8',
                // 'txt_TieuChi' => 'required|min:8',
                // 'txt_GiaiThuong' => 'required|min:8',
                // 'txt_GiaiThuong_tomtat' => 'required|min:8',
                // 'txt_QuyCach' => 'required|min:8',
                // 'txt_PhuongThuc' => 'required|min:8',
                // 'txt_BanToChuc' => 'required|min:8',
                // 'txt_BanGiamKhao' => 'required|min:8'
            ],
            [
                'txt_Ten.required' => 'Bạn chưa nhập TÊN thể loại',
                'txt_Ten.min' => 'Tên thể loại tối thiểu 8 ký tự và tối đa 100 ký tự',
                'txt_Ten.max' => 'Tên thể loại tối thiểu 8 ký tự và tối đa 100 ký tự',
                'txt_Ten_ChuDe.required' => 'Bạn chưa nhập TÊN chủ đề thể loại',
                'txt_Ten_ChuDe.min' => 'Tên chủ đề tối thiểu 8 ký tự và tối đa 300 ký tự',
                'txt_Ten_ChuDe.max' => 'Tên chủ đề tối thiểu 8 ký tự và tối đa 300 ký tự',
                // 'txt_MucDich.required' => 'Bạn chưa nhập MỤC ĐÍCH thể loại',
                // 'txt_MucDich.min' => 'MỤC ĐÍCH thể loại tối thiểu 8 ký tự',
                // 'txt_DoiTuong.required' => 'Bạn chưa nhập ĐỐI TƯỢNG thể loại',
                // 'txt_DoiTuong.min' => 'ĐỐI TƯỢNG thể loại tối thiểu 8 ký tự',
                // 'txt_NoiDung.required' => 'Bạn chưa nhập NỘI DUNG thể loại',
                // 'txt_NoiDung.min' => 'NỘI DUNG thể loại tối thiểu 8 ký tự',
                // 'txt_TheLe.required' => 'Bạn chưa nhập THỂ LỆ thể loại',
                // 'txt_TheLe.min' => 'THỂ LỆ thể loại tối thiểu 8 ký tự',
                // 'txt_TheLe_tomtat.required' => 'Bạn chưa nhập THỂ LỆ TÓM TẮT thể loại',
                // 'txt_TheLe_tomtat.min' => 'THỂ LỆ TÓM TẮT thể loại tối thiểu 8 ký tự',
                // 'txt_QuyDinh.required' => 'Bạn chưa nhập QUY ĐỊNH thể loại',
                // 'txt_QuyDinh.min' => 'QUY ĐỊNH thể loại tối thiểu 8 ký tự',
                // 'txt_TieuChi.required' => 'Bạn chưa nhập TIÊU CHÍ thể loại',
                // 'txt_TieuChi.min' => 'TIÊU CHÍ thể loại tối thiểu 8 ký tự',
                // 'txt_GiaiThuong.required' => 'Bạn chưa nhập GIẢI THƯỞNG thể loại',
                // 'txt_GiaiThuong.min' => 'GIẢI THƯỞNG thể loại tối thiểu 8 ký tự',
                // 'txt_GiaiThuong_tomtat.required' => 'Bạn chưa nhập GIẢI THƯỞNG TÓM TẮT thể loại',
                // 'txt_GiaiThuong_tomtat.min' => 'GIẢI THƯỞNG TÓM TẮT thể loại tối thiểu 8 ký tự',
                // 'txt_QuyCach.required' => 'Bạn chưa nhập QUY CÁCH thể loại',
                // 'txt_QuyCach.min' => 'QUY CÁCH thể loại tối thiểu 8 ký tự',
                // 'txt_PhuongThuc.required' => 'Bạn chưa nhập PHƯƠNG THỨC thể loại',
                // 'txt_PhuongThuc.min' => 'PHƯƠNG THỨC thể loại tối thiểu 8 ký tự',
                // 'txt_BanToChuc.required' => 'Bạn chưa nhập BAN TỔ CHỨC thể loại',
                // 'txt_BanToChuc.min' => 'BAN TỔ CHỨC thể loại tối thiểu 8 ký tự',
                // 'txt_BanGiamKhao.required' => 'Bạn chưa nhập BAN GIÁM KHẢO thể loại',
                // 'txt_BanGiamKhao.min' => 'BAN GIÁM KHẢO thể loại tối thiểu 8 ký tự'
                
            ]);

        $theloai->Ten = $request->txt_Ten;
        $theloai->Ten_chude = $request->txt_Ten_ChuDe;
        $theloai->Mucdich = $request->txt_MucDich;
        $theloai->Doituong = $request->txt_DoiTuong;
        $theloai->Noidung = $request->txt_NoiDung;
        $theloai->Thele =$request->txt_TheLe;
        $theloai->Thele_tomtat =$request->txt_TheLe_tomtat;
        $theloai->Quydinh = $request->txt_QuyDinh;
        $theloai->Tieuchi = $request->txt_TieuChi;
        $theloai->Giaithuong = $request->txt_GiaiThuong;
        $theloai->Giaithuong_tomtat = $request->txt_GiaiThuong_tomtat;
        $theloai->Quycach = $request->txt_QuyCach;
        $theloai->Phuongthuc = $request->txt_PhuongThuc;
        $theloai->Bantochuc =$request->txt_BanToChuc;
        $theloai->Bangiamkhao =$request->txt_BanGiamKhao;
        
        if($request->has('sel_Contest'))
            $theloai->id_contest = $request->sel_Contest;

        if($request->hasFile('txt_TheLe_pdf'))
        {
            $file = $request->file('txt_TheLe_pdf');
            $ext = $file->getClientOriginalExtension();
            $ext = strtolower($ext);
            if($ext != 'pdf')
            {
                return redirect('admin/theloai/sua')->with('thongbao', 'Bạn chỉ chọn file có đuôi pdf');
            }
            $name = $file->getClientOriginalName();
            $pdf = str_random(4)."_".$name;
            while(file_exists("files/pdf/".$pdf));
            {
                $pdf = str_random(4)."_".$name;
            }
            $file->move("files/pdf/",$pdf);
            $theloai->Thele_pdf = $pdf;
        }
        // else {
        //     $theloai->Thele_pdf = "";
        // }

        $theloai->save();

        return redirect('admin/theloai/sua/'.$id)->with('thongbao', 'Cập nhật thành công');
    }

    //Xóa Thể loại
    public function getXoa($id)
    {
        $theloai = TheLoai::find($id);
        $theloai->delete();

        return redirect('admin/theloai/danhsach');
    }

}
