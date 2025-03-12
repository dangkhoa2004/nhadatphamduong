@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Danh sách bài đăng</h1>
    <x-primary-button
        :type="'link'"
        :text="'Tạo bài đăng'"
        :icon="'fas fa-plus'"
        :href="route('posts.create')" />
    @php
    $headers = ['Mã bài đăng', 'Ảnh', 'Tiêu đề', 'Diện tích MB', 'Diện tích SD', 'Số tầng', 'Phòng ngủ', 'Phòng toilet', 'Giá', 'Địa chỉ', 'Hướng', 'Hướng phong thủy', 'Thao tác'];
    $rows = $posts->map(function($post) {
        $images = is_string($post->images) ? json_decode($post->images, true) : $post->images;
        $imageHtml = '';
        if ($images && is_array($images) && count($images) > 0) {
            $imageHtml = '<img src="' . asset('storage/' . $images[0]) . '" class="w-full sm:w-full md:w-full lg:w-full max-w-full max-h-full object-cover rounded-md" alt="IMG">';
        }
        return [
            $post->code,
            $imageHtml,
            $post->title,
            $post->area_mb,
            $post->area_sd,
            $post->floors,
            $post->bedrooms,
            $post->bathrooms,
            $post->price,
            $post->location,
            $post->direction,
            $post->feng_shui_direction,
            '<a href="' . route('posts.show', $post->id) . '" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-4">Xem</a>'
        ];
    });
    @endphp

    <x-table :headers="$headers" :rows="$rows" />
</div>
@endsection