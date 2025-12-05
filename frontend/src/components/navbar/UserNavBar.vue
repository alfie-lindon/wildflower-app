<template>
    <nav class="fixed top-0 left-0 w-full bg-white">
      <div class="container mx-auto flex justify-between items-center p-3">

        <!-- Logo -->
        <div class="flex">
          <RouterLink to="/">
            <img alt="logo" src="../../assets/wf_logoword.png" class="w-40" />
          </RouterLink>
        </div>

        <!-- Nav links -->
        <div class="flex gap-18 pr-20 font-didone text-xl text-primaryText">
          <RouterLink to="#products" class="relative hover:underline">Products</RouterLink>
          <RouterLink to="#about" class="relative hover:underline">About</RouterLink>
          <RouterLink to="#deals" class="relative hover:underline">Deals</RouterLink>
          <RouterLink to="#location" class="relative hover:underline">Location</RouterLink>
        </div>

        <!-- Cart and User -->
        <div class="relative flex gap-6" ref="dropdownRef">
          <button>
            <v-icon name="bi-cart" scale="2"/>
          </button>
          <button 
            @click="toggleDropdown"
          >
            <v-icon name="hi-user-circle" scale="2"/>
          </button>

          <div 
            v-if="isOpen"
            class="absolute right-0.5 mt-12 w-40 bg-white border border-gray-300 rounded-lg shadow-lg p-2 flex flex-col"
          >
            <RouterLink to="/auth/login" class="text-left px-3 py-2 hover:bg-gray-100 rounded">Sign In</RouterLink>
            <RouterLink to="/auth/signup" class="text-left px-3 py-2 hover:bg-gray-100 rounded">Sign Up</RouterLink>
          </div>
        </div>

      </div>
    </nav>
</template>

<script setup>
import { RouterLink } from 'vue-router';
import { ref, onMounted, onBeforeUnmount } from 'vue';

const isOpen = ref(false);
const dropdownRef = ref(null);

function toggleDropdown(){
  isOpen.value = !isOpen.value;
}

function handleClickOutside(event) {
  if (dropdownRef.value && !dropdownRef.value.contains(event.target)) {
    isOpen.value = false;
  }
}

onMounted(() => {
  window.addEventListener('click', handleClickOutside);
});

onBeforeUnmount(() => {
  window.removeEventListener('click', handleClickOutside);
});
</script>