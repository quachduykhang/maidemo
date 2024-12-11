<script setup>
import { ref, computed } from 'vue';
import Sidebar from '@/Layouts/Menu.vue';
import Pagination from './Pagination.vue';
import Footer from '@/Layouts/Footer.vue';
import { route } from 'ziggy-js';
import { Head, Link, useForm } from '@inertiajs/vue3';

// Define props to receive data from the backend
const props = defineProps({
  merchandises: {
    type: Array,
    required: true
  }
});

// Initialize the form using useForm from Inertia.js
const form = useForm({
  keyword_submit: ''
});

// Handle the form submission
const submitForm = () => {
  form.post(route('searchProduct'), {
    onSuccess: (page) => {
      // Optionally handle success
    },
    onError: (errors) => {
      // Handle errors
      console.error('Search failed', errors);
    }
  });
};

// Pagination state
const currentPage = ref(1);
const itemsPerPage = 6;

// Calculate paginated products
const paginatedProducts = computed(() => {
  const start = (currentPage.value - 1) * itemsPerPage;
  const end = currentPage.value * itemsPerPage;
  return props.merchandises.slice(start, end);
});

// Create pagination links
const paginationLinks = computed(() => {
  const totalPages = Math.ceil(props.merchandises.length / itemsPerPage);
  const links = [];

  for (let i = 1; i <= totalPages; i++) {
    links.push({
      label: i,
      active: i === currentPage.value
    });
  }

  return links;
});

// Handle page change
const changePage = (page) => {
  currentPage.value = page;
};
</script>

<style scoped>
.search-container {
  display: flex;
  justify-content: center;
  align-items: center;
}

.search-form {
  display: flex;
  align-items: center;
  width: 100%;
  max-width: 500px;
}

.input-wrapper {
  position: relative;
  width: 100%;
  display: flex;
  align-items: center;
}

.search-input {
  width: 100%;
  padding: 10px 15px;
  border: 2px solid #ccc;
  border-radius: 25px;
  transition: all 0.3s ease;
  outline: none;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.search-input:focus {
  border-color: #007bff;
  box-shadow: 0 2px 10px rgba(0, 123, 255, 0.5);
}

.search-button {
  background: none;
  border: none;
  position: absolute;
  right: 10px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
}

.search-icon {
  height: 24px;
  width: 24px;
  color: #007bff;
  transition: color 0.3s ease;
}

.search-button:hover .search-icon {
  color: #0056b3;
}
</style>

<template>
  <div class="min-h-screen flex flex-col">
    <Sidebar />
    <div class="flex-grow container mx-auto py-8">
      <!-- Introduction section -->
      <h1 class="text-3xl font-bold mb-6 text-center">Sản Phẩm</h1>

      <!-- Search form -->
      <div class="search-container mb-6">
        <form @submit.prevent="submitForm" method="POST" class="search-form">
          <input type="hidden" name="_token" :value="csrfToken" />
          <div class="input-wrapper">
            <input
              type="text"
              v-model="form.keyword_submit"
              name="keyword_submit"
              placeholder="Search"
              required
              class="search-input"
            />
            <button type="submit" class="search-button">
              <svg
                class="search-icon"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path stroke="none" d="M0 0h24v24H0z" />
                <circle cx="10" cy="10" r="7" />
                <line x1="21" y1="21" x2="15" y2="15" />
              </svg>
            </button>
          </div>
        </form>
      </div>

      <!-- Products grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div
          v-for="(item, index) in paginatedProducts"
          :key="index"
          class="relative bg-white rounded-xl shadow-lg p-4 transition-transform transform hover:-translate-y-2"
        >
          <Link :href="route('productdetail', { id: item.id })">
            <img
              :src="`/images/${item.images}`"
              class="h-40 w-full object-cover rounded-xl mb-4"
              alt="Product Image"
            />
            <h2 class="font-bold text-lg mb-2">{{ item.name }}</h2>
            <span class="text-xl font-semibold">Giá {{ item.discount }}.000</span>
            <div class="flex items-center gap-2 my-2">
              <span class="text-sm line-through opacity-75">Giá {{ item.price }}.000</span>
              <span class="font-bold text-sm px-2 py-1 bg-yellow-300 rounded-full text-gray-600">Tiết kiệm 10%</span>
            </div>
            <div class="flex items-center gap-1 mb-4">
              <img
                v-for="i in 5"
                :key="i"
                :src="'/images/star.png'"
                alt="Star"
                class="w-5"
                :class="{ 'opacity-50': i > item.rating }"
              />
              <p class="font-bold text-xs text-gray-700">tốt nhất</p>
            </div>
          </Link>
          <div class="flex items-center justify-between gap-2 mt-4">
            <button class="flex-1 px-3 py-2 rounded-lg bg-blue-300 hover:bg-blue-500 font-semibold">Mua Ngay</button>
            <button class="px-3 py-2 rounded-lg bg-gray-300 hover:bg-gray-500">
              <img src="/images/giohang.png" alt="Add to Cart" class="w-6" />
            </button>
            <button class="px-3 py-2 rounded-lg bg-gray-300 hover:bg-gray-500">
              <img src="/images/tim.png" alt="Favorite" class="w-6" />
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Pagination component -->
    <Pagination :links="paginationLinks" @page-changed="changePage" />

    <Footer />
  </div>
</template>
