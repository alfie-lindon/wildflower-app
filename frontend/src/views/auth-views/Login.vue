<template>
    <div>
        <div class="pb-5 flex flex-col gap-6">
            <div class="relative">
            <v-icon name="bi-envelope" scale="1" class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-500" />
            <input type="email" placeholder="johndoe@email.com" class="bg-[#D4D4D4] p-2 pl-10 rounded-3xl shadow-sm font-lora text-primaryText w-70 h-10">
            </div>
            <div class="relative">
            <v-icon name="bi-lock" scale="1" class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-500" />
            <input :type="showPassword ? 'text' : 'password'" placeholder="•••••••" class="bg-[#D4D4D4] p-2 pl-10 rounded-3xl shadow-sm font-lora text-primaryText w-70 h-10">
            <button
                type="button"
                @click="showPassword = !showPassword"
                class="absolute right-4 top-1/2 -translate-y-1/2 font-lora text-sm text-gray-600"
            >
                {{ showPassword ? 'Hide' : 'Show' }}
            </button>
            </div>
            <button class="bg-burgundy hover:bg-gold p-1 px-6 rounded-2xl shadow-sm">
                <p class="font-lora text-brand">Log in</p>
            </button>
        </div>

        <div class="flex justify-between">
            <button @click="$router.push('/auth/reset-password')" class="text-sm font-lora text-primaryText">Forgot Password?</button>
            <button @click="$router.push('/auth/signup')" class="text-sm font-lora text-primaryText">Sign up</button>
        </div>

        <hr class="border-[#2C473C] my-3" />
        <p class="font-lora text-primaryText text-center">or log in with</p>

        <div class="flex justify-center gap-2 my-3">
            <v-icon name="fa-google" scale="2" class="text-burgundy hover:text-gold" />
            <v-icon name="bi-facebook" scale="2" class="text-burgundy hover:text-gold" />
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const showPassword = ref(false);
</script>