<template>
    <div class="w-screen h-sreen flex">
      <!-- Sidebar -->
      <div class="flex-none w-190 bg-gray-800 text-white">
        <div class="h-150 flex items-center justify-center">
  <h3 class="font-bold text-xl">Welcome</h3>
</div>

<!-- Khoảng trống lớn -->
<div class="my-80"></div>

<!-- Hình ảnh -->
<div class="flex items-center justify-center">
  <img src="./image/NT.png" alt="Your Image" class="w-20 h-23 object-cover rounded-full">
</div>






<!-- Khoảng cách lớn -->
<div class="mt-8"></div>

<div class="overflow-y-auto">
  <!-- Sidebar Links -->
  <div class="h-[calc(100vh-50px)] bg-gray-800 py-6 px-6">
    <router-link to="/" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white rounded">
        Trang chủ
    </router-link>
    <!-- Thêm các liên kết khác ở đây -->
  </div>
</div>
<div class="overflow-y-auto">
    
          <!-- Sidebar Links -->
          <div class="h-[calc(100vh-50px)] bg-gray-800 py-6 px-6">
            <router-link to="/" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white rounded">
                Khách hàng
                </router-link>
            <!-- Thêm các liên kết khác ở đây -->
          </div>
        </div>
        <div class="overflow-y-auto">
          <!-- Sidebar Links -->
          <div class="h-[calc(100vh-50px)] bg-gray-800 py-4 px-6">
          <a href="./users">
                Nhân viên
              </a>  
            <!-- Thêm các liên kết khác ở đây -->
          </div>
        </div>
        <div class="overflow-y-auto">
          <!-- Sidebar Links -->
          <div class="h-[calc(100vh-50px)] bg-gray-800 py-4 px-6">
            <router-link to="/" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white rounded">
                Sản phẩm
                </router-link>
            <!-- Thêm các liên kết khác ở đây -->
          </div>
        </div>
        <div class="overflow-y-auto">
          <!-- Sidebar Links -->
          <div class="h-[calc(100vh-50px)] bg-gray-800py-4 px-6">
            <router-link to="/" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white rounded">
                Danh mục sản phẩm
                </router-link>
            <!-- Thêm các liên kết khác ở đây -->
          </div>
        </div>
        <div class="overflow-y-auto">
          <!-- Sidebar Links -->
          <div class="h-[calc(100vh-50px)] bg-gray-800 py-4 px-6">
            <router-link to="/" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white rounded">
                Đơn hàng
                </router-link>
            <!-- Thêm các liên kết khác ở đây -->
          </div>
        </div>
        <div class="overflow-y-auto">
          <!-- Sidebar Links -->
          <div class="h-[calc(100vh-50px)] bg-gray-800 py-4 px-6">
            <router-link to="/" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white rounded">
                Phản hồi khách hàng
                </router-link>
            <!-- Thêm các liên kết khác ở đây -->
          </div>
        </div>
        <div class="overflow-y-auto">
          <!-- Sidebar Links -->
          <div class="h-[calc(100vh-50px)] bg-gray-800 py-5 px-6">
            <router-link to="/" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white rounded">
                Khuyến mãi
                </router-link>
            <!-- Thêm các liên kết khác ở đây -->
          </div>
        </div>
        <div class="overflow-y-auto">
          <!-- Sidebar Links -->
          <div class="h-[calc(100vh-50px)] bg-gray-800 py-4 px-6">
            <router-link to="/" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white rounded">
                Thống kê
                </router-link>
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
          <table class="w-full bg-white shadow-md rounded-md overflow-hidden">
            <thead class="bg-gray-200">
              <tr>
                <th class="py-2 px-4 text-left text-xs font-semibold text-gray-600 uppercase">ID</th>
                <th class="py-2 px-4 text-left text-xs font-semibold text-gray-600 uppercase">Tên</th>
                <th class="py-2 px-4 text-left text-xs font-semibold text-gray-600 uppercase">Email</th>
                <th class="py-2 px-4 text-left text-xs font-semibold text-gray-600 uppercase">Số điện thoại</th>
                <th class="py-2 px-4 text-left text-xs font-semibold text-gray-600 uppercase">Địa chỉ</th>
              </tr>
            </thead>
            <tbody>
              <!-- Example data rows -->
              <tr v-for="(user, index) in users" :key="index">
                <td class="py-2 px-4">{{ user.id }}</td>
                <td class="py-2 px-4">{{ user.name }}</td>
                <td class="py-2 px-4">{{ user.email }}</td>
                <td class="py-2 px-4">{{ user.numberphone }}</td>
                <td class="py-2 px-4">{{ user.adrress }}</td>
              </tr>
            </tbody>
          </table>
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
  
  