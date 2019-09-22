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

class UserController extends Controller
{
    // User
    public function getDanhSach()
    {
        $user = User::all();
        return view('admin.user.danhsach',['user'=>$user]);
    }

    // Thêm User
    public function getThem()
    {
        $user = User::all();
        return view('admin.user.them', ['user'=>$user]);
    }

    // Thêm User
    public function postThem(Request $request)
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
        $user->quyen = $request->Level;
        
        $user->save();

        return redirect('admin/user/them')->with('thongbao','Thêm thành công!');
    }

    // Cập nhật User
    public function getSua($id)
    {
        $user = User::find($id);

        return view('admin.user.sua', ['user'=>$user]);
    }
    // Cập nhật User
    public function postSua(Request $request, $id)
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

        $user = User::find($id);
        $user->Ten = $request->txt_Ten;
        $user->Diachi = $request->txt_DiaChi;
        $user->quyen = $request->Level;
        
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

        return redirect('admin/user/sua/'.$id)->with('thongbao','USER cập nhật thành công');

    }

    // Xóa User
    public function getXoa($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('admin/user/danhsach')->with('thongbao','USER đã xóa thành công');
    }
    
    //-----------------------------------------------------------------
    // Admin
    public function getDangNhapAdmin()
    {
        return view('admin.login');
    }

    // Admin
    public function postDangNhapAdmin(Request $request)
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
            return redirect('admin/contest/danhsach');
        }
        else
        {
            return redirect('admin/dangnhap')->with('thongbao','Đăng nhập không thành công');
        }

    }

    // Logout
    public function getDangXuatAdmin()
    {
        Auth::logout();
        return redirect('admin/dangnhap');
    }
}
