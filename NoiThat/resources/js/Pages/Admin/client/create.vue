<script setup>
 
import Sidebar from '@/Layouts/Sidebar.vue' 
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
const formData = useForm({
    
        name:'',
        date:'',
        address:'',
        ponits:'',
        email:'',
        password:'',
       

    });

// Khởi tạo các lỗi của biểu mẫu3
let formErrors = {};

// Hàm gửi biểu mẫu
const submitForm = () => {
  formData.post(route('client.store'));
};

</script>

<template>
    <Sidebar>
      <div class="flex flex-col justify-center items-center h-full">
        <div class="bg-gray-200 px-6 py-8 mb-8">
        <h1 class="text-3xl font-bold">Thêm khách hàng mới</h1>
      </div>
  
      <form @submit.prevent="submitForm" class="grid grid-cols-2 gap-x-4 px-6 py-4">
        <div class="mb-4">
    <label for="name" class="block mb-1">Họ và Tên</label>
    <input v-model="formData.name" type="text" id="name" name="name" placeholder="Họ và tên" class="form-input">
    <span v-if="formErrors.name" class="text-aquamarine">{{ formErrors.name }}</span>
  </div>
  <div class="mb-4">
    <label for="date" class="block mb-1">Ngày sinh</label>
    <input v-model="formData.date" type="text" id="date" name="date" placeholder="Ngày Sinh..." class="form-input">
    <span v-if="formErrors.date" class="text-aquamarine">{{ formErrors.date }}</span>
  </div>
  <div class="mb-4">
    <label for="address" class="block mb-1">Địa Chỉ </label>
    <input v-model="formData.address" type="text" id="address" name="address" placeholder="Địa chỉ ..." class="form-input">
    <span v-if="formErrors.address" class="text-aquamarine">{{ formErrors.address }}</span>
  </div>
  <div class="mb-4">
    <label for="ponits" class="block mb-1">Điểm</label>
    <input v-model="formData.ponits" type="text" id="ponits" name="ponits" placeholder="Emai..." class="form-input">
    <span v-if="formErrors.ponits" class="text-aquamarine">{{ formErrors.ponits }}</span>
  </div>
  <div class="mb-4">
    <label for="email" class="block mb-1">Email</label>
    <input v-model="formData.email" type="text" id="email" name="email" placeholder="Emai..." class="form-input">
    <span v-if="formErrors.email" class="text-aquamarine">{{ formErrors.email }}</span>
  </div>
  
        <div class="mb-4">
          <label for="password" class="block mb-1">Mật khẩu</label>
          <input v-model="formData.password" type="text" id="password" name="password" placeholder="Mật khẩu..." class="form-input">
          <span v-if="formErrors.password" class="text-aquamarine">{{ formErrors.password }}</span>
        </div>
        


  
        <div class="flex justify-between">
          <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Tạo mới</button>
          <a :href="route('client.index')" class="text-blue-500 hover:underline">Quay lại</a>
        </div>
        <input type="hidden" name="_token" :value="csrf">
      </form>
    </div>
    </Sidebar>
  </template>
  