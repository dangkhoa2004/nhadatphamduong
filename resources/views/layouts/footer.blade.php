<div class="bg-red-500">
    <div class="text-white py-6 max-w-screen-xl mx-auto px-4">
        <div class="container mx-auto flex flex-col lg:flex-row justify-between space-y-6 lg:space-y-0">
            <div class="flex flex-col space-y-2 text-center lg:text-left">
                <h3 class="font-semibold text-xl">CÔNG TY CỔ PHẦN ĐẦU TƯ PHẠM DƯƠNG</h3>
            </div>
            <div class="flex flex-col space-y-2 text-center lg:text-left">
                <button class="dropdown-btn font-semibold text-xl flex justify-between items-center w-full lg:w-auto">
                    DỊCH VỤ
                    <svg class="h-5 w-5 lg:hidden dropdown-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 6.293a1 1 0 011.414 0L10 9.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <ul class="text-sm dropdown-content space-y-1 lg:block hidden">
                    <li><a href="#" class="hover:underline">Tin tức bất động sản</a></li>
                    <li><a href="#" class="hover:underline">Phong thủy</a></li>
                    <li><a href="#" class="hover:underline">Mẫu nhà đẹp</a></li>
                    <li><a href="#" class="hover:underline">Cần bán nhà</a></li>
                    <li><a href="#" class="hover:underline">Văn bản pháp luật</a></li>
                </ul>
            </div>
            <div class="flex flex-col space-y-2 text-center lg:text-left">
                <button class="dropdown-btn font-semibold text-xl flex justify-between items-center w-full lg:w-auto">
                    THÔNG TIN
                    <svg class="h-5 w-5 lg:hidden dropdown-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 6.293a1 1 0 011.414 0L10 9.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <ul class="text-sm dropdown-content space-y-1 lg:block hidden">
                    <li><a href="#" class="hover:underline">Quy chế hoạt động</a></li>
                    <li><a href="#" class="hover:underline">Điều khoản sử dụng</a></li>
                    <li><a href="#" class="hover:underline">Bảng giá dịch vụ</a></li>
                    <li><a href="#" class="hover:underline">Hướng dẫn đăng tin</a></li>
                    <li><a href="#" class="hover:underline">Hướng dẫn thanh toán</a></li>
                    <li><a href="#" class="hover:underline">Trợ giúp pháp lý</a></li>
                </ul>
            </div>
            <div class="flex flex-col space-y-2 text-center lg:text-left">
                <button class="dropdown-btn font-semibold text-xl flex justify-between items-center w-full lg:w-auto">
                    LIÊN HỆ
                    <svg class="h-5 w-5 lg:hidden dropdown-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 6.293a1 1 0 011.414 0L10 9.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <ul class="text-sm dropdown-content space-y-1 lg:block hidden">
                    <li><a href="#" class="hover:underline">Địa chỉ: .............Cát Bi, Hải Phòng</a></li>
                    <li><a href="#" class="hover:underline">Điện thoại: (0389) 616 946 | Hotline: 0389 616 946</a></li>
                    <li><a href="#" class="hover:underline">Email: <a href="mailto:nhadatphamduong@gmail.com" class="hover:underline">nhadatphamduong@gmail.com</a></a></li>
                    <li><a href="#" class="hover:underline">Hướng dẫn đăng tin</a></li>
                    <li><a href="#" class="hover:underline">Hướng dẫn thanh toán</a></li>
                    <li><a href="#" class="hover:underline">Trợ giúp pháp lý</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="text-white text-center py-2 bg-green-500">
    <p>&copy; 2025 nhadatphamduong.com.vn Thiết kế và phát triển bởi dangkh0a®</p>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dropdownButtons = document.querySelectorAll(".dropdown-btn");
        dropdownButtons.forEach((button) => {
            button.addEventListener("click", function() {
                if (window.innerWidth < 1024) {
                    let content = this.nextElementSibling;
                    let icon = this.querySelector(".dropdown-icon");
                    if (content.classList.contains("hidden")) {
                        content.classList.remove("hidden");
                        icon.style.transform = "rotate(180deg)";
                    } else {
                        content.classList.add("hidden");
                        icon.style.transform = "rotate(0deg)";
                    }
                }
            });
        });

        function checkScreenSize() {
            const dropdownContents = document.querySelectorAll(".dropdown-content");
            dropdownContents.forEach((content) => {
                if (window.innerWidth >= 1024) {
                    content.classList.remove("hidden");
                } else {
                    content.classList.add("hidden");
                }
            });
            const icons = document.querySelectorAll(".dropdown-icon");
            icons.forEach((icon) => {
                icon.style.transform = "rotate(0deg)";
            });
        }
        window.addEventListener("resize", checkScreenSize);
        checkScreenSize();
    });
</script>