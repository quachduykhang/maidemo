<script setup>
 import Sidebar from '@/Layouts/Sidebar.vue' 
import {  useForm } from '@inertiajs/vue3';
defineProps({
  vouchers: Object
});
const form = useForm({
  
});

function create(){
        form.get(route('voucher.create'));
      
    }

</script>


<template>
  <Sidebar>
    <table>
    
      <button @click="create()" class="inline-block" type="button">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-10 h-10 inline">
        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14Zm.75-10.25v2.5h2.5a.75.75 0 0 1 0 1.5h-2.5v2.5a.75.75 0 0 1-1.5 0v-2.5h-2.5a.75.75 0 0 1 0-1.5h2.5v-2.5a.75.75 0 0 1 1.5 0Z" clip-rule="evenodd" />
    </svg>
</button>
    </table>
    


    

<div class="overflow-x-auto">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">STT</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mã voucher</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tên vocher</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kích thước</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mô tả</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Chất liệu</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gía</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gía giảm</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hình ảnh</th>
        <th width="15%" scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" >Thời gian</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sửa</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Xóa</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="(item, index) in vouchers" :key="index">
        <td class="px-6 py-4 whitespace-nowrap">{{ index + 1 }}</td>
        <td class="px-6 py-4 whitespace-nowrap">{{ item.int_category }}</td>
        <td class="px-6 py-4 whitespace-nowrap">{{ item.name }}</td>
        <td class="px-6 py-4 whitespace-nowrap">{{ item.quality }}</td>
        <td class="px-6 py-4 whitespace-nowrap">{{ item.description }}</td>
        <td class="px-6 py-4 whitespace-nowrap">{{ item.material }}</td>
        <td class="px-6 py-4 whitespace-nowrap">{{ item.price }}</td>
        <td class="px-6 py-4 whitespace-nowrap">{{ item.discount }}</td>
        <td class="px-6 py-4 whitespace-nowrap">{{ item.images }}</td>
        <td class="px-6 py-4 whitespace-nowrap">{{ item.created_at }}</td>
        <td class="px-6 py-4 whitespace-nowrap" ><a :href="route('merchandise.edit')">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" className="w-4 h-4">
  <path fillRule="evenodd" d="M11.013 2.513a1.75 1.75 0 0 1 2.475 2.474L6.226 12.25a2.751 2.751 0 0 1-.892.596l-2.047.848a.75.75 0 0 1-.98-.98l.848-2.047a2.75 2.75 0 0 1 .596-.892l7.262-7.261Z" clipRule="evenodd" />
</svg>
</a></td> <!-- Sửa cú pháp link -->
        <td  class="px-6 py-4 whitespace-nowrap">
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" className="w-4 h-4">
  <path d="M2 3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3Z" />
  <path fillRule="evenodd" d="M13 6H3v6a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V6ZM5.72 7.47a.75.75 0 0 1 1.06 0L8 8.69l1.22-1.22a.75.75 0 1 1 1.06 1.06L9.06 9.75l1.22 1.22a.75.75 0 1 1-1.06 1.06L8 10.81l-1.22 1.22a.75.75 0 0 1-1.06-1.06l1.22-1.22-1.22-1.22a.75.75 0 0 1 0-1.06Z" clipRule="evenodd" />
</svg>

          </a>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</Sidebar> 


</template>
