<script setup>
import Sidebar from '@/Layouts/Menu.vue';
import Footer from '@/Layouts/Footer.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

// Define props to receive the search results
defineProps({
  merchandises: {
    type: Array,
    required: true
  }
});

// Initialize the form for future actions (if necessary)
const form = useForm({});
</script>

<template>
  <div class="min-h-screen flex flex-col">
    <Sidebar />
    <div class="flex-grow container mx-auto py-8">
      <h2 class="text-2xl font-bold mb-6">Kết quả tìm kiếm</h2>
      <div v-if="merchandises.length" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div 
          v-for="(item, index) in merchandises" 
          :key="index"
          class="relative bg-white rounded-xl shadow-lg p-4 transition-transform transform hover:-translate-y-2"
        >
          <Link :href="route('productdetail', { id: item.id })">
            <img 
              :src="`/images/${item.images}`" 
              class="h-40 w-full object-cover rounded-xl mb-4"
              alt="Product Image"
            />
            <h2 class="font-bold text-lg mb-2">{{ item.name }}</h2>
            <span class="text-xl font-semibold">Giá {{ item.discount }}.000</span>
            <div class="flex items-center gap-2 my-2">
              <span class="text-sm line-through opacity-75">Giá {{ item.price }}.000</span>
              <span class="font-bold text-sm px-2 py-1 bg-yellow-300 rounded-full text-gray-600">Tiết kiệm 10%</span>
            </div>
            <div class="flex items-center gap-1 mb-4">
              <img 
                v-for="i in 5" 
                :key="i" 
                :src="'/images/star.png'" 
                alt="Star" 
                class="w-5" 
                :class="{ 'opacity-50': i > item.rating }"
              />
              <p class="font-bold text-xs text-gray-700">tốt nhất</p>
            </div>
          </Link>
          <div class="flex items-center justify-between gap-2 mt-4">
            <button class="flex-1 px-3 py-2 rounded-lg bg-blue-300 hover:bg-blue-500 font-semibold">Mua Ngay</button>
            <button class="px-3 py-2 rounded-lg bg-gray-300 hover:bg-gray-500">
              <img src="/images/giohang.png" alt="Add to Cart" class="w-6" />
            </button>
            <button class="px-3 py-2 rounded-lg bg-gray-300 hover:bg-gray-500">
              <img src="/images/tim.png" alt="Favorite" class="w-6" />
            </button>
          </div>
        </div>
      </div>
      <div v-else>
        <p>Xin Lỗi Sản phẩm bạn đang tìm không có</p>
      </div>
    </div>
    <Footer />
  </div>
</template>
