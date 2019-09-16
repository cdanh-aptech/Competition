<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contest;
use App\BanToChuc;
use App\GiamKhao;
use App\Slide;
use App\TacPham;
use App\Result;

class SlideController extends Controller
{
    // Danh sách Slide
    public function getDanhSach()
    {
        $slide = Slide::all();
        return view('admin.slide.danhsach',['slide'=>$slide]);
    }

    // Thêm Slide
    public function getThem()
    {
        $contest = Contest::all();
        $slide = Slide::all();
        return view('admin.slide.them', ['slide'=>$slide, 'contest'=>$contest]);
    }

    // Thêm Slide
    public function postThem(Request $request)
    {
        
        $slide = new Slide;
        $slide->Ten = $request->txt_Ten;
        $slide->id_contest =$request->sel_CuocThi;

        if($request->has('txt_NoiDung'))
            $slide->Noidung = $request->txt_NoiDung;

        if($request->has('txt_Link'))
            $slide->link = $request->txt_Link;
        
        if($request->hasFile('txt_Hinh'))
        {
            $file = $request->file('txt_Hinh');
            $ext = $file->getClientOriginalExtension();
            if($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg')
            {
                return redirect('admin/slide/them')->with('loi', 'Bạn chỉ chọn file hình có đuôi jpg,png,jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists("images/slide/".$Hinh));
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("images/slide/",$Hinh);
            $slide->Hinh = $Hinh;
        }
        else {
            $slide->Hinh = "";
        }

        $slide->save();

        return redirect('admin/slide/them')->with('thongbao','Thêm thành công!');
    }

    // Sửa Slide
    public function getSua($id)
    {
        $contest = Contest::all();
        $slide = Slide::find($id);
        return view('admin.slide.sua', ['slide'=>$slide, 'contest'=>$contest]);
    }

    public function postSua(Request $request, $id)
    {
        $slide = Slide::find($id);

        if($request->has('sel_CuocThi'))
            $slide->id_contest =$request->sel_CuocThi;

        if($request->has('txt_NoiDung'))
            $slide->Noidung = $request->txt_NoiDung;

        if($request->has('txt_Link'))
            $slide->link = $request->txt_Link;
        
        // Random tên file Hình ảnh -----------------------
        if($request->hasFile('txt_Hinh'))
        {
            $file = $request->file('txt_Hinh');
            $ext = $file->getClientOriginalExtension();
            if($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg')
            {
                return redirect('admin/slide/them')->with('loi', 'Bạn chỉ chọn file hình có đuôi jpg,png,jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists("images/slide/".$Hinh));
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("images/slide/",$Hinh);
            $slide->Hinh = $Hinh;
        }
        //--------------------------------------------------
        
        $slide->save();

        return redirect('admin/slide/sua/'.$id)->with('thongbao','Cập nhật thành công!');
    }

    public function getXoa($id)
    {
        $slide = Slide::find($id);
        $slide->delete();

        return redirect('admin/slide/danhsach');
    }


}
