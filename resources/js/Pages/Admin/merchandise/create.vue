<script setup>
 
import Sidebar from '@/Layouts/Sidebar.vue' 
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';



 

// Khởi tạo dữ liệu mẫu cho biểu mẫu
const formData = useForm({
  int_category: '',
  name: '',
  quality: '',
  description: '',
  material: '',
  price: '',
  discount: '',
  images: '',
}) ;

// Khởi tạo các lỗi của biểu mẫu3
let formErrors = {};

// Hàm gửi biểu mẫu
const submitForm = () => {
  formData.post(route('merchandise.store'));
};

</script>

<template>
    <Sidebar>
      <div class="flex flex-col justify-center items-center h-full">
        <div class="bg-gray-200 px-6 py-8 mb-8">
        <h1 class="text-3xl font-bold">Thêm sản phẩm mới</h1>
      </div>
  
      <form @submit.prevent="submitForm" class="grid grid-cols-2 gap-x-4 px-6 py-4" enctype="multipart/form-data">
        <div class="mb-4">
    <label for="int_category" class="block mb-1">Mã loại</label>
    <input v-model="formData.int_category" type="text" id="int_category" name="int_category" placeholder=" Mã Loại" class="form-input">
    <span v-if="formErrors.int_category" class="text-aquamarine">{{ formErrors.int_category }}</span>
  </div>

  <div class="mb-4">
    <label for="name" class="block mb-1">Tên Sản phẩm</label>
    <input v-model="formData.name" type="text" id="name" name="name" placeholder="Tên sản phẩm..." class="form-input">
    <span v-if="formErrors.name" class="text-aquamarine">{{ formErrors.name }}</span>
  </div>
  
        <div class="mb-4">
          <label for="quality" class="block mb-1">Kích Thước</label>
          <input v-model="formData.quality" type="text" id="quality" name="quality" placeholder="Kích thước..." class="form-input">
          <span v-if="formErrors.quality" class="text-aquamarine">{{ formErrors.quality }}</span>
        </div>
  
        <div class="mb-4">
          <label for="description" class="block mb-1">Mô tả Sản Phẩm</label>
          <input v-model="formData.description" type="text" id="description" name="description" placeholder=" Mô tả sản phẩm..." class="form-input">
          <span v-if="formErrors.description" class="text-aquamarine">{{ formErrors.description }}</span>
        </div>
  
        <div class="mb-4">
          <label for="material" class="block mb-1">Xuất Xứ</label>
          <input v-model="formData.material" type="text" id="material" name="material" placeholder=" Xuất xứ..." class="form-input">
          <span v-if="formErrors.materiald" class="text-aquamarine">{{ formErrors.material }}</span>
        </div>
        <div class="mb-4">
          <label for="price" class="block mb-1">Gía </label>
          <input v-model="formData.price" type="text" id="price" name="price" placeholder="Nhập Gía..." class="form-input">
          <span v-if="formErrors.price" class="text-aquamarine">{{ formErrors.price}}</span>
        </div>
        <div class="mb-4">
          <label for="discount" class="block mb-1">Gía giảm</label>
          <input v-model="formData.discount" type="text" id="discount" name="discount" placeholder="Gía giảm..." class="form-input">
          <span v-if="formErrors.discountd" class="text-aquamarine">{{ formErrors.discount }}</span>
        </div>
        <div class="mb-4">
  <label for="images" class="block mb-1">Hình ảnh</label>
  <input v-model="formData.images" type="text" id="images" name="images" placeholder="Hình ảnh..." class="form-input">
        <span v-if="formErrors.images" class="text-aquamarine">{{ formErrors.images }}</span>
  <span v-if="formErrors.images" class="text-aquamarine">{{ formErrors.images }}</span>
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
  