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

Route::get('admin/dangnhap', 'UserController@getDangNhapAdmin');
Route::post('admin/dangnhap', 'UserController@postDangNhapAdmin');
Route::get('admin/logout', 'UserController@getDangXuatAdmin');

Route::group(['prefix' => 'admin'], function () {
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

        Route::get('sua', 'ResultController@getSua');

        Route::get('them', 'ResultController@getThem');
    });
    // slide
    Route::group(['prefix' => 'slide'], function () {
        Route::get('danhsach', 'SlideController@getDanhSach');

        Route::get('sua', 'SlideController@getSua');

        Route::get('them', 'SlideController@getThem');
    });
    // tac pham
    Route::group(['prefix' => 'tacpham'], function () {
        Route::get('danhsach', 'TacPhamSlideController@getDanhSach');

        Route::get('sua', 'TacPhamController@getSua');

        Route::get('them', 'TacPhamController@getThem');
    });

    Route::group(['prefix' => 'ajax'], function () {
        Route::get('contest/{id}', 'AjaxController@getContest');
    });

});






// Test admin
Route::get('test', function(){
    return view('admin.contest.danhsach');
});

// Test trang chu
Route::get('trangchu', function () {
    return view('pages/trangchu');
});
