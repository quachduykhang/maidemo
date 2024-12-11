<script setup>
import { defineProps, ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import Sidebar from '@/Layouts/Menu.vue';
import Footer from '@/Layouts/Footer.vue';

defineProps({
  cart: Array,  // Đảm bảo đây là một mảng
  totalPrice: Number,
});

const formData = useForm({
  id_client: '1',
  id_employee: '1',
  name: '',
  address: '',
  email: '',
  status: '1',
 
});

const submitForm = () => {
  formData.post(route('orders.store'));
};

function xoa(id) {
  if (confirm('Bạn chắc muốn xóa?')) {
    form.delete(route('cart.delete', id));
  }
}

function updateCartItem(item, quantity) {
  console.log(`Updating item ${item.id} to quantity ${quantity}`);
}


</script>



<template>
  <Sidebar />
  <div class="flex items-center justify-center border border-gray-300 rounded-lg overflow-hidden p-4">
    <img :src="'/images/camon.png'" alt="Mô tả ảnh" class="w-95 h-60 object-cover">
  </div>
  <div class="checkout-container">
    <div class="checkout-form">
      <h2 class="text-2xl font-semibold mb-4 text-center">Thông tin thanh toán</h2>
      <form @submit.prevent="submitForm">
        <!-- Thông tin khách hàng -->
        <div class="mb-4">
          <label for="id_client" class="block text-gray-700">Mã khách hàng</label>
          <input
            v-model="formData.id_client"
            disabled
            type="text"
            id="id_client"
            class="w-full p-2 border border-gray-300 rounded"
            required
          />
        </div>
        <div class="mb-4">
          <label for="id_employee" class="block text-gray-700">Mã nhân viên</label>
          <input
            v-model="formData.id_employee"
            disabled
            type="text"
            id="id_employee"
            class="w-full p-2 border border-gray-300 rounded"
            required
          />
        </div>
        <div class="mb-4">
          <label for="email" class="block text-gray-700">Email</label>
          <input
            v-model="formData.email"
            type="email"
            id="email"
            class="w-full p-2 border border-gray-300 rounded"
            required
          />
        </div>
        <div class="mb-4">
          <label for="name" class="block text-gray-700">Họ và tên</label>
          <input
            v-model="formData.name"
            type="text"
            id="name"
            class="w-full p-2 border border-gray-300 rounded"
            required
          />
        </div>
        <div class="mb-4">
          <label for="address" class="block text-gray-700">Địa chỉ</label>
          <input
            v-model="formData.address"
            type="text"
            id="address"
            class="w-full p-2 border border-gray-300 rounded"
            required
          />
        </div>
        <button
          type="submit"
          class="w-full bg-blue-600 text-white text-lg font-semibold py-3 rounded-lg hover:bg-blue-700 transition duration-300"
        >
          Thanh toán
        </button>
      </form>
    </div>

    <!-- Chi tiết giỏ hàng -->
    <div class="checkout-cart">
      <h2 class="text-2xl font-semibold mb-4 text-center">Chi tiết giỏ hàng</h2>
      <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-lg">
        <thead>
          <tr class="bg-gray-800 text-white text-left">
            <th class="py-3 px-4 border-b">Hình ảnh</th>
            <th class="py-3 px-4 border-b">Tên Sản Phẩm</th>
            <th class="py-3 px-4 border-b">Giá</th>
            <th class="py-3 px-4 border-b">Số Lượng</th>
            <th class="py-3 px-4 border-b">Thành tiền</th>
            <th class="py-3 px-4 border-b">Hành động</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(item, index) in cart" :key="index" class="border-b hover:bg-gray-50 transition duration-300 ease-in-out">
            <td class="px-3 py-4 whitespace-nowrap text-sm text-gray-900">
              <img :src="'/images/' + item.images" alt="" class="h-12 w-13 rounded">
            </td>
            <td class="py-3 px-4">{{ item.name }}</td>
            <td class="py-3 px-4">{{ item.price }}</td>
            <td class="py-3 px-4">{{ item.quantity }}</td>
            <td class="py-3 px-4">{{ item.price * item.quantity }}</td>
            <td class="py-3 px-4">
              <button @click.prevent="xoa(item.id)" class="text-red-600">Xóa</button>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="text-right mt-4">
        <span class="text-lg font-semibold text-gray-800">Tổng cộng: {{ totalPrice }}.000</span>
      </div>
    </div>
  </div>

  <Footer />

  <div v-if="showNotification" class="notification">
    {{ notificationMessage }}
  </div>
</template>



<style scoped>
.checkout-container {
  display: flex;
  gap: 2rem;
}

.checkout-form, .checkout-cart {
  flex: 1;
  background-color: white;
  padding: 2rem;
  border-radius: 0.5rem;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.checkout-cart {
  max-width: 50%;
}

table {
  width: 100%;
}

table th, table td {
  text-align: left;
}

.notification {
  position: fixed;
  top: 20px;
  right: 20px;
  background-color: green;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  z-index: 1000;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@keyframes fadein {
  from { opacity: 0; }
  to { opacity: 1; }
}

@keyframes fadeout {
  from { opacity: 1; }
  to { opacity: 0; }
}
</style>
