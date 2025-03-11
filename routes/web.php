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

Route::get('/trang-chu', [PostController::class, 'trangchu'])->name(name: 'index');
// Xem chi tiết bài đăng
Route::get('/trang-chu/{id}', [PostController::class, 'trangchuShow'])->name('detail');

// Trang chủ - Hiển thị tất cả bài đăng (thay đổi URL từ / thành /posts)
Route::get('/quan-ly-bai-dang', [PostController::class, 'index'])->name('posts.index');

// Trang tạo bài đăng mới
Route::get('/quan-ly-bai-dang/tao-moi', [PostController::class, 'create'])->name('posts.create');

// Lưu bài đăng mới
Route::post('/quan-ly-bai-dang', [PostController::class, 'store'])->name('posts.store');

// Xem chi tiết bài đăng
Route::get('/quan-ly-bai-dang/{id}', [PostController::class, 'show'])->name('posts.show');


// Form chỉnh sửa bài đăng
Route::get('/quan-ly-bai-dang/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Cập nhật bài đăng
Route::put('/quan-ly-bai-dang/{id}', [PostController::class, 'update'])->name('posts.update');

// Xóa bài đăng
Route::delete('/quan-ly-bai-dang/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
