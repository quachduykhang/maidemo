<script setup>
import Sidebar from '@/Layouts/Menu.vue';
import Footer from '@/Layouts/Footer.vue';
import { defineProps } from 'vue';
import { router } from '@inertiajs/vue3';

const props = defineProps({
  blogs: Object
});
</script>

<template>
  <Sidebar />
  <div class="max-w-4xl mx-auto p-5">
    <h2 class="text-3xl font-bold text-gray-800">{{ props.blogs.name }}</h2>
    <div class="flex items-center space-x-2">
    <img :src="'/images/aim.png'" alt="" class="w-6 h-6">
    <p class="text-gray-500">{{ props.blogs.created_at }}</p>
  </div>
  <div class="flex items-center mb-4 space-x-2">
    <img :src="'/images/users.png'" alt="" class="w-6 h-6">
    <p class="text-gray-600"> Quách Dũy Khang</p>
  </div>
    <div class="overflow-hidden rounded-lg shadow-lg mb-4">
        <img :src="'/images/' + props.blogs.images" alt="" />
    </div>
    <div class="bg-white p-6 rounded-lg shadow-lg">
      <h2 class="text-2xl font-semibold mb-4">{{ props.blogs.name }}</h2>
      <p>Trong thời gian gần đây, ghế thư giãn dần được khẳng định vị thế của mình 
        và ngày cho ra nhiều mẫu sản phẩm khác nhau. Điều này không chỉ đáp ứng người tiêu dùng mà còn giúp họ trải nghiệm được những phút giây thư giãn, giảm căng thẳng. Tuy nhiên, nhiều khách hàng vẫn chưa nẵm rõ được kích thước tiêu chuẩn của ghế sofa thư giãn dẫn đến không gian trở nên không phù hợp và gây tình trạng không gian trở nên gò bó. Và nếu bạn đang tìm một chiếc ghế thư giãn phù hợp với không gian hiện tại của mình thì hôm nay, K&V xin chia sẻ kích thước chuẩn của ghế thư giãn 2024 ngay bên dưới đây nhé!</p>
      <p class="text-gray-700">{{ props.blogs.description }}</p>
    </div>
  </div>
  <Footer />
</template>
