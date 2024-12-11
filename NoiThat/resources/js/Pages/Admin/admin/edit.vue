<script setup>
import Sidebar from '@/Layouts/Sidebar.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { defineProps } from 'vue';

const props = defineProps({
   admin: Object
  
});




// Khởi tạo dữ liệu mẫu cho biểu mẫu
const form = useForm({
  name: props.admin.name,
  email: props.admin.email,
  password: props.admin.password,
});

// Hàm gửi biểu mẫu
const submitForm = () => {
  form.post(route('admin.update',props.admin.id));
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
          <label for="email" class="block mb-1">Email</label>
          <input v-model="form.email" type="text" id="email" name="email" placeholder="Email..." class="form-input">
     
        </div>

  
        <div class="mb-4">
          <label for="password" class="block mb-1">Mật khẩu</label>
          <input v-model="form.password" type="text" id="password" name="password" placeholder="Mật khẩu..." class="form-input">
        
        </div>

        <div class="flex justify-between col-span-2">
          <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Cập nhật</button>
          <a :href="route('admin.index')" class="text-blue-500 hover:underline">Quay lại</a>
        </div>
      </form>
    </div>
  </Sidebar>
</template>
