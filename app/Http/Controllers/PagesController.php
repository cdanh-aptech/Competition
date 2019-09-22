<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Contest;
use App\TheLoai;
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
        $slide = Slide::all();
        $user = User::all();
        $tacpham = TacPham::all();
        $theloai = TheLoai::all();
        view()->share('contest',$contest);
        view()->share('slide',$slide);
        view()->share('user',$user);
        view()->share('tacpham',$tacpham);
        view()->share('theloai', $theloai);

        if(Auth::check())
        {
            view()->share('user_login', Auth::user());
        }
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

    public function postDangNhap(Request $request)
    {
        $this -> validate($request,
            [
                'txt_Email' => 'required',
                'txt_Password' =>'required|min:6|max:32'
            ],
            [
                'txt_Email.required' => 'Bạn chưa nhập Email',
                'txt_Password.required' => 'Bạn chưa nhập Mật khẩu',
                'txt_Password.min' => 'Mật khẩu ít nhất 6 ký tự',
                'txt_Password.max' => 'Mật khẩu tối đa 32 ký tự'
            ]);
        
        if (Auth::attempt(['email' => $request->txt_Email, 'password' => $request->txt_Password]))
        {
            return redirect('trangchu');
        }
        else
        {
            return redirect('dangnhap')->with('thongbao','Đăng nhập không thành công');
        }
    }

    // Đăng xuất
    public function getDangXuat()
    {
        Auth::logout();
        return redirect('trangchu');
    }

    // Tác giả
    public function getTacGia()
    {
        $user = Auth::user();
        return view('pages.tacgia', ['tacgia'=>$user]);
    }

    // Thông tin tác giả
    public function postTacGia(Request $request)
    {
        $this->validate($request,
            [
                'txt_Ten' => 'required|min:6',
                'txt_DiaChi' => 'required|min:8|max:200'
                
            ],
            [
                'txt_Ten.required' => 'Bạn chưa nhập Họ và Tên',
                'txt_Ten.min' => 'Họ và Tên tối thiểu 6 ký tự',
                'txt_DiaChi.required' => 'Bạn chưa nhập Địa chỉ liên hệ',
                'txt_DiaChi.min' => 'Địa chỉ liên hệ ít nhất 8 ký tự',
                'txt_DiaChi.max' => 'Địa chỉ liên hệ tối đa 200 ký tự'
                
            ]);

        $user = Auth::user();
        $user->Ten = $request->txt_Ten;
        $user->Diachi = $request->txt_DiaChi;
        // $user->quyen = $request->Level;
        
        if($request->chk_Password == "on")
        {
            $this->validate($request,
                [
                    'txt_Password' => 'required|min:8|max:32',
                    'txt_RePassword' => 'required|same:txt_Password'
                ],
                [
                    'txt_Password.required' => 'Bạn chưa nhập Mật khẩu',
                    'txt_Password.min' => 'Mật khẩu tối thiểu 8 ký tự',
                    'txt_Password.max' => 'Mật khẩu tối tối đa 32 ký tự',
                    'txt_RePassword.required' => 'Bạn chưa Nhập lại Mật khẩu',
                    'txt_RePassword.same' => 'Bạn Nhập lại Mật khẩu không khớp'
                ]);
            $user->password = bcrypt($request->txt_Password);
        }

        $user->save();

        return redirect('tacgia')->with('thongbao','Tác giả cập nhật thành công');

    }

    // Đăng ký
    public function getDangKy()
    {
        return view('pages.dangky');
    }

    public function postDangKy(Request $request)
    {
        $this->validate($request,
            [
                'txt_Ten' => 'required|min:6',
                'txt_Email' => 'required|email|unique:users,email',
                'txt_Password' => 'required|min:8|max:32',
                'txt_RePassword' => 'required|same:txt_Password',
                'txt_DiaChi' => 'required|min:8|max:200'
            ],
            [
                'txt_Ten.required' => 'Bạn chưa nhập Họ và Tên',
                'txt_Ten.min' => 'Họ và Tên tối thiểu 6 ký tự',
                'txt_Email.required' => 'Bạn chưa nhập Email',
                'txt_Email.email' => 'Bạn nhập không đúng định dạng Email',
                'txt_Email.unique' => 'Email đã tồn tại',
                'txt_Password.required' => 'Bạn chưa nhập Mật khẩu',
                'txt_Password.min' => 'Mật khẩu tối thiểu 8 ký tự',
                'txt_Password.max' => 'Mật khẩu tối tối đa 32 ký tự',
                'txt_RePassword.required' => 'Bạn chưa Nhập lại Mật khẩu',
                'txt_RePassword.same' => 'Bạn Nhập lại Mật khẩu không khớp',
                'txt_DiaChi.required' => 'Bạn chưa nhập Địa chỉ liên hệ',
                'txt_DiaChi.min' => 'Địa chỉ liên hệ ít nhất 8 ký tự',
                'txt_DiaChi.max' => 'Địa chỉ liên hệ tối đa 200 ký tự'
            ]);
        
        $user = new User;
        $user->Ten = $request->txt_Ten;
        $user->email = $request->txt_Email;
        $user->password = bcrypt($request->txt_Password);
        $user->Diachi = $request->txt_DiaChi;
        
        $user->save();

        return redirect('dangnhap')->with('thongbao','Đăng ký thành công!');
    }

    // Tác phẩm
    public function getTacPham()
    {
        $user = Auth::user();
        $contest = Contest::where('Active',1)->get();
        $now = date("Y-m-d");
        
        foreach($contest as $ct)
        {
            if($ct->Date_end >= $now)
                return view('pages.tacpham', ['tacgia'=>$user, 'contest'=>$contest]);
            else {
                return view('pages.trangchu');
            }
        }
    }

    public function postTacPham(Request $request)
    {
        $user = Auth::user();
        $contest = Contest::where('Active',1)->get();
        $tacpham = new TacPham;
        $tacpham->Ten = $request->txt_Ten;

        $tacpham->id_user = $user->id;
        foreach($contest as $ct)
        {
            $tacpham->id_contest = $ct->id;
        }

        if($request->has('sel_TheLoai'))
            $tacpham->id_theloai = $request->sel_TheLoai;
        

        if($request->has('txt_NoiDung'))
            $tacpham->Noidung = $request->txt_NoiDung;

        if($request->has('txt_Link_File'))
            $tacpham->link_File = $request->txt_Link_File;
        
        if($request->hasFile('txt_File'))
        {
            $file = $request->file('txt_File');
            // $ext = $file->getClientOriginalExtension();
            // $ext = strtolower($ext);
            // if($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg')
            // {
            //     return redirect('tacpham')->with('thongbao', 'Bạn chỉ chọn file hình có đuôi jpg,png,jpeg');
            // }
            $name = $file->getClientOriginalName();
            $tp = str_random(4)."_".$name;
            while(file_exists("images/tacpham/".$user->id."/".$tp));
            {
                $tp = str_random(4)."_".$name;
            }
            $file->move("images/tacpham/".$user->id."/",$tp);
            $tacpham->File = $tp;
        }
        // else {
        //     $tacpham->Hinh = "";
        // }

        $tacpham->save();

        return redirect('tacpham')->with('thongbao','Tác phẩm đã Thêm thành công!');
    }

    // Thể Lệ
    public function getTheLe()
    {
        // $contest = Contest::where('Active',1)->get();
        return view('pages.thele');
    }

    public function getTheLe_pdf()
    {
        return view('pages.thele_pdf');
    }

    // Thống kê
    public function getThongKe()
    {
        $tacgia = User::where('quyen',0)->get();
        $tacpham_user = TacPham::all();
        return view('pages.thongke', ['tacgia'=>$tacgia, 'tacpham_user'=>$tacpham_user]);
    }
}
