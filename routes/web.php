<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Contest;
// use App\BanToChuc;
use App\GiamKhao;
use App\Slide;
use App\TacPham;
use App\Result;
use App\User;

Route::get('/trangchu', function () {
    return view('pages.trangchu');
});
Route::get('/admin', function () {
    return view('admin.login');
});

// Admin ----------------------------------------------
Route::get('admin/dangnhap', 'UserController@getDangNhapAdmin');
Route::post('admin/dangnhap', 'UserController@postDangNhapAdmin');
Route::get('admin/logout', 'UserController@getDangXuatAdmin');

Route::group(['prefix' => 'admin', 'middleware' => 'adminLogin'], function () {
    // contest
    Route::group(['prefix' => 'contest'], function () {
        Route::get('danhsach', 'ContestController@getDanhSach');

        Route::get('sua/{id}', 'ContestController@getSua');
        Route::post('sua/{id}', 'ContestController@postSua');

        Route::get('xoa/{id}', 'ContestController@getXoa');

        Route::get('them', 'ContestController@getThem');
        Route::post('them', 'ContestController@postThem');
    });
    // Thể loại
    Route::group(['prefix' => 'theloai'], function () {
        Route::get('danhsach', 'TheLoaiController@getDanhSach');

        Route::get('sua/{id}', 'TheLoaiController@getSua');
        Route::post('sua/{id}', 'TheLoaiController@postSua');

        Route::get('xoa/{id}', 'TheLoaiController@getXoa');

        Route::get('them', 'TheLoaiController@getThem');
        Route::post('them', 'TheLoaiController@postThem');
        
    });

    // User
    Route::group(['prefix' => 'user'], function () {
        Route::get('danhsach', 'UserController@getDanhSach');

        Route::get('sua/{id}', 'UserController@getSua');
        Route::post('sua/{id}', 'UserController@postSua');

        Route::get('xoa/{id}', 'UserController@getXoa');

        Route::get('them', 'UserController@getThem');
        Route::post('them', 'UserController@postThem');
        
    });
    
    // result
    Route::group(['prefix' => 'result'], function () {
        Route::get('danhsach', 'ResultController@getDanhSach');

        Route::get('sua/{id}', 'ResultController@getSua');

        Route::get('them', 'ResultController@getThem');
    });
    // slide
    Route::group(['prefix' => 'slide'], function () {
        Route::get('danhsach', 'SlideController@getDanhSach');

        Route::get('sua/{id}', 'SlideController@getSua');
        Route::post('sua/{id}', 'SlideController@postSua');

        Route::get('xoa/{id}', 'SlideController@getXoa');

        Route::get('them', 'SlideController@getThem');
        Route::post('them', 'SlideController@postThem');
    });
    // tac pham
    Route::group(['prefix' => 'tacpham'], function () {
        Route::get('danhsach', 'TacPhamController@getDanhSach');

        Route::get('sua/{id}', 'TacPhamController@getSua');
        Route::post('sua/{id}', 'TacPhamController@postSua');

        Route::get('them', 'TacPhamController@getThem');
        Route::post('them', 'TacPhamController@postThem');
    });

    Route::group(['prefix' => 'ajax'], function () {
        Route::get('contest/{id}', 'AjaxController@getContest');

        Route::get('theloai/{id}', 'AjaxController@getTheLoai');

        

    });

    

});


// Giao dien frontend ---------------------------------
// Trang chu
Route::get('trangchu', 'PagesController@getTrangChu');

// Đăng nhập
Route::get('dangnhap', 'PagesController@getDangNhap');
Route::post('dangnhap', 'PagesController@postDangNhap');
Route::get('dangxuat', 'PagesController@getDangXuat');



// Sửa thông tin Tác giả
Route::get('tacgia', 'PagesController@getTacGia');
Route::post('tacgia', 'PagesController@postTacGia');

// Sửa thông tin Tác phẩm
Route::get('tacpham', 'PagesController@getTacPham');
Route::post('tacpham', 'PagesController@postTacPham');

// Đăng ký
Route::get('dangky', 'PagesController@getDangKy');
Route::post('dangky', 'PagesController@postDangKy');

// Thể lệ
Route::get('thele', 'PagesController@getTheLe');
Route::get('thele_pdf', 'PagesController@getTheLe_pdf');

Route::get('ajax/thele/{id}', 'AjaxController@getTheLe');

// Thống kê
Route::get('thongke', 'PagesController@getThongKe');


