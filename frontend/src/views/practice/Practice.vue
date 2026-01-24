<template>
  <div class="flex items-center justify-center min-h-screen">
    <div class="flex flex-col gap-10">
      <div class="text-center mt-20">
        <h1 class="text-3xl">Ref and v-bind pracicse</h1>
        <h1 :class="textClass">{{ thisText }}</h1>
        <input type="text" class="border" v-model="thisText">
        <button @click="changeColor">Change Color!</button>
      </div>

      <!-- Todo app practice -->
      <Todo />

      <div class="text-center">
        <h1 class="text-3xl">Props Familiarity</h1>
        <PracticeComponent label="Submit" :testing="true" />
      </div>

      <div class="text-center grid gap-6">
        <h1 class="text-3xl">Slots Usage</h1>
        <PracticeComponent title="Slot 1">
          <p>Slot only</p>
        </PracticeComponent>

        <PracticeComponent title="Slot 2">
          <template #header>
            <h1 class="font-bold"> This is the Header</h1>
          </template>
          <p>Slot with header</p>
        </PracticeComponent>

        <PracticeComponent title="Slot 3">
          <template #header>
            <h1 class="font-bold"> This is the Header</h1>
          </template>
          <p>Slot with header and footer</p>
          <template #footer>
            <h1 class="font-thin"> This is the Footer</h1>
          </template>
        </PracticeComponent>
      </div>

      <div class="text-center grid gap-6">
        <h1 class="text-3xl">Composables basic usage</h1>
        <button type="button" class="p-2 border rounded" @click="showAlert('Ugh pindutin mo pa daddy')">Click for alert!</button>
        <input type="text" class="border" v-model="food" />
      </div>

    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import PracticeComponent from '@/components/PracticeComponent.vue'; // Component that contains props
import Todo from '@/views/practice/Todo.vue';
import {useComposable} from '@/composables/useComposable.js'; //Composable testing for reusable alert message

let {currValue: food} = useComposable('food');

// Ref and v-bind pracice
const thisText = ref('');
const textClass = ref('text-green-600');
const isGreen = ref(true);

const changeColor = () => {
  isGreen.value = !isGreen.value
  textClass.value = isGreen.value ? 'text-green-600' : 'text-yellow-600'
}
// -----------------


</script>