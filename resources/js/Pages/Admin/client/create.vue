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
<style>
 .container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
        }
        .image-container {
  max-width: 100%; /* Điều chỉnh kích thước hình ảnh tối đa */
}

.image-container img {
  width: 100%; /* Hình ảnh chiếm toàn bộ chiều rộng */
  border-radius: 8px; /* Bo tròn các góc hình ảnh */
}
.btn {
    background-color: #4299e1; /* Màu xanh */
    color: white; /* Màu chữ trắng */
    font-weight: bold; /* Chữ in đậm */
    padding: 8px 16px; /* Khoảng cách nội dung */
    border-radius: 5px; /* Bo tròn góc */
    border: none; /* Bỏ viền */
    cursor: pointer; /* Con trỏ chuột khi hover */
    transition: background-color 0.3s; /* Thời gian chuyển đổi hiệu ứng */
}

.btn:hover {
    background-color: #2b6cb0; /* Màu xanh đậm khi hover */
}
</style>
<template>
  <Sidebar>
    <div class="grid grid-cols-2 gap-6">
      <!-- Hình ảnh -->
      <div class="col-span-1">
        <div class="image-container flex justify-center items-center h-full">
          <img :src="'/images/created.jpg'" alt="Hình ảnh minh họa">
        </div>
      </div>

      <!-- Form -->
      <div class="col-span-1">
        <div class="flex flex-col justify-center items-center h-full">
          <div class="bg-gray-200 px-6 py-8 mb-10 float-left">
  <h1 class="text-3xl font-bold text-red-500 font-poppins">Thêm khách hàng mới</h1>
</div>


          <form @submit.prevent="submitForm" class="grid grid-cols-2 gap-4 px-4 py-6">
            <!-- Họ và Tên -->
            <div class="mb-4 col-span-2">
              <label for="name" class="block mb-2 font-semibold text-gray-700">Họ và Tên</label>
              <input v-model="formData.name" type="text" id="name" name="name" placeholder="Họ và tên" class="form-input w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
              <span v-if="formErrors.name" class="text-red-500 text-sm">{{ formErrors.name }}</span>
            </div>

            <!-- Ngày sinh -->
            <div class="mb-4">
              <label for="date" class="block mb-2 font-semibold text-gray-700">Ngày sinh</label>
              <input v-model="formData.date" type="date" id="date" name="date" placeholder="Ngày Sinh" class="form-input w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
              <span v-if="formErrors.date" class="text-red-500 text-sm">{{ formErrors.date }}</span>
            </div>

            <!-- Địa Chỉ -->
            <div class="mb-4">
              <label for="address" class="block mb-2 font-semibold text-gray-700">Địa Chỉ</label>
              <input v-model="formData.address" type="text" id="address" name="address" placeholder="Địa chỉ" class="form-input w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
              <span v-if="formErrors.address" class="text-red-500 text-sm">{{ formErrors.address }}</span>
            </div>

            <!-- Điểm -->
            <div class="mb-4">
              <label for="ponits" class="block mb-2 font-semibold text-gray-700">Điểm</label>
              <input v-model="formData.ponits" type="number" id="ponits" name="ponits" placeholder="Điểm" class="form-input w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
              <span v-if="formErrors.ponits" class="text-red-500 text-sm">{{ formErrors.ponits }}</span>
            </div>

            <!-- Email -->
            <div class="mb-4 col-span-2">
              <label for="email" class="block mb-2 font-semibold text-gray-700">Email</label>
              <input v-model="formData.email" type="email" id="email" name="email" placeholder="Email" class="form-input w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
              <span v-if="formErrors.email" class="text-red-500 text-sm">{{ formErrors.email }}</span>
            </div>

            <!-- Mật khẩu -->
            <div class="mb-4 col-span-2">
              <label for="password" class="block mb-2 font-semibold text-gray-700">Mật khẩu</label>
              <input v-model="formData.password" type="password" id="password" name="password" placeholder="Mật khẩu" class="form-input w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
              <span v-if="formErrors.password" class="text-red-500 text-sm">{{ formErrors.password }}</span>
            </div>

            <!-- Nút và Link -->
            <div class="col-span-2 flex justify-between items-center mt-6">
              <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-md transition duration-300">Tạo mới</button>
              <a :href="route('client.index')" class="text-blue-500 hover:underline text-sm">Quay lại</a>
            </div>

            <!-- CSRF Token -->
            <input type="hidden" name="_token" :value="csrf">
          </form>
        </div>
      </div>
    </div>
  </Sidebar>
</template>



<style scoped>
/* Styles specific to this component */
.image-container {
  max-width: 100%; /* Điều chỉnh kích thước hình ảnh tối đa */
}

.image-container img {
  width: 100%; /* Hình ảnh chiếm toàn bộ chiều rộng */
  border-radius: 8px; /* Bo tròn các góc hình ảnh */
}
</style>

  