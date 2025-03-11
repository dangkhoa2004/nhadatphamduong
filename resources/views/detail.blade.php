<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Đây là trang web bán nhà đất khu vực Hải Phòng">
    <title>Nhà Đất Hải Phòng</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        html,
        body,
        * {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
        }
    </style>
</head>

<body class="bg-white">
    <x-contact />
    @include('layouts.header')
    <div class="max-w-screen-xl mx-auto px-4 py-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-4 mt-4">
            <div class="lg:col-span-8 md:col-span-12 bg-white flex flex-col h-auto lg:h-full">
                <x-image-slider :images="$post->images" />
                <x-listing-title-detail :title="$post->title" />
                <x-listing-price :price="$post->price" />
                <div class="bg-white shadow-2xl rounded-lg mt-6 p-6">
                    <p class="text-2xl font-semibold text-gray-900 mb-4">Thông tin cơ bản về đất</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <x-listing-item icon="fas fa-id-badge" label="Mã tin" :value="$post->code" />
                        <x-listing-item icon="fas fa-info-circle" label="Thông tin" :value="$post->info" />
                        <x-listing-item icon="fas fa-map-marker-alt" label="Nơi đăng" :value="$post->location" />
                        <x-listing-item icon="fas fa-certificate" label="Loại giấy tờ" :value="$post->document_type" />
                        <x-listing-item icon="fas fa-ruler-combined" label="Diện tích MB" :value="$post->area_mb . ' m²'" />
                        <x-listing-item icon="fas fa-cogs" label="Diện tích SD" :value="$post->area_sd" />
                        <x-listing-item icon="fas fa-expand-arrows-alt" label="Chiều rộng" :value="$post->width . ' m'" />
                        <x-listing-item icon="fas fa-expand-arrows-alt" label="Chiều dài" :value="$post->length . ' m'" />
                        <x-listing-item icon="fas fa-building" label="Số tầng" :value="$post->floors . ' tầng'" />
                        <x-listing-item icon="fas fa-bed" label="Phòng ngủ" :value="$post->bedrooms . ' phòng'" />
                        <x-listing-item icon="fas fa-toilet" label="Phòng toilet" :value="$post->bathrooms . ' phòng'" />
                        <x-listing-item icon="fas fa-arrow-alt-circle-up" label="Hướng" :value="$post->direction" />
                        <x-listing-item icon="fas fa-compass" label="Hướng phong thủy" :value="$post->feng_shui_direction" />
                        <x-listing-item icon="fas fa-calendar-alt" label="Thời gian đăng" :value="$post->posted_at" />
                    </div>
                </div>

                <div class="bg-white shadow-2xl rounded-lg mt-6 p-6">
                    <x-listing-title title="Chỉ còn 2 căn trong dãy nhà cực đẹp mặt ngõ 522 Ngô Gia Tự." />
                    <x-listing-description description='<span class="font-semibold text-gray-900">Nhà xây mới 4 tầng độc lập, kiên cố, thiết kế hiện đại, trẻ trung, các khu chức năng bố trí hợp lý, công năng sử dụng cao.</span>' />
                    <x-listing-description description='<span class="font-semibold">Cấu trúc nhà:</span> phòng khách, 4 phòng ngủ, phòng thờ, phòng ăn và bếp, sân phơi, 3 toilet.' />
                    <x-listing-description description='<span class="font-semibold">Diện tích MB:</span> 50m², mặt tiền 5m cực đẹp, từ tầng 2 đua ra rộng rãi, <span class="text-red-600 font-bold">giá bán chỉ 4,2 tỷ đồng (có thỏa thuận)</span>.' />
                    <x-listing-description description='<span class="font-semibold text-gray-900">Vị trí cực đẹp:</span>' />
                    <x-listing-features :features="[
        'Chỉ cách mặt phố Ngô Gia Tự sầm uất chỉ vài bước chân, ngõ thông, giao thông thuận tiện.',
        'Mặt ngõ rộng rãi, ô tô đỗ cửa.',
        'Thuộc khu dân cư đông đúc, văn minh, xung quanh ngập tràn tiện ích: gần trường học các cấp, chợ dân sinh, trung tâm thương mại, siêu thị, ngân hàng, bệnh viện,...',]" />
                    <x-listing-description description='Phù hợp vừa ở vừa kinh doanh, buôn bán, mở tiệm nails, salon, cửa hàng tạp hóa, thời trang,...' />
                    <x-listing-contact phone1="0389616946" phone2="0869938981" />
                </div>
                <x-google-map :src="'https://www.google.com/maps/embed?pb='.$post->link" />
            </div>
            <div class="lg:col-span-2 md:col-span-6 bg-gray-100 flex flex-col">
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>

</html>