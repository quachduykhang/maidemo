<template>
    <div class="w-screen h-sreen flex">
      <!-- Sidebar -->
      <div class="flex-none w-190 bg-blue-400 text-white">
        <div class="h-150 flex items-center justify-center">
  <h3 class="font-bold text-xl">Welcome</h3>
</div>

<!-- Khoảng trống lớn -->
<div class="my-50"></div>

<!-- Hình ảnh -->

<!-- Khoảng cách lớn -->
<div class="mt-8"></div>

<div class="overflow-y-auto">
  <!-- Sidebar Links -->
  <div class="bg-blue-400 py-6 px-6 flex items-center justify-between">
    <a href="" class="flex items-center text-white">
      
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
            <path d="M19.006 3.705a.75.75 0 1 0-.512-1.41L6 6.838V3a.75.75 0 0 0-.75-.75h-1.5A.75.75 0 0 0 3 3v4.93l-1.006.365a.75.75 0 0 0 .512 1.41l16.5-6Z" />
            <path fill-rule="evenodd" d="M3.019 11.114 18 5.667v3.421l4.006 1.457a.75.75 0 1 1-.512 1.41l-.494-.18v8.475h.75a.75.75 0 0 1 0 1.5H2.25a.75.75 0 0 1 0-1.5H3v-9.129l.019-.007ZM18 20.25v-9.566l1.5.546v9.02H18Zm-9-6a.75.75 0 0 0-.75.75v4.5c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75H9Z" clip-rule="evenodd" />
        </svg>
        <span class="mr-2">Trang chủ</span>
    </a>
    
    <!-- Thêm các liên kết khác ở đây -->
</div>

</div>
<div class="overflow-y-auto">
    
          <!-- Sidebar Links -->
          <div class="bg-blue-400 py-6 px-6 flex items-center justify-between">
              <a :href="route('client.index')" class="flex items-center text-white">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
               <path d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
               </svg>
              <span class="ml-2">Khách hàng</span>
             </a>  
    <!-- Thêm các liên kết khác ở đây -->
</div>

        </div>
        <div class="overflow-y-auto">
          <!-- Sidebar Links -->
          <div class="bg-blue-400 py-4 px-6 flex items-center justify-between">
    <a :href="route('admin.index')" class="flex items-center text-white">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
            <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
           </svg>
            <span class="ml-2">Nhân viên</span>
    </a>  
    <!-- Thêm các liên kết khác ở đây -->
</div>

        </div>
        <div class="overflow-y-auto">
          <!-- Sidebar Links -->
          <div class="bg-blue-400 py-4 px-6 flex items-center justify-between">
    <a :href="route('merchandise.index')" class="flex items-center text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z" clip-rule="evenodd" />
        </svg>
        <span class="ml-2">Sản phẩm</span>
    </a>  
    <!-- Thêm các liên kết khác ở đây -->
</div>

        </div>
        <div class="overflow-y-auto">
          <!-- Sidebar Links -->
          <div class="h-[calc(20vh-50px)] bg-blue-400 py-4 px-6 flex items-center">
    <a :href="route('category.index')" class="flex items-center space-x-2 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0 1 20.25 6v12A2.25 2.25 0 0 1 18 20.25H6A2.25 2.25 0 0 1 3.75 18V6A2.25 2.25 0 0 1 6 3.75h1.5m9 0h-9" />
        </svg>
        <span>Danh mục sản phẩm</span>
    </a>
    <!-- Thêm các liên kết khác ở đây -->
</div>

        </div>
        <div class="overflow-y-auto">
          <!-- Sidebar Links -->
          <div class="h-[calc(20vh-50px)] bg-gray-́800 py-4 px-6 flex items-center space-x-4">
    <a :href="route('blog.index')" class="flex items-center space-x-2 text-white">
        <svg class="h-8 w-8 text-slate-400" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z"/>  
            <circle cx="9" cy="19" r="2" /> 
            <circle cx="17" cy="19" r="2" />  
            <path d="M3 3h2l2 12a3 3 0 0 0 3 2h7a3 3 0 0 0 3 -2l1 -7h-15.2" />
        </svg>
        <span>Tin tức</span>
    </a>
    <!-- Thêm các liên kết khác ở đây -->
</div>
</div>
        <div class="overflow-y-auto">
          <!-- Sidebar Links -->
          <div class="h-[calc(20vh-50px)] bg-gray-́800 py-4 px-6 flex items-center space-x-4">
    <a :href="route('order.admin')"  class="flex items-center space-x-2 text-white">
        <svg class="h-8 w-8 text-slate-400" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z"/>  
            <circle cx="9" cy="19" r="2" /> 
            <circle cx="17" cy="19" r="2" />  
            <path d="M3 3h2l2 12a3 3 0 0 0 3 2h7a3 3 0 0 0 3 -2l1 -7h-15.2" />
        </svg>
        <span>Đơn hàng</span>
    </a>
    <!-- Thêm các liên kết khác ở đây -->
</div>
</div>
<div class="overflow-y-auto">
          <!-- Sidebar Links -->
          <div class="h-[calc(20vh-50px)] bg-gray-́800 py-4 px-6 flex items-center space-x-4">
    <a :href="route('feedback.admin')"  class="flex items-center space-x-2 text-white">
        <svg class="h-8 w-8 text-slate-400" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z"/>  
            <circle cx="9" cy="19" r="2" /> 
            <circle cx="17" cy="19" r="2" />  
            <path d="M3 3h2l2 12a3 3 0 0 0 3 2h7a3 3 0 0 0 3 -2l1 -7h-15.2" />
        </svg>
        <span>Phản hồi khách hàng</span>
    </a>
    <!-- Thêm các liên kết khác ở đây -->
</div>
</div>
        
      
      </div>
      <!-- Main Content -->
      <div class="flex-1 bg-gray-100 overflow-y-auto">
        <!-- Header -->
        <div class="bg-white border-b-2 border-gray-200">
          <div class="container mx-auto px-4 py-2">
            <h3 class="font-bold text-lg">Trang Admin</h3>
          </div>
        </div>
        <!-- Search Bar -->
        <div class="container mx-auto px-4 py-4">
          <input type="text" placeholder="Tìm kiếm..." class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Data Table -->
        <div class="container mx-auto px-4 py-4">
          <slot/>
        </div>
      </div>
    </div>
    <footer class="w-full bg-gray-500 py-8">
  <div class="container mx-auto flex flex-wrap justify-center">
    <!-- Thông tin cửa hàng -->
    <div class="px-4 mb-8 md:mb-0">
      <h2 class="text-white text-lg font-semibold mb-4">SHOP KHANG VÂN</h2>
      <p class="text-gray-300">Thông tin cửa hàng của bạn ở đây...</p>
    </div>

    <!-- Menu -->
    <div class="px-4 mb-8 md:mb-0">
      <h2 class="text-white text-lg font-semibold mb-4">Menu</h2>
      <ul>
        <li><a href="#" class="text-gray-300 hover:text-white">Home</a></li>
        <li><a href="#" class="text-gray-300 hover:text-white">About</a></li>
        <li><a href="#" class="text-gray-300 hover:text-white">Services</a></li>
        <li><a href="#" class="text-gray-300 hover:text-white">Contact</a></li>
      </ul>
    </div>

    <!-- Theo dõi -->
    <div class="px-4 mb-8 md:mb-0">
      <h2 class="text-white text-lg font-semibold mb-4">Theo dõi</h2>
      <ul>
        <li><a href="#" class="text-gray-300 hover:text-white">Facebook</a></li>
        <li><a href="#" class="text-gray-300 hover:text-white">Instagram</a></li>
        <li><a href="#" class="text-gray-300 hover:text-white">Twitter</a></li>
        <li><a href="#" class="text-gray-300 hover:text-white">Pinterest</a></li>
      </ul>
    </div>

    <!-- Liên hệ -->
    <div class="px-4 mb-8 md:mb-0">
      <h2 class="text-white text-lg font-semibold mb-4">Liên hệ</h2>
      <ul>
        <li><a href="#" class="text-gray-300 hover:text-white">Email</a></li>
        <li><a href="#" class="text-gray-300 hover:text-white">Phone</a></li>
        <li><a href="#" class="text-gray-300 hover:text-white">Address</a></li>
      </ul>
    </div>
  </div>
</footer>



  </template>
  
  <script>
  
  </script>
  