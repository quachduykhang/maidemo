<script setup>
import Sidebar from '@/Layouts/Menu.vue';
import Footer from '@/Layouts/Footer.vue';
</script>

<style>
.custom-slider {
    position: relative;
    width: 100%;
    max-width: 100%;
    height: auto;
    overflow: hidden;
    border-radius: 8px; /* Giữ góc bo tròn */
}

.custom-slider img {
    width: 100%;
    height: auto; /* Giữ tỷ lệ gốc của hình ảnh */
    object-fit: cover; /* Đảm bảo ảnh lấp đầy khung chứa */
    opacity: 0.75; /* Độ mờ */
    position: absolute;
    top: 0;
    left: 0;
    animation: slide-animation 12s infinite;
}

.custom-slider img:nth-child(1) {
    animation-delay: 0s;
}

.custom-slider img:nth-child(2) {
    animation-delay: 4s;
}

.custom-slider img:nth-child(3) {
    animation-delay: 8s;
}

@keyframes slide-animation {
    0% { opacity: 1; }
    33% { opacity: 0; }
    66% { opacity: 0; }
    100% { opacity: 1; }
}
</style>

<template>
<body>
<Sidebar/>

<!-- Start Content -->
<div id="home" class="pt-16">
    <div class="p-4 bg-opacity-50 font-medium text-center">
        <h1 class="text-5xl text-yellow-800">Giới Thiệu</h1>
    </div>
    
    <!-- Image in Display Container-->
    <div class="relative mt-12">
        <div class="custom-slider">
            <img :src="'/images/gt1.jpg'" alt="Table">
            <img :src="'/images/gt4.jpg'" alt="Table">
            <img :src="'/images/gt5.jpg'" alt="Table">
        </div>
    </div>

    <!-- About 1 -->
    <div id="about" class="py-13 px-3">
        <div class="flex flex-wrap -mx-4 flex-col">
            <div class="w-full px-4 mb-8">
                <!-- Slider is moved up to the image container -->
            </div>

            <div class="w-full px-4">
                <h1 class="text-3xl font-bold text-center mb-4 text-yellow-800">Nhiều khách hàng hay hỏi chúng tôi rằng, K&V nghĩa là gì vậy bạn?</h1>
                <p class="text-xl leading-relaxed">
                    K&V là viết tắt của ba từ: K trong "Key", V trong "Value" và P trong "Product". Sản phẩm giá trị nhất.

K&V mong muốn mang lại những “Sản phẩm giá trị nhất” cho khách hàng và phù hợp với biến hóa của mọi không gian. 

Bởi vậy, chúng tôi luôn luôn sáng tạo và không ngừng học hỏi để cho ra các dòng sản phẩm sofa, bàn ghế, bàn trà... nhằm đạt được mục tiêu mang lại “Sản phẩm giá trị nhất” cho khách hàng.

Viết lại theo phong cách của K&V:

---

K&V chính là viết tắt của ba từ: K trong "Most", V trong "Value" và P trong "Product". MVP = Most Value Product = Sản phẩm giá trị nhất.

MVP HOME cam kết mang đến cho khách hàng những “Sản phẩm giá trị nhất” phù hợp với mọi không gian sống. 

Với tinh thần sáng tạo không ngừng và luôn học hỏi, chúng tôi không ngừng phát triển các dòng sản phẩm như sofa, bàn ghế, bàn trà... nhằm đạt được mục tiêu đem lại “Sản phẩm giá trị nhất” cho khách hàng.
                </p>
                <p class="text-lg text-gray-600 mt-4 hidden md:block">
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
    </div>

    <!-- About 2 -->
    <div id="about" class="py-16 px-8">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-1/2 px-4 mb-8 lg:mb-0">
                <img src="/images/gt2.jpg" alt="Table" class="rounded opacity-75 w-auto h-18">
            </div>

            <div class="w-full lg:w-1/2 px-4">
                <h1 class="text-3xl font-bold text-center mb-4 text-yellow-800">TẦM NHÌN VÀ SỨ MỆNH</h1>
                <p class="text-2xl leading-relaxed">
                    Với tư duy mình chỉ là 1 hạt cát giữa biển lớn, MVPHOME luôn học hỏi không ngừng, sáng tạo không ngừng để theo kịp xu hướng nội thất luôn luôn thay đổi và những điều mới mẻ thú vị của nội thất thế giới.

MVP HOME thương hiệu thuộc MVP GROUP  luôn cố gắng nỗ lực hơn nữa để tạo ra những mẫu sofa bàn ghế đẹp, tinh tế theo phong cách 6Ý tương đương với hàng nhập khẩu và giá thành tốt nhất, những mẫu bàn ghế đẹp và tính tế cho không gian sống của gia chủ!
                </p>
                <p class="text-lg text-gray-600 mt-4 hidden md:block">
                    Chúng tôi đặc biệt cảm ơn tới các anh chị kiến trúc sư, đơn vị nội thất và khách hàng đã luôn trân quý và đã luôn tin tưởng chọn sản phẩm của MVP HOME.
                </p>
            </div>
        </div>
    </div>
</div>

</body>
<Footer/>
</template>
