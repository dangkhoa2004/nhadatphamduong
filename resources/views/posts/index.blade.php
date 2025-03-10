<!-- resources/views/posts/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold">Danh sách bài đăng</h1>
    <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white p-2 rounded">Tạo bài đăng mới</a>

    <table class="mt-4 border-collapse w-full">
        <thead>
            <tr>
                <th class="border px-4 py-2">Mã bài đăng</th>
                <th class="border px-4 py-2">Area</th>
                <th class="border px-4 py-2">Design</th>
                <th class="border px-4 py-2">Location</th>
                <th class="border px-4 py-2">Giá</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td class="border px-4 py-2">{{ $post->id }}</td>
                <td class="border px-4 py-2">{{ $post->area }}</td>
                <td class="border px-4 py-2">{{ $post->design }}</td>
                <td class="border px-4 py-2">{{ $post->location }}</td>
                <td class="border px-4 py-2">{{ $post->price }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('posts.show', $post->id) }}" class="bg-green-500 text-white px-4 py-2 rounded">Chi tiết</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Chỉnh sửa</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection