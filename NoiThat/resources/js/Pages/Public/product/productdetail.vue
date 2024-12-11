<script setup>
import Sidebar from '@/Layouts/Menu.vue';
import Footer from '@/Layouts/Footer.vue';
import { defineProps } from 'vue';
import { router } from '@inertiajs/vue3';


const props = defineProps({
  merchandise: Object
});

const addToCart = (product) => {
  router.post(route('cart.store', product), {
    onSuccess: (page) => {
      if (page.props.flash.success) {
        Swal.fire({
          toast: true,
          icon: 'success',
          position: 'top-end',
          showConfirmButton: false,
          title: page.props.flash.success
        });
      }
    }
  });
};
</script>

<template>
  <Sidebar/>
  <div class="bg-gray-400 bg-opacity-10">
    <div class="flex items-center justify-center w-full h-screen">
      <div class="flex items-center justify-between p-4 px-2 py-2 rounded-md bg-white">
        <div class="w-[850px]">
          <img :src="'/images/' + props.merchandise.images" alt="Product Image" />
        </div>
        <div class="mx-2 w-full mb-32 mt-14">
          <h1 class="font-bold text-3xl">{{ props.merchandise.name }}</h1>
          <div class="flex items-center justify-start mt-2.5 mb-2.5">
            <span class="font-semibold text-xl">
              Giá: {{ props.merchandise.price }}
              <a href="#" class="text-red-500 line-through mx-1"></a>
              <a href="#" class="mx-2">| Giảm còn: {{ props.merchandise.discount }} </a>
            </span>
          </div>
          <hr class="h-[1px] mt-2 mb-2 border-0 bg-gray-700">
          <div class="mt-2.5 mb-2.5 text-lg">
            <div class="font-semibold">Status: đang bán <a href="#" class="font-normal mx-1"></a></div>
            <div class="font-semibold">Mô tả: {{ props.merchandise.description }} <a href="#" class="font-normal mx-1"></a></div>
            <div class="font-semibold">Kích thước: {{ props.merchandise.quality }} <a href="#" class="font-normal mx-1"></a></div>
            <div class="font-semibold">Kích thước: {{ props.merchandise.material }} <a href="#" class="font-normal mx-1"></a></div>
          </div>
          <hr class="h-[1px] mt-2 mb-2 border-0 bg-gray-700">
          <div>
            <label for="quantity-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
              Nhập số lượng sản phẩm muốn mua:
            </label>
            <input type="number" id="quantity-input" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
          </div>
          <div class="flex items-center justify-start mt-2.5">
            <a :href="route('cart',merchandise.id)" class="bg-sky-700 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-md" >
              Thêm vào giỏ hàng
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <Footer/>
</template>

<style scoped>
input[type="number"] {
  width: 60px;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  text-align: center;
}
</style>
