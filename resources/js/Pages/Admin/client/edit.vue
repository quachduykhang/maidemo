<script setup>
import Sidebar from '@/Layouts/Sidebar.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { defineProps } from 'vue';


const props = defineProps({
   client: Object
  
});
const form = useForm({
 
  name: props.client.name,
  date: props.client.date,
  address: props.client.address,
  ponits: props.client.ponits,
  email: props.client.email,
  password: props.client.password,
});

// Hàm gửi biểu mẫu
const submitForm = () => {
  form.post(route('client.update',props.client.id));
};
</script>
<template>
  <Sidebar>
    <div class="flex flex-col justify-center items-center h-full">
      <div class="bg-gray-200 px-6 py-8 mb-8">
        <h1 class="text-3xl font-bold">Sửa Khách hàng</h1>
      </div>

      <form @submit.prevent="submitForm" class="grid grid-cols-2 gap-x-4 px-6 py-4">
        <div class="mb-4">
          <label for="name" class="block mb-1">Họ và Tên</label>
          <input v-model="form.name" type="text" id="name" name="name" placeholder="Họ và tên" class="form-input">

        </div>

        <div class="mb-4">
          <label for="date" class="block mb-1">Ngày Sinh</label>
          <input v-model="form.date" type="text" id="date" name="date" placeholder="Ngày Sinh..." class="form-input">
        
        </div>

        <div class="mb-4">
          <label for="address" class="block mb-1">Địa chỉ</label>
          <input v-model="form.address" type="text" id="address" name="address" placeholder="Địa chỉ..." class="form-input">
        
        </div>

        <div class="mb-4">
          <label for="ponits" class="block mb-1">Điểm</label>
          <input v-model="form.ponits" type="text" id="points" name="ponits" placeholder="Điểm..." class="form-input">
        
        </div>

        <div class="mb-4">
          <label for="email" class="block mb-1">Email</label>
          <input v-model="form.email" type="text" id="email" name="email" placeholder="Email..." class="form-input">
      
        </div>

        <div class="mb-4">
          <label for="password" class="block mb-1">Mật khẩu</label>
          <input v-model="form.password" type="text" id="password" name="password" placeholder="Mật khẩu..." class="form-input">
      
        </div>

        <div class="flex justify-between col-span-2">
          <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Cập nhật</button>
          <a :href="route('client.index')" class="text-blue-500 hover:underline">Quay lại</a>
        </div>
      </form>
    </div>
  </Sidebar>
</template>
