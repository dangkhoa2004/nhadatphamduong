<!-- resources/views/posts/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold">Tạo bài đăng mới</h1>
        
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-4">
                <label for="area" class="block">Area</label>
                <input type="text" id="area" name="area" class="w-full p-2 border" required>
            </div>
            <div class="mt-4">
                <label for="design" class="block">Design</label>
                <input type="text" id="design" name="design" class="w-full p-2 border" required>
            </div>
            <div class="mt-4">
                <label for="location" class="block">Location</label>
                <input type="text" id="location" name="location" class="w-full p-2 border" required>
            </div>
            <div class="mt-4">
                <label for="documents" class="block">Documents</label>
                <textarea id="documents" name="documents" class="w-full p-2 border"></textarea>
            </div>
            <div class="mt-4">
                <label for="price" class="block">Price</label>
                <input type="number" id="price" name="price" class="w-full p-2 border" required>
            </div>
            <div class="mt-4">
                <label for="contact" class="block">Contact</label>
                <input type="text" id="contact" name="contact" class="w-full p-2 border" required>
            </div>
            <div class="mt-4">
                <label for="images" class="block">Image</label>
                <input type="file" id="images" name="images" class="w-full p-2 border">
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white p-2 rounded">Tạo bài đăng</button>
            </div>
        </form>
    </div>
@endsection
