<script setup>
 
import Sidebar from '@/Layouts/Sidebar.vue' 
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head ,useForm} from '@inertiajs/vue3';
import { defineProps } from 'vue';
const props = defineProps({
   merchandise: Object
  
});
const form = useForm({
 
 int_category: props.merchandise.int_category,
 name: props.merchandise.name,
 quality: props.merchandise.quality,
 description: props.merchandise.description,
 material: props.merchandise.material,
 price: props.merchandise.price,
 discount: props.merchandise.discount,
 images: props.merchandise.images,
});


// Hàm gửi biểu mẫu
const submitForm = () => {
  form.post(route('merchandise.update',props.merchandise.id));
};

</script>

<template>
    <Sidebar>
      <div class="flex flex-col justify-center items-center h-full">
        <div class="bg-gray-200 px-6 py-8 mb-8">
        <h1 class="text-3xl font-bold">Sửa sản phẩm</h1>
      </div>
  
      <form @submit.prevent="submitForm" class="grid grid-cols-2 gap-x-4 px-6 py-4">
        <div class="mb-4">
    <label for="int_category" class="block mb-1">Mã loại</label>
    <input v-model="form.int_category" type="text" id="int_category" name="int_category" placeholder="Mã loại" class="form-input">
   
  </div>

  <div class="mb-4">
    <label for="name" class="block mb-1">Tên Sản phẩm</label>
    <input v-model="form.name" type="text" id="name" name="name" placeholder="Tên sản phẩm" class="form-input">
   
  </div>
  
        <div class="mb-4">
          <label for="quality" class="block mb-1">Kích Thước</label>
          <input v-model="form.quality" type="text" id="quality" name="quality" placeholder="Địa Chỉ..." class="form-input">
          
        </div>
  
        <div class="mb-4">
          <label for="description" class="block mb-1">Mô tả Sản Phẩm</label>
          <input v-model="form.description" type="text" id="description" name="description" placeholder="Email..." class="form-input">
        
        </div>
  
        <div class="mb-4">
          <label for="material" class="block mb-1">Xuất Xứ</label>
          <input v-model="form.material" type="text" id="material" name="material" placeholder="Mật khẩu..." class="form-input">
        
        </div>
        <div class="mb-4">
          <label for="price" class="block mb-1">Gía </label>
          <input v-model="form.price" type="text" id="price" name="price" placeholder="Gía" class="form-input">
        
        </div>
        <div class="mb-4">
          <label for="discount" class="block mb-1">Gía giảm</label>
          <input v-model="form.discount" type="text" id="discount" name="discount" placeholder="Mật khẩu..." class="form-input">
       
        </div>
        <div class="mb-4">
  <label for="images" class="block mb-1">Hình ảnh</label>
  <input 
    type="file" 
    id="images" 
    name="images" 
    accept="image/*" 
    @change="handleImageUpload" 
    class="form-input"
  >
  
</div>

  

  
        <div class="flex justify-between">
          <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Tạo mới</button>
          <a :href="route('merchandise.index')" class="text-blue-500 hover:underline">Quay lại</a>
        </div>
        <input type="hidden" name="_token" :value="csrf">
      </form>
    </div>
    </Sidebar>
  </template>
  