<script setup>
import Sidebar from '@/Layouts/Sidebar.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { defineProps } from 'vue';

// Định nghĩa props
const props = defineProps({
  client: {
    type: Object,
    required: true,
  },
});

// Kiểm tra giá trị props client
console.log('Client props:', props.client);

// Khởi tạo dữ liệu mẫu cho biểu mẫu
const form = useForm({
  id: props.client.id,
  name: props.client.name,
  date: props.client.date,
  address: props.client.address,
  points: props.client.points, // Sửa lỗi đánh máy từ "ponits" thành "points"
  email: props.client.email,
  password: props.client.password,
});

// Hàm gửi biểu mẫu
const submitForm = () => {
  console.log('Submitting form with id:', props.client.id);
  form.post(route('client.update', { id: props.client.id }));
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
          <span v-if="form.errors.name" class="text-aquamarine">{{ form.errors.name }}</span>
        </div>

        <div class="mb-4">
          <label for="date" class="block mb-1">Năm Sinh</label>
          <input v-model="form.date" type="text" id="date" name="date" placeholder="Ngày Sinh..." class="form-input">
          <span v-if="form.errors.date" class="text-aquamarine">{{ form.errors.date }}</span>
        </div>

        <div class="mb-4">
          <label for="address" class="block mb-1">Địa chỉ</label>
          <input v-model="form.address" type="text" id="address" name="address" placeholder="Địa chỉ..." class="form-input">
          <span v-if="form.errors.address" class="text-aquamarine">{{ form.errors.address }}</span>
        </div>

        <div class="mb-4">
          <label for="points" class="block mb-1">Điểm</label>
          <input v-model="form.points" type="text" id="points" name="points" placeholder="Điểm..." class="form-input">
          <span v-if="form.errors.points" class="text-aquamarine">{{ form.errors.points }}</span>
        </div>

        <div class="mb-4">
          <label for="email" class="block mb-1">Email</label>
          <input v-model="form.email" type="text" id="email" name="email" placeholder="Email..." class="form-input">
          <span v-if="form.errors.email" class="text-aquamarine">{{ form.errors.email }}</span>
        </div>

        <div class="mb-4">
          <label for="password" class="block mb-1">Mật khẩu</label>
          <input v-model="form.password" type="text" id="password" name="password" placeholder="Mật khẩu..." class="form-input">
          <span v-if="form.errors.password" class="text-aquamarine">{{ form.errors.password }}</span>
        </div>

        <div class="flex justify-between col-span-2">
          <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Cập nhật</button>
          <a :href="route('admin.index')" class="text-blue-500 hover:underline">Quay lại</a>
        </div>
      </form>
    </div>
  </Sidebar>
</template>
