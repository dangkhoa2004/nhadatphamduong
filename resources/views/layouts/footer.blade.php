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
                    <li><x-link-component href="#" text="Tin tức bất động sản" /></li>
                    <li><x-link-component href="#" text="Phong thủy" /></li>
                    <li><x-link-component href="#" text="Mẫu nhà đẹp" /></li>
                    <li><x-link-component href="#" text="Cần bán nhà" /></li>
                    <li><x-link-component href="#" text="Văn bản pháp luật" /></li>
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
                    <li><x-link-component href="#" text="Quy chế hoạt động" /></li>
                    <li><x-link-component href="#" text="Điều khoản sử dụng" /></li>
                    <li><x-link-component href="#" text="Bảng giá dịch vụ" /></li>
                    <li><x-link-component href="#" text="Hướng dẫn đăng tin" /></li>
                    <li><x-link-component href="#" text="Hướng dẫn thanh toán" /></li>
                    <li><x-link-component href="#" text="Trợ giúp pháp lý" /></li>
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
                    <li><x-link-component href="#" text="Địa chỉ: .............Cát Bi, Hải Phòng" /></li>
                    <li><x-link-component href="#" text="Điện thoại: (0389) 616 946 | Hotline: 0389 616 946" /></li>
                    <li><x-link-component href="mailto:nhadatphamduong@gmail.com" text="Email: nhadatphamduong@gmail.com" /></li>
                    <li><x-link-component href="#" text="Hướng dẫn đăng tin" /></li>
                    <li><x-link-component href="#" text="Hướng dẫn thanh toán" /></li>
                    <li><x-link-component href="#" text="Trợ giúp pháp lý" /></li>
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