 <script setup>
import { defineProps, ref} from 'vue';
import { useForm } from '@inertiajs/vue3';
import Sidebar from '@/Layouts/Menu.vue';
import Footer from '@/Layouts/Footer.vue';


const props=defineProps({
  cart:Object,
  merchandise: Object,
  totalPrice:Number,
});
const getcart = ref(props.cart)
const form = useForm({});
const totalPrices  = ref(0);

console.log(totalPrices);


function xoa(id) {
  if (confirm('Bạn chắc muốn xóa?')) {
    form.delete(route('cart.delete', id));
  }
}

function updateCartItem(item, quantity) {
  // Logic để cập nhật số lượng sản phẩm trong giỏ hàng.
  // Bạn có thể gửi yêu cầu lên server hoặc cập nhật trạng thái cục bộ.
  console.log(`Updating item ${item.id} to quantity ${quantity}`);
  // Ví dụ: gửi yêu cầu lên server để cập nhật giỏ hàng
  // form.put(route('cart.update', item.id), { quantity });
}
console.log(totalPrices);
</script>

<template>
  <Sidebar />

  <div class="container">
    <div class="col-md-12">
      <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-lg">
        <thead>
          <tr class="bg-gray-800 text-white text-lef">
            <th class="py-3 px-4 border-b">Hình ảnh</th>
            <th class="py-3 px-4 border-b">Tên Sản Phẩm</th>
            <th class="py-1 px-7 border-b">Giá</th>
            <th class="py-1 px-7 border-b">Số Lượng</th>
            <th class="py-1 px-7 border-b">Thành tiền</th>
            <th class="py-1 px-7 border-b">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(item, index) in cart" :key="index"  class="border-b hover:bg-gray-50 transition duration-300 ease-in-out">
            <td class="px-3 py-4 whitespace-nowrap text-sm text-gray-900">
          <img :src="'/images/' + item.images" alt="" class="h-12 w-13 rounded">
        </td>
            <td class="py-3 px-4">{{ item.name }}</td>
           
            <td  class="py-3 px-4">{{ item.price }}</td>
            <td class="py-3 px-4">
              <input
                type="number"
                :value="item.quantity"
                class="w-16 text-center"
                @change="updateCartItem(item, $event.target.value)"
              />
            </td>
            <td class="py-2">{{ item.price * item.quantity }}.000</td>
            <td class="py-2">
              <button @click.prevent="xoa(item.id)" class="text-red-600">Xóa</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="coupon-and-update-area pt-20">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="coupon-code-area pt-15">
            <form action="#">
              <input
                type="text"
                placeholder="Mã code"
                class="pl-15 mr-2 pt-0 mb-15 d-inline-block width50"
              />
              <a
                href="index.php?pid=25"
                class="web-btn d-inline-block theme-bg border-theme02 white text-uppercase over-hidden position-relative pt-20 pb-20 pl-35 pr-35"
              >
                Đơn hàng
              </a>
            </form>
          </div>
        </div>
        <div class="container mx-auto flex justify-end">
    <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/3 bg-white shadow-lg rounded-lg p-6 mt-8">
      <div class="total-price-area">
        <h2 class="font-semibold text-2xl text-gray-800">Thanh toán</h2>
        <ul class="pt-4 pb-6">
          <li class="flex justify-between items-center border-b border-gray-300 py-4">
            <span class="text-lg text-gray-600">Total</span>
            <span class="text-lg font-semibold text-gray-800">{{ totalPrice }}.000</span>
          </li>
        </ul>
        <a
          :href="route('orders.index')"
          class="block w-full text-center bg-blue-600 text-white text-lg font-semibold py-3 rounded-lg hover:bg-blue-700 transition duration-300 mt-4"
        >
          Thanh toán
        </a>
      </div>
    </div>
  </div>
      </div>
    </div>
  </div>
  
  <Footer />
</template>

<style scoped>
input[type="number"] {
  width: 60px;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  text-align: center;
}

.container {
  margin-top: 20px;
}

.table th, .table td {
  text-align: center;
  vertical-align: middle;
}

.coupon-code-area input {
  width: calc(50% - 20px);
  display: inline-block;
  margin-right: 10px;
}
</style>
