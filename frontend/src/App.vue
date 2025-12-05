<template>
  <div class="min-h-screen">
    <router-view />
  </div>
</template>

<script setup>
import { addIcons } from 'oh-vue-icons';
import { BiCart, HiUserCircle, BiEnvelope, BiLock, FaGoogle, BiFacebook, BiTelephone  } from "oh-vue-icons/icons";

addIcons(BiCart, HiUserCircle, BiEnvelope, BiLock, FaGoogle, BiFacebook, BiTelephone );
</script>