<script setup>
 
import Sidebar from '@/Layouts/Sidebar.vue' 
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head ,useForm} from '@inertiajs/vue3';
import { defineProps } from 'vue';
const props = defineProps({
   blog: Object
  
});
const form = useForm({
 
 
 name: props.blog.name,
 description: props.blog.description,
 
});


// Hàm gửi biểu mẫu
const submitForm = () => {
  form.post(route('blog.update',props.blog.id));
};

</script>

<template>
    <Sidebar>
      <div class="flex flex-col justify-center items-center h-full">
        <div class="bg-gray-200 px-6 py-8 mb-8">
        <h1 class="text-3xl font-bold">Sửa Tin tức</h1>
      </div>
  
      <form @submit.prevent="submitForm" class="grid grid-cols-2 gap-x-4 px-6 py-4">
      

  <div class="mb-4">
    <label for="name" class="block mb-1">Tên tin tức</label>
    <input v-model="form.name" type="text" id="name" name="name" placeholder="Tên sản phẩm" class="form-input">
   
  </div>
  
      
  
        <div class="mb-4">
          <label for="description" class="block mb-1">Mô tả ti tức</label>
          <input v-model="form.description" type="text" id="description" name="description" placeholder="Email..." class="form-input">
        
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
  