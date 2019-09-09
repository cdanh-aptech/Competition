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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    // contest
    Route::group(['prefix' => 'contest'], function () {
        Route::get('danhsach', 'ContestController@getDanhSach');

        Route::get('sua', 'ContestController@getSua');

        Route::get('them', 'ContestController@getThem');
        Route::post('them', 'ContestController@postThem');
    });
    // ban to chuc
    Route::group(['prefix' => 'bantochuc'], function () {
        Route::get('danhsach', 'BanToChucController@getDanhSach');

        Route::get('sua', 'BanToChucController@getSua');

        Route::get('them', 'BanToChucController@getThem');
        
    });
    // giam khao
    Route::group(['prefix' => 'giamkhao'], function () {
        Route::get('danhsach', 'GiamKhaoController@getDanhSach');

        Route::get('sua', 'GiamKhaoController@getSua');

        Route::get('them', 'GiamKhaoController@getThem');
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
