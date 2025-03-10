<?php

namespace App\Services;

use App\Repositories\PostRepository;
use App\Models\Post;

class PostService
{
    protected $postRepository;

    // Constructor
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    // Lấy tất cả bài đăng
    public function getAllPosts()
    {
        return $this->postRepository->getAll();
    }

    // Lấy bài đăng theo ID
    public function getPostById(int $id): ?Post
    {
        return $this->postRepository->getById($id);
    }

    // Tạo bài đăng mới
    public function createPost(array $data): Post
    {
        return $this->postRepository->create($data);
    }

    // Cập nhật bài đăng
    public function updatePost(int $id, array $data): ?Post
    {
        return $this->postRepository->update($id, $data);
    }

    // Xóa bài đăng
    public function deletePost(int $id): bool
    {
        return $this->postRepository->delete($id);
    }
}
