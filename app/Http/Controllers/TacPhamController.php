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

class TacPhamController extends Controller
{
    // Danh sách TacPham
    public function getDanhSach()
    {
        $tacpham = TacPham::all();
        return view('admin.tacpham.danhsach',['tacpham'=>$tacpham]);
    }

    // Thêm TacPham
    public function getThem()
    {
        $contest = Contest::all();
        $tacpham = TacPham::all();
        $user = User::all();
        return view('admin.tacpham.them', ['tacpham'=>$tacpham, 'contest'=>$contest, 'user'=>$user]);
    }

    // Thêm TacPham
    public function postThem(Request $request)
    {
        
        $tacpham = new TacPham;
        $tacpham->Ten = $request->txt_Ten;

        if($request->has('sel_CuocThi'))
            $tacpham->id_contest = $request->sel_CuocThi;

        if($request->has('sel_TacGia'))
            $tacpham->id_user = $request->sel_TacGia;

        if($request->has('txt_NoiDung'))
            $tacpham->Noidung = $request->txt_NoiDung;

        if($request->has('txt_Link_Hinh'))
            $tacpham->link_Hinh = $request->txt_Link_Hinh;
        
        if($request->hasFile('txt_Hinh'))
        {
            $file = $request->file('txt_Hinh');
            $ext = $file->getClientOriginalExtension();
            $ext = strtolower($ext);
            if($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg')
            {
                return redirect('admin/tacpham/them')->with('thongbao', 'Bạn chỉ chọn file hình có đuôi jpg,png,jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists("images/tacpham/".$Hinh));
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("images/tacpham/",$Hinh);
            $tacpham->Hinh = $Hinh;
        }
        else {
            $tacpham->Hinh = "";
        }

        $tacpham->save();

        return redirect('admin/tacpham/them')->with('thongbao','Thêm thành công!');
    }

    // Sửa TacPham
    public function getSua($id)
    {
        $contest = Contest::all();
        $user = User::all();
        $tacpham = TacPham::find($id);
        return view('admin.tacpham.sua', ['tacpham'=>$tacpham, 'contest'=>$contest, 'user'=>$user]);
    }

    public function postSua(Request $request, $id)
    {
        $tacpham = TacPham::find($id);

        if($request->has('sel_CuocThi'))
            $tacpham->id_contest =$request->sel_CuocThi;

        if($request->has('sel_TacGia'))
            $tacpham->id_user =$request->sel_TacGia;

        if($request->has('txt_Ten'))
            $tacpham->Ten = $request->txt_Ten;

        if($request->has('txt_NoiDung'))
            $tacpham->Noidung = $request->txt_NoiDung;

        if($request->has('txt_Link'))
            $tacpham->link_Hinh = $request->txt_Link_Hinh;
        
        // Random tên file Hình ảnh -----------------------
        if($request->hasFile('txt_Hinh'))
        {
            $file = $request->file('txt_Hinh');
            $ext = $file->getClientOriginalExtension();
            $ext = strtolower($ext);
            if($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg')
            {
                return redirect('admin/tacpham/them')->with('thongbao', 'Bạn chỉ chọn file hình có đuôi jpg,png,jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists("images/tacpham/".$Hinh));
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("images/tacpham/",$Hinh);
            $tacpham->Hinh = $Hinh;
        }
        //--------------------------------------------------
        
        $tacpham->save();

        return redirect('admin/tacpham/sua/'.$id)->with('thongbao','Cập nhật thành công!');
    }

    public function getXoa($id)
    {
        $tacpham = TacPham::find($id);
        $tacpham->delete();

        return redirect('admin/tacpham/danhsach');
    }


}
