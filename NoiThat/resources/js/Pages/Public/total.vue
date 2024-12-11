<script setup>

</script>


<template>
    <div class="checkout">
      <h2 class="text-2xl font-semibold mb-4">Thanh toán</h2>
      <form @submit.prevent="submitOrder">
        <div class="mb-4">
          <label for="name" class="block text-gray-700">Họ và Tên</label>
          <input
            type="text"
            v-model="order.name"
            id="name"
            class="w-full p-2 border border-gray-300 rounded"
            required
          />
        </div>
        <div class="mb-4">
          <label for="address" class="block text-gray-700">Địa chỉ</label>
          <input
            type="text"
            v-model="order.address"
            id="address"
            class="w-full p-2 border border-gray-300 rounded"
            required
          />
        </div>
        <div class="mb-4">
          <label for="email" class="block text-gray-700">Email</label>
          <input
            type="email"
            v-model="order.email"
            id="email"
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
  </template>
  

  
  <style scoped>
  .checkout {
    background-color: white;
    padding: 2rem;
    border-radius: 0.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }
  </style>
  