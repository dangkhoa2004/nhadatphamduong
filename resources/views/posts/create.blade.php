@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Tạo Mới Bài Đăng</h1>
    <form id="postForm" action="{{ route('posts.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6 space-y-4" enctype="multipart/form-data">
        @csrf
        <x-image-upload label="Hình ảnh" :src="null" name="images" />
        <x-input-field label="Tiêu đề" name="title" type="text" />
        <x-input-field label="Thông tin" name="info" type="text" />
        <x-input-field label="Mã bài đăng" name="code" type="text" />
        <x-input-field label="Diện tích mặt bằng" name="area_mb" type="number" />
        <x-input-field label="Diện tích sử dụng" name="area_sd" type="number" />
        <x-input-field label="Chiều rộng" name="width" type="number" />
        <x-input-field label="Chiều dài" name="length" type="number" />
        <x-input-field label="Số tầng" name="floors" type="number" />
        <x-input-field label="Phòng ngủ" name="bedrooms" type="number" />
        <x-input-field label="Phòng toilet" name="bathrooms" type="number" />
        <x-input-field label="Giá" name="price" type="number" />
        <x-input-field label="Địa chỉ" name="location" type="text" />
        <x-input-field label="Hướng" name="direction" type="text" />
        <x-input-field label="Hướng phong thủy" name="feng_shui_direction" type="text" />
        <x-input-field label="Loại giấy tờ" name="document_type" type="text" />
        <x-input-field label="Liên kết" name="link" type="url" />
        <div class="mt-6">
            <x-primary-button type="submit" text="Tạo bài đăng" />
            <x-secondary-button
                :type="'link'"
                :text="'Trở về'"
                :icon="''"
                :href="route('posts.index')" />
        </div>
    </form>
</div>
<script>
    document.getElementById('postForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission

        // Validation for each input
        let valid = true;
        const inputs = document.querySelectorAll('input');

        inputs.forEach(input => {
            if (input.value.trim() === "") {
                valid = false;
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi!',
                    text: 'Vui lòng điền đầy đủ thông tin!',
                });
                return false; // Break loop if validation fails
            }
        });

        if (valid) {
            // If validation is successful, submit the form
            this.submit();
        }
    });
</script>
@endsection