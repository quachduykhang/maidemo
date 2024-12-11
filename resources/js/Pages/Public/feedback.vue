<script setup>
import Sidebar from '@/Layouts/Menu.vue';
import Footer from '@/Layouts/Footer.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';
const successMessage = ref('');

const formData = useForm({
    
    name:'',
    email:'',
    number_phone:'',
    address:'',
    content:'',
    
   

});
let formErrors = {};
const submitForm = () => {
  formData.post(route('feedback.created'), {
    onSuccess: () => {
      successMessage.value = 'Gửi liên hệ thành công! Cảm ơn bạn đã phản hồi.';
      formData.reset(); // Reset lại form
    },
    onError: (errors) => {
      // Xử lý lỗi ở đây nếu cần thiết
      console.error(errors);
    }
  });
};






</script>


<template>
  <div>
    <!-- Sidebar -->
    <Sidebar />

    <!-- Main content -->
    <div class="w-full max-w-screen-xl mx-auto">
      <!-- Image -->
      <div class="mb-8">
        <img class="w-full h-auto" :src="'/images/feedback.jpg'" alt="Feedback image">
      </div>

      <!-- Information boxes -->
      <div class="flex space-x-4">
        <!-- Box 1 -->
        <div class="flex-1 rounded-lg p-4 flex items-center">
          <div class="mr-4 w-16">
            <img :src="'/images/1.png'" alt="Icon 1">
          </div>

          <div>
            <h3 class="text-lg font-semibold">Địa chỉ</h3>
            <p class="text-gray-700">18A/1 Cộng hòa, Phường 4, Quận Tân Bình, TP HCM</p>
          </div>
        </div>

        
        
        <!-- Box 3 -->
        <div class="flex-1  rounded-lg p-4 flex items-center">
          <div class="mr-4 w-16">
  <img :src="'/images/3.png'" alt="Icon 1">
</div>

          <div>
            <h3 class="text-lg font-semibold">Email</h3>
            <p class="text-gray-700">noithatk&v@gmail.com</p>
          </div>
        </div>
      </div>

      <!-- Success message -->
      <div v-if="successMessage" class="my-4 p-4 bg-green-100 text-green-800 rounded-lg">
        {{ successMessage }}
      </div>

      <!-- Contact form -->
      <div class="bg-gray-100 p-8 rounded-lg shadow-md max-w-lg mx-auto my-10">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Liên hệ với chúng tôi</h2>
        <p class="text-center text-gray-600 mb-8">
          Chúng tôi rất mong được nghe từ bạn! Vui lòng điền vào biểu mẫu dưới đây và chúng tôi sẽ liên hệ lại với bạn sớm nhất có thể.
        </p>
        <form @submit.prevent="submitForm" method="POST" class="space-y-6">
          <div>
            <label for="name" class="block text-lg font-medium text-gray-700">Họ và tên:</label>
            <input v-model="formData.name" type="text" id="name" name="name" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
          </div>
          <div>
            <label for="email" class="block text-lg font-medium text-gray-700">Email:</label>
            <input v-model="formData.email" type="email" id="email" name="email" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
          </div>
          <div>
            <label for="number_phone" class="block text-lg font-medium text-gray-700">Số điện thoại:</label>
            <input v-model="formData.number_phone" type="text" id="phone" name="phone" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
          </div>
          <div>
            <label for="address" class="block text-lg font-medium text-gray-700">Địa chỉ:</label>
            <input v-model="formData.address" type="text" id="address" name="address" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
          </div>
         
          <div>
            <label for="content" class="block text-lg font-medium text-gray-700">Tin nhắn:</label>
            <textarea v-model="formData.content" id="content" name="content" rows="4" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
          </div>
          <div>
            <button type="submit" class="w-full py-3 px-6 bg-blue-500 text-white font-bold rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Gửi liên hệ</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Footer -->
    <Footer/>
  </div>
</template>

  
