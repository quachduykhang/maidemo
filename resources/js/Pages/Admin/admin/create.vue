

<script setup>
 
import Sidebar from '@/Layouts/Sidebar.vue' 
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head , useForm } from '@inertiajs/vue3';



 

// Khởi tạo dữ liệu mẫu cho biểu mẫu
const formData = useForm({
  name: '',
  email:'',
  password: '',

}) ;

// Khởi tạo các lỗi của biểu mẫu3
let formErrors = {};

// Hàm gửi biểu mẫu
const submitForm = () => {
  formData.post(route('admin.store'));
};

</script>

<template>
    <Sidebar>
      <div class="flex flex-col justify-center items-center h-full">
        <div class="bg-gray-200 px-6 py-8 mb-8">
        <h1 class="text-3xl font-bold">Thêm nhân viên mới</h1>
      </div>
  
      <form @submit.prevent="submitForm" class="grid grid-cols-2 gap-x-4 px-6 py-4">
        <div class="mb-4">
    <label for="name" class="block mb-1">Họ và Tên</label>
    <input v-model="formData.name" type="text" id="name" name="name" placeholder="Họ và tên" class="form-input">
    <span v-if="formErrors.name" class="text-aquamarine">{{ formErrors.name }}</span>
  </div>

  <div class="mb-4">
    <label for="email" class="block mb-1">Email</label>
    <input v-model="formData.email" type="text" id="email" name="email" placeholder="Ngày Sinh..." class="form-input">
    <span v-if="formErrors.email" class="text-aquamarine">{{ formErrors.email }}</span>
  </div>
  
        <div class="mb-4">
          <label for="password" class="block mb-1">Mật khẩu</label>
          <input v-model="formData.password" type="text" id="password" name="password" placeholder="Mật khẩu..." class="form-input">
          <span v-if="formErrors.password" class="text-aquamarine">{{ formErrors.password }}</span>
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
  