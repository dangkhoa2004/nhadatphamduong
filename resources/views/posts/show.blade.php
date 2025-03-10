<!-- resources/views/posts/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold">Chi tiết bài đăng</h1>
        
        <div class="mt-4">
            <strong>Area:</strong> {{ $post->area }}
        </div>
        <div class="mt-4">
            <strong>Design:</strong> {{ $post->design }}
        </div>
        <div class="mt-4">
            <strong>Location:</strong> {{ $post->location }}
        </div>
        <div class="mt-4">
            <strong>Documents:</strong> {{ $post->documents }}
        </div>
        <div class="mt-4">
            <strong>Price:</strong> {{ $post->price }}
        </div>
        <div class="mt-4">
            <strong>Contact:</strong> {{ $post->contact }}
        </div>
        <div class="mt-4">
            @if ($post->images)
                <img src="{{ Storage::url($post->images) }}" alt="Image" class="max-w-xs">
            @endif
        </div>

        <div class="mt-4">
            <a href="{{ route('posts.edit', $post->id) }}" class="bg-yellow-500 text-white p-2 rounded">Chỉnh sửa</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white p-2 rounded">Xóa</button>
            </form>
        </div>
    </div>
@endsection
