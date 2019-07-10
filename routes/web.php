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
Route::get('login', function () {
	return view('login');
})->name('login');

Route::get('/', function () {
    return view('home.index');
})->name('root');

Route::get('lawList/index', function () {
    return view('lawList.index');
})->name('lawList.index');

Route::get('lawList/show', function () {
    return view('lawList.show');
})->name('lawList.show');

Route::get('lawList/edit', function () {
    return view('lawList.edit');
})->name('lawList.edit');
// Route::get('/', function () {

// 	$img = Image::canvas(3628, 1757, '#fff');
//     // $img = Image::make()->resize(3628, 1757);
 
//     // $img->text('「我喜欢 Laravel」', 120, 220, function ($font) {
//     //     // $font->file(base_path().'/***/font1.ttf');
//     //     $font->size(144);
//     //     $font->valign('bottom');
//     //     $font->color('#19455E');
//     // });
 
//     // 获取远程图片
 
//      $leftImage = Image::make(base_path().'/public/p.jpg')->resize(2255, 1305);

//      $rightImage = Image::make(base_path().'/public/f.jpg')->resize(1000, 1000);
 
//     // 插入到底部，下边距 50 处
//      $img->insert($leftImage, 'left-top', 100, 150);

//      $img->insert($rightImage, 'right-top', 100, 300);

//      $img->text('王*军       320830198405041542', 1757, 1550, function($font) {
// 	    $font->file(base_path().'/public/fzjw.ttf');
// 	    $font->size(180);
// 	    $font->color('#000');
// 	    $font->align('center');
// 	    $font->valign('top');
// 	    $font->angle(0);
//     });

//     return $img->response('jpg');

// });