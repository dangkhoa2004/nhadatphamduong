<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Đây là trang web bán nhà đất khu vực Hải Phòng">
    <title>Nhà Đất Hải Phòng</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-white">
    @include('partials.contact')
    @include('layouts.header')
    <div class="max-w-screen-xl mx-auto px-4 py-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-4 mt-4">
            <div class="lg:col-span-8 md:col-span-12 bg-white flex flex-col h-auto lg:h-full">
                <div class="overflow-hidden rounded-lg relative max-w-screen-xl">
                    <div class="slider flex transition-transform duration-500" id="slider">
                        <img src="https://file4.batdongsan.com.vn/resize/1275x717/2025/03/05/20250305110043-0b66_wm.jpg" class="slide">
                        <img src="https://file4.batdongsan.com.vn/resize/1275x717/2025/03/05/20250305110041-63f9_wm.jpg" class="slide">
                        <img src="https://file4.batdongsan.com.vn/resize/1275x717/2025/03/05/20250305110041-63f9_wm.jpg" class="slide">
                    </div>
                    <button class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-black text-white p-3 rounded-full hover:bg-gray-700 transition-colors" onclick="moveSlide(-1)">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-black text-white p-3 rounded-full hover:bg-gray-700 transition-colors" onclick="moveSlide(1)">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
                <h1 class="text-3xl font-bold text-gray-900 leading-tight mt-6">Bán nhà ngõ ô tô tại 3/522 Ngô Gia Tự, Thành Tô, Hải An, Hải Phòng</h1>
                <p class="text-3xl font-semibold text-gray-900 mt-3 flex items-center">
                    <span class="text-lg text-gray-500 mr-2">Giá:</span>
                    <span class="text-3xl text-red-600 font-bold">4.200.000.000</span>
                    <span class="text-lg text-gray-600 ml-2">VNĐ</span>
                <div class="flex items-center mt-2">
                    <span class="text-sm text-gray-500 ml-2">(Có thỏa thuận)</span>
                    <i class="fas fa-check-circle text-green-500 ml-4"></i>
                </div>
                </p>
                <!-- Thông tin cơ bản về đất -->
                <div class="bg-white shadow-2xl rounded-lg mt-6 p-6">
                    <p class="text-2xl font-semibold text-gray-900 mb-4">Thông tin cơ bản về đất</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Mã tin -->
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-id-badge text-gray-600"></i>
                            <div>
                                <p class="text-gray-500">Mã tin</p>
                                <p class="font-semibold">VM-266534</p>
                            </div>
                        </div>

                        <!-- Thông tin -->
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-info-circle text-gray-600"></i>
                            <div>
                                <p class="text-gray-500">Thông tin</p>
                                <p class="font-semibold">Mua bán - Nhà - đất trong Ngõ</p>
                            </div>
                        </div>

                        <!-- Nơi đăng -->
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-map-marker-alt text-gray-600"></i>
                            <div>
                                <p class="text-gray-500">Nơi đăng</p>
                                <p class="font-semibold">Hải An - Hải Phòng</p>
                            </div>
                        </div>

                        <!-- Loại giấy tờ -->
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-certificate text-gray-600"></i>
                            <div>
                                <p class="text-gray-500">Loại giấy tờ</p>
                                <p class="font-semibold">Sổ đỏ</p>
                            </div>
                        </div>

                        <!-- Diện tích MB -->
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-ruler-combined text-gray-600"></i>
                            <div>
                                <p class="text-gray-500">Diện tích MB</p>
                                <p class="font-semibold">50 m²</p>
                            </div>
                        </div>

                        <!-- Diện tích SD -->
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-cogs text-gray-600"></i>
                            <div>
                                <p class="text-gray-500">Diện tích SD</p>
                                <p class="font-semibold">Liên hệ</p>
                            </div>
                        </div>

                        <!-- Chiều rộng -->
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-expand-arrows-alt text-gray-600"></i>
                            <div>
                                <p class="text-gray-500">Chiều rộng</p>
                                <p class="font-semibold">5 m</p>
                            </div>
                        </div>

                        <!-- Chiều dài -->
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-expand-arrows-alt text-gray-600"></i>
                            <div>
                                <p class="text-gray-500">Chiều dài</p>
                                <p class="font-semibold">10 - 11 m</p>
                            </div>
                        </div>

                        <!-- Số tầng -->
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-building text-gray-600"></i>
                            <div>
                                <p class="text-gray-500">Số tầng</p>
                                <p class="font-semibold">4 tầng</p>
                            </div>
                        </div>

                        <!-- Phòng ngủ -->
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-bed text-gray-600"></i>
                            <div>
                                <p class="text-gray-500">Phòng ngủ</p>
                                <p class="font-semibold">4 phòng</p>
                            </div>
                        </div>

                        <!-- Phòng toilet -->
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-toilet text-gray-600"></i>
                            <div>
                                <p class="text-gray-500">Phòng toilet</p>
                                <p class="font-semibold">3 phòng</p>
                            </div>
                        </div>

                        <!-- Hướng -->
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-arrow-alt-circle-up text-gray-600"></i>
                            <div>
                                <p class="text-gray-500">Hướng</p>
                                <p class="font-semibold">Bắc</p>
                            </div>
                        </div>

                        <!-- Hướng phong thủy -->
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-compass text-gray-600"></i>
                            <div>
                                <p class="text-gray-500">Hướng phong thủy</p>
                                <p class="font-semibold">Đông tứ trạch</p>
                            </div>
                        </div>

                        <!-- Thời gian đăng -->
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-calendar-alt text-gray-600"></i>
                            <div>
                                <p class="text-gray-500">Thời gian đăng</p>
                                <p class="font-semibold">11:11 - 06/03/2025</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Thông tin giới thiệu đất -->
                <div class="bg-white shadow-2xl rounded-lg mt-6 p-6">
                    <p class="text-2xl font-semibold text-gray-900 mb-4">
                        <i class="fas fa-home text-gray-600 inline mr-2"></i>
                        Chỉ còn 2 căn trong dãy nhà cực đẹp mặt ngõ 522 Ngô Gia Tự.
                    </p>

                    <p class="text-lg text-gray-700 mb-4">
                        <span class="font-semibold text-gray-900">Nhà xây mới 4 tầng độc lập, kiên cố, thiết kế hiện đại, trẻ trung, các khu chức năng bố trí hợp lý, công năng sử dụng cao.</span>
                    </p>

                    <p class="text-lg text-gray-700 mb-4">
                        <span class="font-semibold">Cấu trúc nhà:</span> phòng khách, 4 phòng ngủ, phòng thờ, phòng ăn và bếp, sân phơi, 3 toilet.
                    </p>

                    <p class="text-lg text-gray-700 mb-4">
                        <span class="font-semibold">Diện tích MB:</span> 50m², mặt tiền 5m cực đẹp, từ tầng 2 đua ra rộng rãi, <span class="text-red-600 font-bold">giá bán chỉ 4,2 tỷ đồng (có thỏa thuận)</span>.
                    </p>

                    <p class="text-lg text-gray-700 mb-4">
                        <span class="font-semibold text-gray-900">Vị trí cực đẹp:</span>
                    </p>

                    <ul class="text-gray-700 mb-4">
                        <li><i class="fas fa-check-circle text-green-500 inline mr-2"></i>Chỉ cách mặt phố Ngô Gia Tự sầm uất chỉ vài bước chân, ngõ thông, giao thông thuận tiện.</li>
                        <li><i class="fas fa-check-circle text-green-500 inline mr-2"></i>Mặt ngõ rộng rãi, ô tô đỗ cửa.</li>
                        <li><i class="fas fa-check-circle text-green-500 inline mr-2"></i>Thuộc khu dân cư đông đúc, văn minh, xung quanh ngập tràn tiện ích: gần trường học các cấp, chợ dân sinh, trung tâm thương mại, siêu thị, ngân hàng, bệnh viện,...</li>
                    </ul>

                    <p class="text-lg text-gray-700 mb-4">
                        Phù hợp vừa ở vừa kinh doanh, buôn bán, mở tiệm nails, salon, cửa hàng tạp hóa, thời trang,...
                    </p>

                    <p class="text-lg text-gray-700 font-semibold mb-4">
                        <span class="text-blue-600">Khách hàng quan tâm:</span> Liên hệ chính chủ:
                        <a href="tel:0389616946" class="text-blue-600 font-semibold">0389616946</a> -
                        <a href="tel:0869938981" class="text-blue-600 font-semibold">0869938981</a> để biết thêm thông tin.
                    </p>
                </div>
                <!-- Thông tin về google maps -->
                <div class="bg-white shadow-lg rounded-lg mt-6 p-4 max-w-full overflow-hidden">
                    <div class="relative w-full h-64">
                        
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d932.2669946671554!2d106.7114090756494!3d20.828961249158944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7007c451aba9%3A0xd298e76e2ae9660b!2zNTIyIE5nw7QgR2lhIFThu7EsIFRow6BuaCBUw7QsIEjhuqNpIEFuLCBI4bqjaSBQaMOybmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1741609264281!5m2!1svi!2s"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

            </div>
            <div class="lg:col-span-2 md:col-span-6 bg-gray-100 flex flex-col">

            </div>
        </div>
    </div>
    @include('layouts.footer')
    <script>
        let slideIndex = 0;
        const slides = document.querySelectorAll(".slide");

        function moveSlide(n) {
            slideIndex += n;
            if (slideIndex >= slides.length) slideIndex = 0;
            if (slideIndex < 0) slideIndex = slides.length - 1;
            document.getElementById("slider").style.transform = `translateX(-${slideIndex * 100}%)`;
        }
    </script>
</body>

</html>