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
use App\BanToChuc;
use App\GiamKhao;
use App\Slide;
use App\TacPham;
use App\Result;
use App\User;

Route::get('/', function () {
    return view('welcome');
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
    // ban to chuc
    Route::group(['prefix' => 'bantochuc'], function () {
        Route::get('danhsach', 'BanToChucController@getDanhSach');

        Route::get('sua/{id}', 'BanToChucController@getSua');
        Route::post('sua/{id}', 'BanToChucController@postSua');

        Route::get('xoa/{id}', 'BanToChucController@getXoa');

        Route::get('them', 'BanToChucController@getThem');
        Route::post('them', 'BanToChucController@postThem');
        
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

        Route::get('them', 'TacPhamController@getThem');
    });

    Route::group(['prefix' => 'ajax'], function () {
        Route::get('contest/{id}', 'AjaxController@getContest');
    });

});


// Giao dien frontend ---------------------------------
// Trang chu
Route::get('trangchu', 'PagesController@getTrangChu');

Route::get('dangnhap', 'PagesController@getDangNhap');
Route::post('dangnhap', 'PagesController@postDangNhap');
