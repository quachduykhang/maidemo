<template>
     <div class="sticky top-0 bg-brown-500 p-4 shadow-md z-50">
  <div class="container mx-auto flex justify-between items-center text-xl px-5">
    <a href="#" class="text-white font-bold text-2xl">KV NỘI THẤT</a>
    
    <div class="lg:hidden">
      <button id="nav-toggle" class="text-white focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-8 h-8">
          <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 0 1 0 3.75H5.625a1.875 1.875 0 0 1 0-3.75Z" />
        </svg>
      </button>
    </div>

    <nav id="nav-menu" class="hidden lg:flex lg:items-center lg:space-x-6 ml-4">
      <a :href="route('home.index')" class="text-white hover:text-gray-300 transition-colors duration-300">Trang chủ</a>
      <a :href="route('new')"      class="text-white hover:text-gray-300 transition-colors duration-300">Giới thiệu</a>
      <a :href="route('productpage')" class="text-white hover:text-gray-300 transition-colors duration-300">Sản phẩm</a>
      <a :href="route('feedback')"  class="text-white hover:text-gray-300 transition-colors duration-300">Liên hệ</a>
      <a :href="route('blog')" class="text-white hover:text-gray-300 transition-colors duration-300">Tin tức</a>
      <a :href="route('cart.index')" class="text-white hover:text-gray-300 transition-colors duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
</svg></a>
      <a :href="route('login_public')" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
  <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
</svg>
</a>
    </nav>
  </div>

  <nav id="mobile-menu" class=":hidden lg:hidden flex flex-col items-center mt-4 bg-brown-600 p-4 rounded-lg space-y-2">
    <a href="#" class="block text-white hover:text-gray-300 py-2 transition-colors duration-300">Trang chủ</a>
    <a href="#" class="block text-white hover:text-gray-300 py-2 transition-colors duration-300">Giới thiệu</a>
    <a href="#" class="block text-white hover:text-gray-300 py-2 transition-colors duration-300">Sản phẩm</a>
    <a href="#" class="block text-white hover:text-gray-300 py-2 transition-colors duration-300">Liên hệ</a>
    <a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
</svg>
</a>
  </nav>


</div>
<main>
  <slot/>
</main>
</template>