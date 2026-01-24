<template>
  <div class="p-4 w-60 mx-auto border rounded-2xl">
    <h1>{{ title }}</h1>
    <hr class="my-4 border-t border-gray-300" />
    <slot name="header" />
    <slot />
    <hr class="my-4 border-t border-gray-300" />
    <slot name="footer" />

    <button @click="changeLabel" type="button" class="bg-gray-300 rounded p-3 cursor-pointer active:bg-violet-700">
      {{ newLabel }}
    </button>
  </div>
</template>

<script setup>
import { ref } from 'vue';
const props = defineProps({
    testing: {
        type: Boolean,
        default: false
    },
    label: {
        type: String,
        default: 'Default Button'
    },
    title: String
})

const newLabel = ref(props.label)
const changeLabel = () => {
    if(props.testing) {
        newLabel.value = 'Default Button'
    }else{
        newLabel.value = 'Default Button'
    }
}
</script>