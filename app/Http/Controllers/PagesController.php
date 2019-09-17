<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $contest = Contest::all();
        return view('pages.tacpham', ['tacgia'=>$user, 'contest'=>$contest]);
    }

    public function postTacPham(Request $request)
    {
        $user = Auth::user();
        $tacpham = new TacPham;
        $tacpham->Ten = $request->txt_Ten;

        if($request->has('sel_CuocThi'))
            $tacpham->id_contest = $request->sel_CuocThi;

        $tacpham->id_user = $user->id;

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
                return redirect('tacpham')->with('thongbao', 'Bạn chỉ chọn file hình có đuôi jpg,png,jpeg');
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

        return redirect('tacpham')->with('thongbao','Thêm thành công!');
    }

    // Thể Lệ
    public function getTheLe()
    {
        // $contest = Contest::where('Active',1)->get();
        return view('pages.thele');
    }
}
