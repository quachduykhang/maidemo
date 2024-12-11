<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<style scoped>
body {
    margin: 0;
    padding: 0;
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
}

.full-screen-bg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('/images/login1.png') no-repeat center center fixed;
    background-size: cover;
}

.form-container {
    position: relative;
    background: rgba(255, 255, 255, 0.9); /* Nền trắng với độ trong suốt */
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 450px;
    margin: 10% auto; /* Đặt ở giữa màn hình */
    backdrop-filter: blur(10px); /* Làm mờ nền */
}

.form-title {
    text-align: center;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
    color: #333;
}
</style>

<template>
    <GuestLayout>
        <Head title="Register" />

        <div class="full-screen-bg">
            <div class="form-container">
                <h2 class="form-title">Đăng ký ngay</h2>

                <form @submit.prevent="submit">
                    <div class="mb-4">
                        <InputLabel for="name" value="Name" class="text-gray-700" />

                        <TextInput
                            id="name"
                            type="text"
                            class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-indigo-500"
                            v-model="form.name"
                            required
                            autofocus
                            autocomplete="name"
                        />

                        <InputError class="mt-2 text-red-600" :message="form.errors.name" />
                    </div>

                    <div class="mb-4">
                        <InputLabel for="email" value="Email" class="text-gray-700" />

                        <TextInput
                            id="email"
                            type="email"
                            class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-indigo-500"
                            v-model="form.email"
                            required
                            autocomplete="username"
                        />

                        <InputError class="mt-2 text-red-600" :message="form.errors.email" />
                    </div>

                    <div class="mb-4">
                        <InputLabel for="password" value="Password" class="text-gray-700" />

                        <TextInput
                            id="password"
                            type="password"
                            class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-indigo-500"
                            v-model="form.password"
                            required
                            autocomplete="new-password"
                        />

                        <InputError class="mt-2 text-red-600" :message="form.errors.password" />
                    </div>

                    <div class="mb-4">
                        <InputLabel for="password_confirmation" value="Confirm Password" class="text-gray-700" />

                        <TextInput
                            id="password_confirmation"
                            type="password"
                            class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-indigo-500"
                            v-model="form.password_confirmation"
                            required
                            autocomplete="new-password"
                        />

                        <InputError class="mt-2 text-red-600" :message="form.errors.password_confirmation" />
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <Link
                            :href="route('login')"
                            class="underline text-sm text-indigo-600 hover:text-indigo-800 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            Already registered?
                        </Link>

                        <PrimaryButton
                            class="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                        >
                            Đăng ký
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </GuestLayout>
</template>
