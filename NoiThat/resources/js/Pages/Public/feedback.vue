<script setup>
import Sidebar from '@/Layouts/Menu.vue';
import Footer from '@/Layouts/Footer.vue';

</script>


<template>
     <Sidebar />
    <div class="bg-gray-100 p-8 rounded-lg shadow-md max-w-lg mx-auto my-10">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Liên hệ với chúng tôi</h2>
        <p class="text-center text-gray-600 mb-8">
            Chúng tôi rất mong được nghe từ bạn! Vui lòng điền vào biểu mẫu dưới đây và chúng tôi sẽ liên hệ lại với bạn sớm nhất có thể.
        </p>
        <form action="/submit_contact_form" method="POST" class="space-y-6">
            <div>
                <label for="fullname" class="block text-lg font-medium text-gray-700">Họ và tên:</label>
                <input type="text" id="fullname" name="fullname" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="email" class="block text-lg font-medium text-gray-700">Email:</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="phone" class="block text-lg font-medium text-gray-700">Số điện thoại:</label>
                <input type="tel" id="phone" name="phone" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="product-interest" class="block text-lg font-medium text-gray-700">Sản phẩm quan tâm:</label>
                <select id="product-interest" name="product-interest" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="sofa">Sofa</option>
                    <option value="bed">Giường</option>
                    <option value="table">Bàn</option>
                    <option value="chair">Ghế</option>
                    <option value="other">Khác</option>
                </select>
            </div>
            <div>
                <label for="message" class="block text-lg font-medium text-gray-700">Tin nhắn:</label>
                <textarea id="message" name="message" rows="4" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>
            <div>
                <button type="submit" class="w-full py-3 px-6 bg-blue-500 text-white font-bold rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Gửi liên hệ</button>
            </div>
        </form>
    </div>
    <Footer/>
</template>
