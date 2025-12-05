<template>
    <div class="flex flex-col min-h-screen">
      <AuthNavBar />
        <div class="flex min-h-screen items-center justify-center">
          <div class="bg-white pt-0 pb-0 p-10 rounded-2xl shadow-md">
            <div class="mt-5 pb-6 text-center">
              <p class="text-[30px] font-lora font-bold text-primaryText">
                {{  title }}
              </p>
            </div>

            <router-view />

          </div>
        </div>
      <UserFooter />
    </div>
</template>

<script setup>
import { computed } from "vue";
import { useRoute } from "vue-router";
import AuthNavBar from '@/components/navbar/AuthNavBar.vue';
import UserFooter from '@/components/footer/UserFooter.vue';

const route = useRoute();

const title = computed(() => {
  if(route.name == 'login') return "Log in";
  if(route.name == 'signup') return "Sign up";
  return "Reset Password";
})
</script>