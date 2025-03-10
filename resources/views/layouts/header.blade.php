<!-- Navbar -->
<nav class="bg-red-500">
    <div class="flex justify-between items-center max-w-screen-xl mx-auto px-4 py-3">
        <!-- Logo Section -->
        <div class="flex items-center space-x-4">
            <span class="text-white font-bold text-xl">PHAM DUONG</span>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-6 text-white">
            <a href="#" class="hover:text-yellow-400">Trang Chủ</a>
            <a href="/details" class="hover:text-yellow-400">Sales Phạm Dương</a>
            <a href="/posts" class="hover:text-yellow-400">Đăng tin ngay</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="md:hidden text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-red-600 p-3 space-y-2">
        <a href="/" class="block text-white p-3">Trang Chủ</a>
        <a href="/details" class="block text-white p-3">Sales Phạm Dương</a>
        <a href="/posts" class="block text-white p-3">Đăng tin ngay</a>
    </div>
</nav>

<!-- Banner Section -->
<div class="flex justify-center">
    <img src="https://nhadatvanminh.com.vn/images/picture/2366.gif" alt="Banner Image">
</div>

<!-- Search Bar Section -->
<div class="bg-gray-100">
    <div class="flex justify-between items-center p-4 max-w-screen-xl mx-auto">
        <!-- Left Side: Logo and filter -->
        <div class="flex items-center space-x-4">
            <div class="flex flex-col space-y-1 text-green-500">
                <div class="flex items-center space-x-1">
                    <span>Hải Phòng</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 6.293a1 1 0 011.414 0L10 9.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
                <span class="font-bold text-black">LỌC TÌM BẤT ĐỘNG SẢN</span>
            </div>
        </div>

        <!-- Right Side: Navigation icons -->
        <div class="hidden sm:flex space-x-4 text-gray-600">
            <div>
                <i class="fas fa-store h-6 w-6"></i>
                <span>MẶT PHỐ</span>
            </div>
            <div>
                <i class="fas fa-map-marker-alt h-6 w-6"></i>
                <span>NGÕ - HẺM</span>
            </div>
            <div>
                <i class="fas fa-cogs h-6 w-6"></i>
                <span>DỰ ÁN PHÂN LÔ</span>
            </div>
            <div>
                <i class="fas fa-home h-6 w-6"></i>
                <span>BIỆT THỰ</span>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuButton = document.getElementById("mobile-menu-button");
        const mobileMenu = document.getElementById("mobile-menu");
        menuButton.addEventListener("click", function() {
            mobileMenu.classList.toggle("hidden");
        });

        function checkScreenSize() {
            if (window.innerWidth >= 1024) {
                mobileMenu.classList.remove("hidden");
            } else {
                mobileMenu.classList.add("hidden");
            }
        }
        window.addEventListener("resize", checkScreenSize);
        checkScreenSize();
    });
</script>