<template>
  <div class="flex flex-col min-h-screen">
    <UserNavBar />
    <main>
      <router-view />
    </main>
    <UserFooter />
  </div>
</template>

<script setup>
import UserNavBar from '@/components/navbar/UserNavBar.vue';
import UserFooter from '@/components/footer/UserFooter.vue';
</script>