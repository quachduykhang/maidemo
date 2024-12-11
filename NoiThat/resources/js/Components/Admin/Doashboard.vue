<template>
    <div class="sticky top-0 bg-weather-primary shadow border-l-gray-50">
          <nav 
          class="container flex flex-col sm:flex-row items-center
          gap-4 text-white py-6">
        <RouterLink :to="{ name: home}">
            <div class ="flex items-center gap-3">
                <i class="fa-solid fa-sun text-2xl"></i>
                <p class="">Trang Admin</p>
            </div>

        </RouterLink>
        <div class="flex gap-3 flex-1 justify-end">
            <i class=" fa-solid fa-circle-into text-xl
            hover:text-weather-secondary duration-150 cursor-pointer"></i>
            <i
            class="fa-solid fa-plus text-xl
            hover:text-weather-secondary duration-150
            cursor-pointer"></i>
        </div>
        </nav>

    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>

</style>