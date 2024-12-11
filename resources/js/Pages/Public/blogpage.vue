<script setup>
import { ref, computed } from 'vue';
import Sidebar from '@/Layouts/Menu.vue';
import Footer from '@/Layouts/Footer.vue';
import Pagination from '@/Layouts/Pagination.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

// Access props correctly
const props = defineProps({
  blogs: {
    type: Array,
    required: true
  }
});

const currentPage = ref(1);
const itemsPerPage = 2;  // Change the number of items per page to 2

// Calculate paginated blogs
const paginatedBlogs = computed(() => {
  const start = (currentPage.value - 1) * itemsPerPage;
  const end = currentPage.value * itemsPerPage;
  return props.blogs.slice(start, end);
});

// Create pagination links
const paginationLinks = computed(() => {
  const totalPages = Math.ceil(props.blogs.length / itemsPerPage);
  const links = [];
  for (let i = 1; i <= totalPages; i++) {
    links.push({
      label: i,
      active: i === currentPage.value,
      page: i
    });
  }
  return links;
});

// Handle page change
const changePage = (page) => {
  if (page > 0 && page <= paginationLinks.value.length) {
    currentPage.value = page;
  }
};
</script>




<template>
    <Sidebar/>
    <body class="bg-gray-100 min-h-screen">
      <h1 class="text-3xl font-bold p-4 text-center mb-6">Tin tức mới nhất</h1>
      <section class="parent-section">
        <div v-for="(item, index) in paginatedBlogs" :key="index" class="card flex flex-col lg:flex-row mx-4 md:mx-10 lg:mx-52 mb-8 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 ease-in-out">
          <img :src="'/images/' + item.images" alt="thumbnail" class="thumbnail mx-auto lg:mx-0 lg:mr-4 rounded-t-lg lg:rounded-l-lg lg:rounded-t-none object-cover h-60 lg:h-64 w-full lg:w-1/2">
          <div class="card-details flex flex-col p-6">
            <div class="top flex flex-row justify-between mb-4 text-gray-500">
              <div class="tag bg-blue-200 px-2 py-1 rounded-md">{{ item.tag }}</div>
              <div class="date">{{ item.date }}</div>
            </div>
            <div class="middle mb-4">
              <h2 class="title text-2xl font-bold mb-2 text-gray-800">{{ item.name }}</h2>
              <p class="excerpt text-gray-700">{{ item.description }}</p>
            </div>
            <div class="bottom flex justify-between items-center mt-auto">
              <div class="author flex items-center">
                <img :src="'/images/users.png'" alt="profile pic" class="w-10 h-10 rounded-full">
                <p class="name mx-2 font-bold text-gray-800">Khang</p>
              </div>
              <div class="readmore text-sky-600 cursor-pointer hover:underline">
                <a :href="route('blog.blogdetail', { id: item.id })">Xem thêm...</a> 
              </div>
            </div>
          </div>
          
        </div>
        <Pagination :links="paginationLinks" @page-changed="changePage" />
      </section>
    </body>
   
    <Footer/>
  </template>
  
  