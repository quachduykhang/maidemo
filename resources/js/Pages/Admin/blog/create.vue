

<script setup>
 
import Sidebar from '@/Layouts/Sidebar.vue' 
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head , useForm } from '@inertiajs/vue3';



 

// Khởi tạo dữ liệu mẫu cho biểu mẫu
const formData = useForm({
  name: '',
  description:'',
 images:'',


}) ;


// Hàm gửi biểu mẫu
const submitForm = () => {
  formData.post(route('blog.store'));
};

</script>

<template>
    <Sidebar>
      <div class="flex flex-col justify-center items-center h-full">
        <div class="bg-gray-200 px-6 py-8 mb-8">
        <h1 class="text-3xl font-bold">Thêm Tin Tức</h1>
      </div>
  
      <form @submit.prevent="submitForm" class="grid grid-cols-2 gap-x-4 px-6 py-4">
        <div class="mb-4">
    <label for="name" class="block mb-1">Tên Tin tức</label>
    <input v-model="formData.name" type="text" id="name" name="name" placeholder="Họ và tên" class="form-input">
    
  </div>
  <div class="mb-4">
    <label for="description" class="block mb-1">Mô tả tin tức</label>
    <input v-model="formData.description" type="text" id="description" name="description" placeholder="Mô tả" class="form-input">
    
  </div>
  <div class="mb-4">
  <label for="images" class="block mb-1">Hình ảnh</label>
  <input v-model="formData.images" type="text" id="images" name="images" placeholder="Hình ảnh..." class="form-input">
        <span v-if="formErrors.images" class="text-aquamarine">{{ formErrors.images }}</span>
  <span v-if="formErrors.images" class="text-aquamarine">{{ formErrors.images }}</span>
</div>
  

  
        <div class="flex justify-between">
          <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Tạo mới</button>
          <a :href="route('blog.index')" class="text-blue-500 hover:underline">Quay lại</a>
        </div>
        <input type="hidden" name="_token" :value="csrf">
      </form>
    </div>
    </Sidebar>
  </template>
  