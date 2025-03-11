<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class PostRepository
{
    // Lấy tất cả bài đăng
    public function getAll(): Collection
    {
        return Post::all();
    }

    // Lấy bài đăng theo ID
    public function getById(int $id): ?Post
    {
        return Post::find($id);
    }
    // Lấy bài đăng theo thời gian tạo
    public function getLatestPosts(int $limit = 9)
    {
        return Post::orderBy('created_at', 'desc')->take($limit)->get();
    }

    // Tạo bài đăng mới
    public function create(array $data): Post
    {
        return Post::create($data);
    }

    // Cập nhật bài đăng
    public function update(int $id, array $data): ?Post
    {
        $post = Post::find($id);
        if ($post) {
            $post->update($data);
            return $post;
        }

        return null;
    }

    // Xóa bài đăng
    public function delete(int $id): bool
    {
        $post = Post::find($id);
        if ($post) {
            return $post->delete();
        }

        return false;
    }
}
