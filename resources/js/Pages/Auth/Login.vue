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
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
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
    background: url('/images/login.png') no-repeat center center fixed;
    background-size: cover;
}

.form-container {
    position: relative;
    background: rgba(255, 255, 255, 0.8); /* Nền trắng với độ trong suốt */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    max-width: 400px;
    margin: 10% auto; /* Đặt ở giữa màn hình */
}
</style>

<template>
    <GuestLayout>
        <Head title="Log in" />

        <div class="full-screen-bg">
            <div class="form-container">
                <h2 class="text-2xl font-semibold text-center mb-4">Chào mừng đến với admin</h2>

                <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                    {{ status }}
                </div>

                <form @submit.prevent="submit">
                    <div class="mb-4">
                        <InputLabel for="email" value="Email" class="text-gray-600" />

                        <TextInput
                            id="email"
                            type="email"
                            class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-indigo-500"
                            v-model="form.email"
                            required
                            autofocus
                            autocomplete="username"
                        />

                        <InputError class="mt-2 text-red-600" :message="form.errors.email" />
                    </div>

                    <div class="mb-4">
                        <InputLabel for="password" value="Password" class="text-gray-600" />

                        <TextInput
                            id="password"
                            type="password"
                            class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-indigo-500"
                            v-model="form.password"
                            required
                            autocomplete="current-password"
                        />

                        <InputError class="mt-2 text-red-600" :message="form.errors.password" />
                    </div>

                    <div class="mb-4">
                        <label class="flex items-center">
                            <Checkbox name="remember" v-model:checked="form.remember" />
                            <span class="ml-2 text-sm text-gray-600">Remember me</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-between">
                        <Link
                            v-if="canResetPassword"
                            :href="route('password.request')"
                            class="text-sm text-indigo-600 hover:text-indigo-800 underline"
                        >
                            Forgot your password?
                        </Link>
                        <a :href="route('register')" class="text-sm text-indigo-600 hover:text-indigo-800 underline">
                            Đăng ký ngay
                        </a>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <PrimaryButton
                            class="bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                        >
                            Log in
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </GuestLayout>
</template>

