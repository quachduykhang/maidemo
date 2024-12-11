<script setup>
import { defineProps, defineEmits } from 'vue';

const props = defineProps({
  links: {
    type: Array,
    required: true
  }
});

const emit = defineEmits(['page-changed']);

const goToPage = (page) => {
  emit('page-changed', page);
};
</script>

<template>
  <div v-if="links.length > 0" class="flex justify-center mt-4">
    <ul class="flex space-x-1">
      <li v-for="(link, index) in links" :key="index">
        <button
          @click="goToPage(link.label)"
          :class="[
            'px-3 py-1 rounded',
            link.active ? 'bg-blue-500 text-white' : 'bg-white border'
          ]"
          :disabled="link.active"
        >
          <span v-html="link.label"></span>
        </button>
      </li>
    </ul>
  </div>
</template>

<style scoped>
button:disabled {
  cursor: not-allowed;
}
</style>
