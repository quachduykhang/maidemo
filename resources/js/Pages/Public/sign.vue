<script setup>
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const formData = useForm({
    name: '',
    email: '',
    address: '',
    password: '',

});
let formErrors = {};
const submitForm = () => {
  formData.post(route('register'));
};
</script>

<template>
    <div class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('/images/register.png');">
        <div class="bg-white bg-opacity-90 p-12 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-4xl font-bold mb-6 text-center text-brown-800">Đăng Ký</h2>
            <form  @submit.prevent="submitForm"  class="space-y-4">
                <div class="mb-4">
                    <label for="name" class="block text-brown-800">Họ và Tên</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-gray-700">Địa chỉ</label>
                    <input type="text" id="address" name="address" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Mật khẩu</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <div class="flex items-center justify-between mt-6">
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800">Đã có tài khoản? Đăng nhập</a>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600">Đăng ký</button>
              
                    <a :href="route('home.index')"  class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600"> Quay lại</a> 
                 </div>
            </form>
        </div>
    </div>
</template>


