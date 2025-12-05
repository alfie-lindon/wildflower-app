<template>
  <div class="flex flex-col min-h-screen items-center">
    <!-- Intro Hero -->
    <div class="pt-30 pb-20 w-[70%]">
      <div class="flex items-center">
        <div class="text-center mr-10">
          <p class="text-[64px] font-playfair font-bold text-primaryText">The Craft of Celebration</p>
          <p class="text-[40px] font-playfair italic text-primaryText">Discover a curated collection of artisanal wines and small-batch brews</p>
          <p class="text-[25px] font-playfair text-primaryText mb-2">From cellar staples to exclusive seasonal releases, find your next perfect pour right here.</p>
          <button class="bg-burgundy p-1 px-6 rounded-lg">
            <p class="text-xl font-playfair font-bold text-brand">SHOP NOW</p>
          </button>
        </div>
        <div class="">
          <img src="@/assets/wine_hero.png" alt="Wine hero image" class="w-60"/>
        </div>
      </div>
    </div>

    <!-- Our Products section -->
    <div class="pt-30 w-[80%]">
      <div class="text-center pb-20">
        <p class="text-[64px] font-playfair font-bold text-primaryText">Our Products</p>
        <p class="text-[40px] font-playfair italic text-primaryText">Crafted with Precision</p>
      </div>

      <div class="flex row justify-between">
        <a href="#modal" class="p-6 rounded-xl flex flex-col items-center text-center border border-transparent hover:border-[#D4D4D4] border-3 group">
          <img src="@/assets/wine_nobg.png" alt="Produc image" class="w-30" />
          <p class="text-[25px] font-lora font-bold text-primaryText">Wildflower Mead</p>
          <p class="text-[25px] font-lora text-gold">10% - 12% ABV</p>
          <p class="text-[25px] font-lora font-bold text-primaryText">₱599</p>
          <button class="p-1 px-3 rounded-lg mt-3 hidden group-hover:block bg-burgundy hover:bg-gold">
            <p class="text-xl font-playfair font-bold text-brand">ADD TO CART</p>
          </button>
        </a>

        <a href="#modal" class="p-6 rounded-xl flex flex-col items-center text-center border border-transparent hover:border-[#D4D4D4] border-3 group">
          <img src="@/assets/wine_nobg.png" alt="Produc image" class="w-30" />
          <p class="text-[25px] font-lora font-bold text-primaryText">Wildflower Mead</p>
          <p class="text-[25px] font-lora text-gold">10% - 12% ABV</p>
          <p class="text-[25px] font-lora font-bold text-primaryText">₱599</p>
          <button class="p-1 px-3 rounded-lg mt-3 hidden group-hover:block bg-burgundy hover:bg-gold">
            <p class="text-xl font-playfair font-bold text-brand">ADD TO CART</p>
          </button>
        </a>

        <a href="#modal" class="p-6 rounded-xl flex flex-col items-center text-center border border-transparent hover:border-[#D4D4D4] border-3 group">
          <img src="@/assets/wine_nobg.png" alt="Produc image" class="w-30" />
          <p class="text-[25px] font-lora font-bold text-primaryText">Wildflower Mead</p>
          <p class="text-[25px] font-lora text-gold">10% - 12% ABV</p>
          <p class="text-[25px] font-lora font-bold text-primaryText">₱599</p>
          <button class="p-1 px-3 rounded-lg mt-3 hidden group-hover:block bg-burgundy hover:bg-gold">
            <p class="text-xl font-playfair font-bold text-brand">ADD TO CART</p>
          </button>
        </a>

        <a href="#modal" class="p-6 rounded-xl flex flex-col items-center text-center border border-transparent hover:border-[#D4D4D4] border-3 group">
          <img src="@/assets/wine_nobg.png" alt="Produc image" class="w-30" />
          <p class="text-[25px] font-lora font-bold text-primaryText">Wildflower Mead</p>
          <p class="text-[25px] font-lora text-gold">10% - 12% ABV</p>
          <p class="text-[25px] font-lora font-bold text-primaryText">₱599</p>
          <button class="p-1 px-3 rounded-lg mt-3 hidden group-hover:block bg-burgundy hover:bg-gold">
            <p class="text-xl font-playfair font-bold text-brand">ADD TO CART</p>
          </button>
        </a>
      </div>

      <div class="text-center pt-20">
        <RouterLink to="/products" class="text-[25px] font-lora text-gold hover:underline">View More</RouterLink>
      </div>

    </div>
  </div>
</template>

<script setup>
import { RouterLink } from 'vue-router';

</script>