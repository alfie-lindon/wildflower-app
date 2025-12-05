<template>
    <div>
        <div class="pb-5 flex flex-col gap-5">
            <div class="relative">
                <v-icon name="bi-envelope" scale="1" class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-500" />
                <input type="email" placeholder="johndoe@email.com" class="bg-[#D4D4D4] p-2 pl-10 rounded-3xl shadow-sm font-lora text-primaryText w-70 h-10">
            </div>

            <button class="bg-burgundy hover:bg-gold p-1 px-6 rounded-2xl shadow-sm">
                <p class="font-lora text-brand">Reset password</p>
            </button>

            <a href="/auth/login" class="font-lora text-primaryText text-center hover:underline">Back to Log in</a>
        </div>
    </div>
</template>

<script setup>
</script>