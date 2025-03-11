<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'trangchu'])->name(name: 'index');
// Xem chi tiết bài đăng
Route::get('/{id}', [PostController::class, 'trangchuShow'])->name('detail');

Route::get('/details', function () {
    return view('detail');
});

// Trang chủ - Hiển thị tất cả bài đăng (thay đổi URL từ / thành /posts)
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Trang tạo bài đăng mới
Route::get('/post/create', [PostController::class, 'create'])->name('posts.create');

// Lưu bài đăng mới
Route::post('/post', [PostController::class, 'store'])->name('posts.store');

// Xem chi tiết bài đăng
Route::get('/post/{id}', [PostController::class, 'show'])->name('posts.show');


// Form chỉnh sửa bài đăng
Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Cập nhật bài đăng
Route::put('/post/{id}', [PostController::class, 'update'])->name('posts.update');

// Xóa bài đăng
Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
