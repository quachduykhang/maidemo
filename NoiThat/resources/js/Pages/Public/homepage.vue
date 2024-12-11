<script setup>
import Sidebar from '@/Layouts/Menu.vue';
import Footer from '@/Layouts/Footer.vue';
</script>
<!-- <style>
.container{
  width: 85;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,50%);
  border:10px solid #ffff;
  box-shadow: 10px 25px 28px rgba(0,0,0.3) ;
}
.img-container{
 width: 100%;
 display: flex;
 animation: slid;
}
img{
  width: 100%;

}
@keyframes slide{
  0%{
    transform: translateX(0);
  }
  25%{
    transform: translateX(0);
  }
  30%{
    transform: translateX(-100%);
  }
  50%{
    transform: translateX(-100%);
  }
  55%{
    transform: translateX(-200%);
  }
  75%{
    transform: translateX(-200%);
  }
  80%{
    transform: translateX(-300%);
  }
  100%{
    transform: translateX(-300%);
  }
}
</style> -->

<template>
  <Sidebar>
    <div>
    <div class=" border border-gray-300 rounded-lg overflow-hidden">
     <!-- <div class="container">
      <div class="img-container"> -->
        <img :src="'/images/K&V.png'"  alt="Mô tả ảnh" >
        <!-- <img :src="'/images/sofa3.png'"  alt="Mô tả ảnh">
        <img :src="'/images/sofa3.png'"  alt="Mô tả ảnh"> -->
      <!-- </div> -->

     <!-- </div> -->

</div>

<section class="step mt-20 xl:mt-52 relative z-20">
  <div class="text-center" style="font-weight: bold; font-size: 2rem; font-family: 'Times New Roman', serif;">
  <h2>Đánh giá của các khách hàng</h2>
</div>

  <div class="container mx-auto">
    <div class="grid grid-cols-1 gap-12 xl:grid-cols-3">
      
      <div class="steps__step text-center">
        <div class="mb-7">
          <img src="/images/chat.png" alt="" class="w-5 h-7 mx-auto">
        </div>
       
        <p class="mb-5 max-w-md mx-auto">Tôi thực sự hài lòng về trải nghiệm sản phẩm mà công ty mang lại. Chất lượng sản phẩm hoàn hảo. Tôi sẽ ủng hộ công ty thường xuyên hơn.</p>
        <a href="#" class="font-medium flex justify-center items-center gap-2">
          Read more
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
            <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM6.75 9.25a.75.75 0 0 0 0 1.5h4.59l-2.1 1.95a.75.75 0 0 0 1.02 1.1l3.5-3.25a.75.75 0 0 0 0-1.1l-3.5-3.25a.75.75 0 1 0-1.02 1.1l2.1 1.95H6.75Z" clip-rule="evenodd" />
          </svg>
        </a>
        <div class="mb-8">
          <img src="/images/users.png" alt="" class="w-6 h-7 mx-auto">
        </div>
        <h3 class="h3 mb-5">Khách hàng: Võ Lâm Gia Bảo</h3>
      </div>
      
      <div class="steps__step text-center">
        <div class="mb-4">
          <!-- Optional image or icon can go here -->
        </div>
        <div class="mb-4">
          <img src="/images/chat.png" alt="" class="w-5 h-7 mx-auto">
        </div>
        <p class="mb-5 max-w-md mx-auto">chất lượng sản phẩm vượt ngoài sự mong đợi của tôi</p>
        <a href="#" class="font-medium flex justify-center items-center gap-2">
          Read more
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
            <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM6.75 9.25a.75.75 0 0 0 0 1.5h4.59l-2.1 1.95a.75.75 0 0 0 1.02 1.1l3.5-3.25a.75.75 0 0 0 0-1.1l-3.5-3.25a.75.75 0 1 0-1.02 1.1l2.1 1.95H6.75Z" clip-rule="evenodd" />
          </svg>
        </a>
        <div class="mb-4">
          <img src="/images/users.png" alt="" class="w-5 h-7 mx-auto">
        </div>
        <h3 class="h3 mb-5">Khách hàng: Thanh Mai</h3>
      </div>
      
      <div class="steps__step text-center">
        <div class="mb-4">
          <img src="/images/chat.png" alt="" class="w-5 h-7 mx-auto">
        </div>

        <p class="mb-5 max-w-md mx-auto">sản phẩm tuyệt vời, đội ngũ chăm sóc , tư vấn nhiệt tình chu đáo</p>
        <a href="#" class="font-medium flex justify-center items-center gap-2">
          Read more
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
            <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM6.75 9.25a.75.75 0 0 0 0 1.5h4.59l-2.1 1.95a.75.75 0 0 0 1.02 1.1l3.5-3.25a.75.75 0 0 0 0-1.1l-3.5-3.25a.75.75 0 1 0-1.02 1.1l2.1 1.95H6.75Z" clip-rule="evenodd" />
          </svg>
        </a>
        <div class="mb-4">
          <img src="/images/users.png" alt="" class="w-5 h-7 mx-auto">
        </div>
        <h3 class="h3 mb-5">Khách hàng : Hải Vũ</h3>
      </div>
      
    </div>
  </div>
</section>



<section class="section_furniture_feature py-8">
  <div class="container mx-auto">
    <div class="row flex flex-wrap">
        <div class="col-lg-4 col-md-12 col-sm-12 col-12 lg:w-1/3 w-full">
          <div class="top-section mb-6">
            <div class="section title_module_main">
              <h2 class="text-2xl font-semibold mb-2"><a href="san-pham-noi-bat" title="Nội thất nổi bật" class="text-blue-600 hover:text-blue-800">Nội thất nổi bật</a></h2>
            </div>
            <span class="info-title block mb-4">Để có thể chọn được một bộ bàn ghế sofa đẹp hoàn hảo cho gia đình dường như không phải là một công việc dễ dàng khi phong cách</span>
            <div class="more-item">
              <a href="san-pham-noi-bat" title="Xem thêm sản phẩm" class="text-blue-600 hover:text-blue-800">Xem thêm sản phẩm</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12 col-12 lg:w-2/3 w-full">
          <div class="row flex flex-wrap">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 w-full">
              <div class="content_module">
                <div class="wrap_content">
                  <div class="swiper_furfeature swiper-container">
                    <div class="swiper-wrapper flex">
                      <div class="swiper-slide">
                        <div class="item_product_main item best_sale p-4 border rounded-lg shadow-sm">
                          <form action="" method="post" class="wishItem variants product-box product-block-item" data-cart-form data-id="product-actions-34126619" enctype="multipart/form-data">
                            <div class="product-thumbnail mb-4">
                              <div class="sapo-combo-badge" data-id="34126619"></div>
                              <a class="image_thumb scale_hover product-transition block overflow-hidden rounded-lg" href="" title="Sofa Halley">
                                <img class="w-full h-auto" :src="'/images/sofa2.png'" data-src="" alt="">
                              </a>
                            </div>
                            <div class="product-info">
                              <div class="product-content text-center">
                                <h3 class="product-name text-lg font-semibold mb-2"><a href="/sofa-halley" title="Sofa Halley" class="text-gray-800 hover:text-gray-600">Sofa Halley</a></h3>
                                <div class="blockprice">
                                  <div class="price-box text-red-500 text-xl font-bold">18.000.000₫</div>
                                </div>
                              </div>
                            </div>
                            <div class="product-action flex justify-center mt-4">
                              <input type="hidden" name="variantId" value="106815852" />
                              <button class="btn-buy firstb btn-cart button_35 left-to muangay btn-cart btn-views add_to_cart px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none" title="Mua hàng">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-basket" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5 inline-block">
                                  <path fill="currentColor" d="M576 216v16c0 13.255-10.745 24-24 24h-8l-26.113 182.788C514.509 462.435 494.257 480 470.37 480H105.63c-23.887 0-44.139-17.565-47.518-41.212L32 256h-8c-13.255 0-24-10.745-24-24v-16c0-13.255 10.745-24 24-24h67.341l106.78-146.821c10.395-14.292 30.407-17.453 44.701-7.058 14.293 10.395 17.453 30.408 7.058 44.701L170.477 192h235.046L326.12 82.821c-10.395-14.292-7.234-34.306 7.059-44.701 14.291-10.395 34.306-7.235 44.701 7.058L484.659 192H552c13.255 0 24 10.745 24 24zM312 392V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm112 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm-224 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24z"></path>
                                </svg>
                              </button>
                              <a href="javascript:void(0)" class="btn btn_view action btn-compare js-btn-wishlist setWishlist btn-views ml-4 px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300" data-wish="sofa-halley" tabindex="0" title="Thêm vào yêu thích">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12 5C11.6604 4.60884 11.2646 4.26729 10.8278 3.9824C9.86267 3.35284 8.69792 3 7.5 3C4.42 3 2 5.37384 2 8.3951C2 9.46861 2.25574 10.488 2.69383 11.4578C4.0526 14.4686 7.16576 17.0093 9.8455 19.1963C10.617 19.8259 11.3526 20.4262 12 21C12.6474 20.4262 13.383 19.8259 14.1545 19.1963C16.8342 17.0093 19.9473 14.4687 21.3061 11.458C21.7442 10.4881 22 9.46866 22 8.3951C22 5.37384 19.58 3 16.5 3C15.3021 3 14.1373 3.35284 13.1722 3.9824C12.7354 4.26729 12.3396 4.60884 12 5ZM12 18.3699C12.3228 18.1024 12.6527 17.8326 12.9822 17.5633C13.2612 17.3351 13.5399 17.1073 13.8136 16.8813C14.9091 15.9769 15.9814 15.058 16.9309 14.095C18.106 12.9033 18.9793 11.7563 19.4879 10.6242C19.8233 9.8767 20 9.13633 20 8.3951C20 6.51455 18.5119 5 16.5 5C15.3116 5 14.2025 5.51373 13.5103 6.31111L12 8.05084L10.4897 6.31111C9.79748 5.51373 8.68843 5 7.5 5C5.48808 5 4 6.51455 4 8.3951C4 9.13633 4.17674 9.8767 4.51214 10.6242C5.02069 11.7563 5.89402 12.9033 7.06909 14.095C8.01864 15.058 9.09095 15.9769 10.1864 16.8813C10.4601 17.1073 10.7388 17.3351 11.0178 17.5633C11.3473 17.8326 11.6772 18.1024 12 18.3699Z" fill="#333333"/>
                                </svg>
                              </a>
                              <a title="Xem nhanh" href="/sofa-halley" data-handle="sofa-halley" class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm ml-4 px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 inline-block">
                                  <path fill="currentColor" d="M304 192v32c0 6.6-5.4 12-12 12h-56v56c0 6.6-5.4 12-12 12h-32c-6.6 0-12-5.4-12-12v-56h-56c-6.6 0-12-5.4-12-12v-32c0-6.6 5.4-12 12-12h56v-56c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v56h56c6.6 0 12 5.4 12 12zm201 284.7L476.7 505c-9.4 9.4-24.6 9.4-33.9 0L343 405.3c-4.5-4.5-7-10.6-7-17V372c-35.3 27.6-79.7 44-128 44C93.1 416 0 322.9 0 208S93.1 0 208 0s208 93.1 208 208c0 48.3-16.4 92.7-44 128h16.3c6.4 0 12.5 2.5 17 7l99.7 99.7c9.3 9.4 9.3 24.6 0 34zM344 208c0-75.2-60.8-136-136-136S72 132.8 72 208s60.8 136 136 136 136-60.8 136-136z"></path>
                                </svg>
                              </a>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="item_product_main item best_sale p-4 border rounded-lg shadow-sm">
                          <form action="" method="post" class="wishItem variants product-box product-block-item" data-cart-form data-id="product-actions-34126619" enctype="multipart/form-data">
                            <div class="product-thumbnail mb-4">
                              <div class="sapo-combo-badge" data-id="34126619"></div>
                              <a class="image_thumb scale_hover product-transition block overflow-hidden rounded-lg" href="" title="Sofa Halley">
                                <img class="w-80 h-70" :src="'/images/sofa3.png'" data-src="" alt="">
                              </a>
                            </div>
                            <div class="product-info">
                              <div class="product-content text-center">
                                <h3 class="product-name text-lg font-semibold mb-2"><a href="/sofa-halley" title="Sofa Halley" class="text-gray-800 hover:text-gray-600">Sofa Halley</a></h3>
                                <div class="blockprice">
                                  <div class="price-box text-red-500 text-xl font-bold">18.000.000₫</div>
                                </div>
                              </div>
                            </div>
                            <div class="product-action flex justify-center mt-4">
                              <input type="hidden" name="variantId" value="106815852" />
                              <button class="btn-buy firstb btn-cart button_35 left-to muangay btn-cart btn-views add_to_cart px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none" title="Mua hàng">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-basket" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5 inline-block">
                                  <path fill="currentColor" d="M576 216v16c0 13.255-10.745 24-24 24h-8l-26.113 182.788C514.509 462.435 494.257 480 470.37 480H105.63c-23.887 0-44.139-17.565-47.518-41.212L32 256h-8c-13.255 0-24-10.745-24-24v-16c0-13.255 10.745-24 24-24h67.341l106.78-146.821c10.395-14.292 30.407-17.453 44.701-7.058 14.293 10.395 17.453 30.408 7.058 44.701L170.477 192h235.046L326.12 82.821c-10.395-14.292-7.234-34.306 7.059-44.701 14.291-10.395 34.306-7.235 44.701 7.058L484.659 192H552c13.255 0 24 10.745 24 24zM312 392V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm112 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm-224 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24z"></path>
                                </svg>
                              </button>
                              <a href="javascript:void(0)" class="btn btn_view action btn-compare js-btn-wishlist setWishlist btn-views ml-4 px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300" data-wish="sofa-halley" tabindex="0" title="Thêm vào yêu thích">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12 5C11.6604 4.60884 11.2646 4.26729 10.8278 3.9824C9.86267 3.35284 8.69792 3 7.5 3C4.42 3 2 5.37384 2 8.3951C2 9.46861 2.25574 10.488 2.69383 11.4578C4.0526 14.4686 7.16576 17.0093 9.8455 19.1963C10.617 19.8259 11.3526 20.4262 12 21C12.6474 20.4262 13.383 19.8259 14.1545 19.1963C16.8342 17.0093 19.9473 14.4687 21.3061 11.458C21.7442 10.4881 22 9.46866 22 8.3951C22 5.37384 19.58 3 16.5 3C15.3021 3 14.1373 3.35284 13.1722 3.9824C12.7354 4.26729 12.3396 4.60884 12 5ZM12 18.3699C12.3228 18.1024 12.6527 17.8326 12.9822 17.5633C13.2612 17.3351 13.5399 17.1073 13.8136 16.8813C14.9091 15.9769 15.9814 15.058 16.9309 14.095C18.106 12.9033 18.9793 11.7563 19.4879 10.6242C19.8233 9.8767 20 9.13633 20 8.3951C20 6.51455 18.5119 5 16.5 5C15.3116 5 14.2025 5.51373 13.5103 6.31111L12 8.05084L10.4897 6.31111C9.79748 5.51373 8.68843 5 7.5 5C5.48808 5 4 6.51455 4 8.3951C4 9.13633 4.17674 9.8767 4.51214 10.6242C5.02069 11.7563 5.89402 12.9033 7.06909 14.095C8.01864 15.058 9.09095 15.9769 10.1864 16.8813C10.4601 17.1073 10.7388 17.3351 11.0178 17.5633C11.3473 17.8326 11.6772 18.1024 12 18.3699Z" fill="#333333"/>
                                </svg>
                              </a>
                              <a title="Xem nhanh" href="/sofa-halley" data-handle="sofa-halley" class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm ml-4 px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 inline-block">
                                  <path fill="currentColor" d="M304 192v32c0 6.6-5.4 12-12 12h-56v56c0 6.6-5.4 12-12 12h-32c-6.6 0-12-5.4-12-12v-56h-56c-6.6 0-12-5.4-12-12v-32c0-6.6 5.4-12 12-12h56v-56c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v56h56c6.6 0 12 5.4 12 12zm201 284.7L476.7 505c-9.4 9.4-24.6 9.4-33.9 0L343 405.3c-4.5-4.5-7-10.6-7-17V372c-35.3 27.6-79.7 44-128 44C93.1 416 0 322.9 0 208S93.1 0 208 0s208 93.1 208 208c0 48.3-16.4 92.7-44 128h16.3c6.4 0 12.5 2.5 17 7l99.7 99.7c9.3 9.4 9.3 24.6 0 34zM344 208c0-75.2-60.8-136-136-136S72 132.8 72 208s60.8 136 136 136 136-60.8 136-136z"></path>
                                </svg>
                              </a>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="item_product_main item best_sale p-4 border rounded-lg shadow-sm">
                          <form action="" method="post" class="wishItem variants product-box product-block-item" data-cart-form data-id="product-actions-34126619" enctype="multipart/form-data">
                            <div class="product-thumbnail mb-4">
                              <div class="sapo-combo-badge" data-id="34126619"></div>
                              <a class="image_thumb scale_hover product-transition block overflow-hidden rounded-lg" href="" title="Sofa Halley">
                                <img class="w-full h-auto" :src="'/images/sofa4.png'" data-src="" alt="">
                              </a>
                            </div>
                            <div class="product-info">
                              <div class="product-content text-center">
                                <h3 class="product-name text-lg font-semibold mb-2"><a href="/sofa-halley" title="Sofa Halley" class="text-gray-800 hover:text-gray-600">Sofa Halley</a></h3>
                                <div class="blockprice">
                                  <div class="price-box text-red-500 text-xl font-bold">18.000.000₫</div>
                                </div>
                              </div>
                            </div>
                            <div class="product-action flex justify-center mt-4">
                              <input type="hidden" name="variantId" value="106815852" />
                              <button class="btn-buy firstb btn-cart button_35 left-to muangay btn-cart btn-views add_to_cart px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none" title="Mua hàng">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-basket" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5 inline-block">
                                  <path fill="currentColor" d="M576 216v16c0 13.255-10.745 24-24 24h-8l-26.113 182.788C514.509 462.435 494.257 480 470.37 480H105.63c-23.887 0-44.139-17.565-47.518-41.212L32 256h-8c-13.255 0-24-10.745-24-24v-16c0-13.255 10.745-24 24-24h67.341l106.78-146.821c10.395-14.292 30.407-17.453 44.701-7.058 14.293 10.395 17.453 30.408 7.058 44.701L170.477 192h235.046L326.12 82.821c-10.395-14.292-7.234-34.306 7.059-44.701 14.291-10.395 34.306-7.235 44.701 7.058L484.659 192H552c13.255 0 24 10.745 24 24zM312 392V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm112 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm-224 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24z"></path>
                                </svg>
                              </button>
                              <a href="javascript:void(0)" class="btn btn_view action btn-compare js-btn-wishlist setWishlist btn-views ml-4 px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300" data-wish="sofa-halley" tabindex="0" title="Thêm vào yêu thích">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12 5C11.6604 4.60884 11.2646 4.26729 10.8278 3.9824C9.86267 3.35284 8.69792 3 7.5 3C4.42 3 2 5.37384 2 8.3951C2 9.46861 2.25574 10.488 2.69383 11.4578C4.0526 14.4686 7.16576 17.0093 9.8455 19.1963C10.617 19.8259 11.3526 20.4262 12 21C12.6474 20.4262 13.383 19.8259 14.1545 19.1963C16.8342 17.0093 19.9473 14.4687 21.3061 11.458C21.7442 10.4881 22 9.46866 22 8.3951C22 5.37384 19.58 3 16.5 3C15.3021 3 14.1373 3.35284 13.1722 3.9824C12.7354 4.26729 12.3396 4.60884 12 5ZM12 18.3699C12.3228 18.1024 12.6527 17.8326 12.9822 17.5633C13.2612 17.3351 13.5399 17.1073 13.8136 16.8813C14.9091 15.9769 15.9814 15.058 16.9309 14.095C18.106 12.9033 18.9793 11.7563 19.4879 10.6242C19.8233 9.8767 20 9.13633 20 8.3951C20 6.51455 18.5119 5 16.5 5C15.3116 5 14.2025 5.51373 13.5103 6.31111L12 8.05084L10.4897 6.31111C9.79748 5.51373 8.68843 5 7.5 5C5.48808 5 4 6.51455 4 8.3951C4 9.13633 4.17674 9.8767 4.51214 10.6242C5.02069 11.7563 5.89402 12.9033 7.06909 14.095C8.01864 15.058 9.09095 15.9769 10.1864 16.8813C10.4601 17.1073 10.7388 17.3351 11.0178 17.5633C11.3473 17.8326 11.6772 18.1024 12 18.3699Z" fill="#333333"/>
                                </svg>
                              </a>
                              <a title="Xem nhanh" href="/sofa-halley" data-handle="sofa-halley" class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm ml-4 px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 inline-block">
                                  <path fill="currentColor" d="M304 192v32c0 6.6-5.4 12-12 12h-56v56c0 6.6-5.4 12-12 12h-32c-6.6 0-12-5.4-12-12v-56h-56c-6.6 0-12-5.4-12-12v-32c0-6.6 5.4-12 12-12h56v-56c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v56h56c6.6 0 12 5.4 12 12zm201 284.7L476.7 505c-9.4 9.4-24.6 9.4-33.9 0L343 405.3c-4.5-4.5-7-10.6-7-17V372c-35.3 27.6-79.7 44-128 44C93.1 416 0 322.9 0 208S93.1 0 208 0s208 93.1 208 208c0 48.3-16.4 92.7-44 128h16.3c6.4 0 12.5 2.5 17 7l99.7 99.7c9.3 9.4 9.3 24.6 0 34zM344 208c0-75.2-60.8-136-136-136S72 132.8 72 208s60.8 136 136 136 136-60.8 136-136z"></path>
                                </svg>
                              </a>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="item_product_main item best_sale p-4 border rounded-lg shadow-sm">
                          <form action="" method="post" class="wishItem variants product-box product-block-item" data-cart-form data-id="product-actions-34126619" enctype="multipart/form-data">
                            <div class="product-thumbnail mb-4">
                              <div class="sapo-combo-badge" data-id="34126619"></div>
                              <a class="image_thumb scale_hover product-transition block overflow-hidden rounded-lg" href="" title="Sofa Halley">
                                <img class="w-full h-auto" :src="'/images/sofa5.png'" data-src="" alt="">
                              </a>
                            </div>
                            <div class="product-info">
                              <div class="product-content text-center">
                                <h3 class="product-name text-lg font-semibold mb-2"><a href="/sofa-halley" title="Sofa Halley" class="text-gray-800 hover:text-gray-600">Sofa Halley</a></h3>
                                <div class="blockprice">
                                  <div class="price-box text-red-500 text-xl font-bold">18.000.000₫</div>
                                </div>
                              </div>
                            </div>
                            <div class="product-action flex justify-center mt-4">
                              <input type="hidden" name="variantId" value="106815852" />
                              <button class="btn-buy firstb btn-cart button_35 left-to muangay btn-cart btn-views add_to_cart px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none" title="Mua hàng">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-basket" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5 inline-block">
                                  <path fill="currentColor" d="M576 216v16c0 13.255-10.745 24-24 24h-8l-26.113 182.788C514.509 462.435 494.257 480 470.37 480H105.63c-23.887 0-44.139-17.565-47.518-41.212L32 256h-8c-13.255 0-24-10.745-24-24v-16c0-13.255 10.745-24 24-24h67.341l106.78-146.821c10.395-14.292 30.407-17.453 44.701-7.058 14.293 10.395 17.453 30.408 7.058 44.701L170.477 192h235.046L326.12 82.821c-10.395-14.292-7.234-34.306 7.059-44.701 14.291-10.395 34.306-7.235 44.701 7.058L484.659 192H552c13.255 0 24 10.745 24 24zM312 392V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm112 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm-224 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24z"></path>
                                </svg>
                              </button>
                              <a href="javascript:void(0)" class="btn btn_view action btn-compare js-btn-wishlist setWishlist btn-views ml-4 px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300" data-wish="sofa-halley" tabindex="0" title="Thêm vào yêu thích">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12 5C11.6604 4.60884 11.2646 4.26729 10.8278 3.9824C9.86267 3.35284 8.69792 3 7.5 3C4.42 3 2 5.37384 2 8.3951C2 9.46861 2.25574 10.488 2.69383 11.4578C4.0526 14.4686 7.16576 17.0093 9.8455 19.1963C10.617 19.8259 11.3526 20.4262 12 21C12.6474 20.4262 13.383 19.8259 14.1545 19.1963C16.8342 17.0093 19.9473 14.4687 21.3061 11.458C21.7442 10.4881 22 9.46866 22 8.3951C22 5.37384 19.58 3 16.5 3C15.3021 3 14.1373 3.35284 13.1722 3.9824C12.7354 4.26729 12.3396 4.60884 12 5ZM12 18.3699C12.3228 18.1024 12.6527 17.8326 12.9822 17.5633C13.2612 17.3351 13.5399 17.1073 13.8136 16.8813C14.9091 15.9769 15.9814 15.058 16.9309 14.095C18.106 12.9033 18.9793 11.7563 19.4879 10.6242C19.8233 9.8767 20 9.13633 20 8.3951C20 6.51455 18.5119 5 16.5 5C15.3116 5 14.2025 5.51373 13.5103 6.31111L12 8.05084L10.4897 6.31111C9.79748 5.51373 8.68843 5 7.5 5C5.48808 5 4 6.51455 4 8.3951C4 9.13633 4.17674 9.8767 4.51214 10.6242C5.02069 11.7563 5.89402 12.9033 7.06909 14.095C8.01864 15.058 9.09095 15.9769 10.1864 16.8813C10.4601 17.1073 10.7388 17.3351 11.0178 17.5633C11.3473 17.8326 11.6772 18.1024 12 18.3699Z" fill="#333333"/>
                                </svg>
                              </a>
                              <a title="Xem nhanh" href="/sofa-halley" data-handle="sofa-halley" class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm ml-4 px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 inline-block">
                                  <path fill="currentColor" d="M304 192v32c0 6.6-5.4 12-12 12h-56v56c0 6.6-5.4 12-12 12h-32c-6.6 0-12-5.4-12-12v-56h-56c-6.6 0-12-5.4-12-12v-32c0-6.6 5.4-12 12-12h56v-56c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v56h56c6.6 0 12 5.4 12 12zm201 284.7L476.7 505c-9.4 9.4-24.6 9.4-33.9 0L343 405.3c-4.5-4.5-7-10.6-7-17V372c-35.3 27.6-79.7 44-128 44C93.1 416 0 322.9 0 208S93.1 0 208 0s208 93.1 208 208c0 48.3-16.4 92.7-44 128h16.3c6.4 0 12.5 2.5 17 7l99.7 99.7c9.3 9.4 9.3 24.6 0 34zM344 208c0-75.2-60.8-136-136-136S72 132.8 72 208s60.8 136 136 136 136-60.8 136-136z"></path>
                                </svg>
                              </a>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>




<main class="container mx-auto my-8 px-4">
    <!-- Introduction section -->
    <h1 class="text-3xl font-bold mb-6 text-center">Những Khuyến mãi từ cửa hàng</h1>

    <!-- Promotions grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Promotion 1 -->
      <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 ease-in-out">
        <div class="relative h-64 overflow-hidden">
          <img src="/images/voucher1.png" alt="Chào xuân năm 2024" class="absolute inset-0 w-full h-full object-cover">
        </div>
        <div class="p-4">
          <h2 class="text-xl font-semibold mb-2">Chào xuân năm 2024</h2>
          <p class="text-gray-700">Nhằm chúc tết đến gia đình Việt, K&V SHOP mở ưu đãi chương trình khuyến mãi lớn. Nhận quà siêu khủng.</p>
        </div>
      </div>

      <!-- Promotion 2 -->
      <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 ease-in-out">
        <div class="relative h-64 overflow-hidden">
          <img src="/images/voucher2.png" alt="Voucher hot hot" class="absolute inset-0 w-50 h-90 object-cover">
        </div>
        <div class="p-4">
          <h2 class="text-xl font-semibold mb-2">Voucher hot hot</h2>
          <p class="text-gray-700">K&V SHOP mở ưu đãi chương trình khuyến mãi lớn cho khách hàng mua hóa đơn trên 3 triệu và những sản phẩm khác.</p>
        </div>
      </div>
    </div>
  </main>
   
<Footer/>
  </div>
  </Sidebar>
  
</template>

<script>
export default {
  name: 'App',
}

</script>

