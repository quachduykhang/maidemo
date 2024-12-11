<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    
});
const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<!-- <template>
  <div>
      <div class="alert alert-danger" v-if="error">
          <p>There was an error, unable to sign in with those credentials.</p>
      </div>
      <form autocomplete="off" @submit.prevent="login" method="post">
          <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" id="email" class="form-control" placeholder="user@example.com" v-model="email" required>
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" class="form-control" v-model="password" required>
          </div>
          <button type="submit" class="btn btn-default">Sign in</button>
      </form>
  </div>
</template> -->


<template>
    <body class="bg-gray-100 flex justify-center items-center min-h-screen">
      <div class="bg-white shadow-lg rounded-lg p-8 md:p-12">
        <div class="flex justify-center mb-8">
          <img :src="'/images/loginuser.png'" alt="Login Image" class="w-32 h-32">
        </div>
        <form @submit.prevent="submit" action="" class="flex flex-col items-center">
          <img :src="''" alt="" class="">
          <h2 class="my-8 font-display font-bold text-3xl text-gray-700 text-center">Welcome to you</h2>
          <div class="relative w-full mb-6">
            <svg class="w-6 h-6 text-gray-800 absolute left-2 top-1/2 transform -translate-y-1/2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z" clip-rule="evenodd"/>
            </svg>
            <input type="text"  v-model="form.email" placeholder="Email" id="email" class="w-full pl-10 pr-4 py-2 border-b-2 border-gray-300 font-display capitalize text-lg focus:outline-none focus:border-primarycolor transition-all duration-100">
          </div>
          <div class="relative w-full mb-6">
            <svg class="w-6 h-6 text-gray-800 absolute left-2 top-1/2 transform -translate-y-1/2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd"/>
            </svg>
            <input type="password" v-model="form.password" id="password" placeholder="Password" class="w-full pl-10 pr-4 py-2 border-b-2 border-gray-300 font-display focus:outline-none focus:border-primarycolor transition-all duration-100 capitalize text-lg">
          </div>
          <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
          </PrimaryButton>
          
          <a href="" class="self-end mb-4 text-gray-600 font-bold">Quên mật khẩu</a>
          <a :href="route('home.index')" class="self-end mb-4 text-gray-600 font-bold">Quay lại</a>
          <button type="submit" class="py-3 px-20 bg-primarycolor rounded-full text-white uppercase text-lg transform hover:translate-y-1 transition-all duration-75">Login</button>
        </form>
        <div>
          <a :href="route('sign')" class="self-end mb-4 text-gray-600 font-bold">Đăng ký</a>
        </div>
      </div>
    </body>
  </template>
  