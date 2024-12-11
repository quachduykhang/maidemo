<script setup>
 import Sidebar from '@/Layouts/Sidebar.vue' 
import {  useForm } from '@inertiajs/vue3';
defineProps({
  merchandises: Object
});
const form = useForm({
  
});

function create(){
        form.get(route('merchandise.create'));
       console.log('helo');
    }
    function detroy(id){
    if(confirm(' bạn có muốn xóa')){
      form.delete(route('merchandise.delete',id));
    }
  }

</script>


<template>
  <Sidebar>
    <table>
      <div class="bg-gray-100 p-4 rounded-lg shadow-md">
       <h3 class="text-lg font-semibold text-gray-700 text-center">Danh sách sản phẩm</h3>
    </div>
    <div class="mb-4 pt-5" >
      <button @click="create()" class="inline-block" type="button">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-10 h-10 inline">
        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14Zm.75-10.25v2.5h2.5a.75.75 0 0 1 0 1.5h-2.5v2.5a.75.75 0 0 1-1.5 0v-2.5h-2.5a.75.75 0 0 1 0-1.5h2.5v-2.5a.75.75 0 0 1 1.5 0Z" clip-rule="evenodd" />
    </svg>
 
</button>
</div>
    </table>
    


    

    <div class="overflow-x-auto">
  <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
      <tr>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">STT</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mã hàng</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tên sản phẩm</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gía</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gía giảm</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hình ảnh</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sửa</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Xóa</th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
      <tr v-for="(item, index) in merchandises" :key="index" class="hover:bg-gray-100">
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ index + 1 }}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ item.int_category }}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ item.name }}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ item.price }}.000</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ item.discount }}.000</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
          <img :src="'/images/' + item.images" alt="" class="h-10 w-10 rounded">
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
          <a :href="route('merchandise.edit', item.id)" class="text-indigo-600 hover:text-indigo-900">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
              <path fill-rule="evenodd" d="M11.013 2.513a1.75 1.75 0 0 1 2.475 2.474L6.226 12.25a2.751 2.751 0 0 1-.892.596l-2.047.848a.75.75 0 0 1-.98-.98l.848-2.047a2.75 2.75 0 0 1 .596-.892l7.262-7.261Z" clip-rule="evenodd" />
            </svg>
          </a>
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
          <a @click="detroy(item.id)" class="text-red-600 hover:text-red-900 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
              <path d="M2 3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3Z" />
              <path fill-rule="evenodd" d="M13 6H3v6a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V6ZM5.72 7.47a.75.75 0 0 1 1.06 0L8 8.69l1.22-1.22a.75.75 0 1 1 1.06 1.06L9.06 9.75l1.22 1.22a.75.75 0 1 1-1.06 1.06L8 10.81l-1.22 1.22a.75.75 0 0 1-1.06-1.06l1.22-1.22-1.22-1.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
          </a>
        </td>
      </tr>
    </tbody>
  </table>
</div>

</Sidebar> 


</template>
