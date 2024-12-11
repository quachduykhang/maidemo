<template>
    <body>
      <Sidebar />
  
      <!-- Start Content -->
      <div id="home" class="pt-16">
        <div class="p-4 bg-opacity-50 font-medium text-center">
          <h1 class="text-5xl text-yellow-800">Giới Thiệu</h1>
        </div>
  
        <!-- Image Slider -->
        <div class="slider">
          <div class="slides" :style="{ transform: `translateX(-${currentIndex * 100}%)` }">
            <img v-for="(image, index) in images" :key="index" :src="image" class="slide" />
          </div>
          <button class="prev" @click="prevSlide">&#10094;</button>
          <button class="next" @click="nextSlide">&#10095;</button>
        </div>
  
        <!-- About 1 -->
        <div id="about" class="py-13 px-3">
          <div class="flex flex-wrap -mx-4 flex-col">
            <div class="w-full px-4 mb-8"></div>
  
            <div class="w-full px-4">
              <h1 class="text-3xl font-bold text-center mb-4 text-yellow-800">
                Nhiều khách hàng hay hỏi chúng tôi rằng, K&V nghĩa là gì vậy bạn?
              </h1>
              <p class="text-xl leading-relaxed">
                K&V là viết tắt của ba từ: K trong "Key", V trong "Value" và P trong "Product". Sản phẩm giá trị nhất.
  
                K&V mong muốn mang lại những “Sản phẩm giá trị nhất” cho khách hàng và phù hợp với biến hóa của mọi không
                gian.
  
                Bởi vậy, chúng tôi luôn luôn sáng tạo và không ngừng học hỏi để cho ra các dòng sản phẩm sofa, bàn ghế, bàn
                trà... nhằm đạt được mục tiêu mang lại “Sản phẩm giá trị nhất” cho khách hàng.
  
                Viết lại theo phong cách của K&V:
  
                ---
  
                K&V chính là viết tắt của ba từ: K trong "Most", V trong "Value" và P trong "Product". MVP = Most Value
                Product = Sản phẩm giá trị nhất.
  
                MVP HOME cam kết mang đến cho khách hàng những “Sản phẩm giá trị nhất” phù hợp với mọi không gian sống.
  
                Với tinh thần sáng tạo không ngừng và luôn học hỏi, chúng tôi không ngừng phát triển các dòng sản phẩm như
                sofa, bàn ghế, bàn trà... nhằm đạt được mục tiêu đem lại “Sản phẩm giá trị nhất” cho khách hàng.
              </p>
              <p class="text-lg text-gray-600 mt-4 hidden md:block">
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
        </div>
  
        <!-- About 2 -->
        <div id="about" class="py-16 px-8">
          <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-1/2 px-4 mb-8 lg:mb-0">
              <img src="/images/gt2.jpg" alt="Table" class="rounded opacity-75 w-auto h-18" />
            </div>
  
            <div class="w-full lg:w-1/2 px-4">
              <h1 class="text-3xl font-bold text-center mb-4 text-yellow-800">TẦM NHÌN VÀ SỨ MỆNH</h1>
              <p class="text-2xl leading-relaxed">
                Với tư duy mình chỉ là 1 hạt cát giữa biển lớn, MVPHOME luôn học hỏi không ngừng, sáng tạo không ngừng để
                theo kịp xu hướng nội thất luôn luôn thay đổi và những điều mới mẻ thú vị của nội thất thế giới.
  
                MVP HOME thương hiệu thuộc MVP GROUP luôn cố gắng nỗ lực hơn nữa để tạo ra những mẫu sofa bàn ghế đẹp, tinh
                tế theo phong cách 6Ý tương đương với hàng nhập khẩu và giá thành tốt nhất, những mẫu bàn ghế đẹp và tính
                tế cho không gian sống của gia chủ!
              </p>
              <p class="text-lg text-gray-600 mt-4 hidden md:block">
                Chúng tôi đặc biệt cảm ơn tới các anh chị kiến trúc sư, đơn vị nội thất và khách hàng đã luôn trân quý và đã
                luôn tin tưởng chọn sản phẩm của MVP HOME.
              </p>
            </div>
          </div>
        </div>
      </div>
  
      <Footer />
    </body>
  </template>
  
  <script setup>
  import Sidebar from '@/Layouts/Menu.vue';
  import Footer from '@/Layouts/Footer.vue';
  import { ref, onMounted, onUnmounted } from 'vue';
  
  const images = ref(['/images/gt1.jpg', '/images/gt3.jpg']);
  const currentIndex = ref(0);
  
  const nextSlide = () => {
    currentIndex.value = (currentIndex.value + 1) % images.value.length;
  };
  
  const prevSlide = () => {
    currentIndex.value = (currentIndex.value - 1 + images.value.length) % images.value.length;
  };
  
  // Function to auto-slide
  const startAutoSlide = () => {
    autoSlideInterval = setInterval(nextSlide, 3000); // Change slide every 3 seconds
  };
  
  const stopAutoSlide = () => {
    clearInterval(autoSlideInterval);
  };
  
  let autoSlideInterval;
  
  onMounted(() => {
    startAutoSlide();
  });
  
  onUnmounted(() => {
    stopAutoSlide();
  });
  </script>
  
  <style scoped>
  body {
    font-family: Arial, sans-serif;
  }
  
  .slider {
    position: relative;
    width: 80%;
    max-width: 600px;
    margin: auto;
    overflow: hidden;
    border: 2px solid #ddd;
  }
  
  .slides {
    display: flex;
    transition: transform 0.5s ease-in-out;
  }
  
  .slide {
    min-width: 100%;
    height: auto;
  }
  
  button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    border: none;
    color: white;
    padding: 10px;
    cursor: pointer;
    z-index: 100;
  }
  
  .prev {
    left: 10px;
  }
  
  .next {
    right: 10px;
  }
  
  button:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }
  </style>
  