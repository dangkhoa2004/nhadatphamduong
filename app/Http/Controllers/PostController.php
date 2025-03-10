<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    // Hiển thị tất cả bài đăng
    public function index()
    {
        $posts = $this->postService->getAllPosts();
        return view('posts.index', compact('posts'));
    }

    // Hiển thị form tạo bài đăng
    public function create()
    {
        return view('posts.create');
    }

    // Lưu bài đăng mới
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable',
            'content' => 'nullable',
            'link' => 'nullable|url',
            'code' => 'nullable',
            'info' => 'nullable',
            'document_type' => 'nullable',
            'area_mb' => 'nullable|numeric',
            'area_sd' => 'nullable|numeric',
            'width' => 'nullable|numeric',
            'length' => 'nullable|numeric',
            'floors' => 'nullable|integer',
            'bedrooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'direction' => 'nullable',
            'feng_shui_direction' => 'nullable',
            'location' => 'nullable',
            'posted_at' => 'nullable|date',
            'images' => 'nullable|image'
        ]);

        // Xử lý ảnh nếu có
        if ($request->hasFile('images')) {
            $data['images'] = $request->file('images')->store('public/images');
        }

        $this->postService->createPost($data);

        return redirect()->route('posts.index');
    }

    // Hiển thị bài đăng chi tiết
    public function show($id)
    {
        $post = $this->postService->getPostById($id);
        return view('posts.show', compact('post'));
    }

    // Hiển thị form chỉnh sửa bài đăng
    public function edit($id)
    {
        $post = $this->postService->getPostById($id);
        return view('posts.edit', compact('post'));
    }

    // Cập nhật bài đăng
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'nullable',
            'content' => 'nullable',
            'link' => 'nullable|url',
            'code' => 'nullable',
            'info' => 'nullable',
            'document_type' => 'nullable',
            'area_mb' => 'nullable|numeric',
            'area_sd' => 'nullable|numeric',
            'width' => 'nullable|numeric',
            'length' => 'nullable|numeric',
            'floors' => 'nullable|integer',
            'bedrooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'price' => 'nullable|integer',
            'direction' => 'nullable',
            'feng_shui_direction' => 'nullable',
            'location' => 'nullable',
            'posted_at' => 'nullable|date',
            'images' => 'nullable|image'
        ]);

        // Xử lý ảnh nếu có
        if ($request->hasFile('images')) {
            $data['images'] = $request->file('images')->store('public/images');
        }

        $this->postService->updatePost($id, $data);

        return redirect()->route('posts.index');
    }

    // Xóa bài đăng
    public function destroy($id)
    {
        $this->postService->deletePost($id);

        return redirect()->route('posts.index');
    }
}
