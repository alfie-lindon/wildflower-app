<template>
  <div class="flex items-center justify-center min-h-screen">
    <div class="flex flex-col gap-10">
      <div class="text-center">
        <h1 class="text-3xl">Ref and v-bind pracice</h1>
        <h1 :class="textClass">{{ thisText }}</h1>
        <input type="text" class="border" v-model="thisText">
        <button @click="changeColor">Change Color!</button>
      </div>

      <div class="text-center">
        <h1 class="text-3xl">Lists, Conditionals, and Computed Properties</h1>
        <section v-if="inProgress.length">
          <h1 class="font-bold">In Progress</h1>
          <ul>
            <li
              v-for="ass in inProgress"
              :key="ass.id"
            >
              <label>
                {{ ass.name }}
                <input v-model="ass.complete" type="checkbox" class="border ml-2">
              </label>
            </li>
          </ul>
        </section>

        <section v-if="accomplished.length">
          <h1 class="font-bold">Accomplished</h1>
          <ul>
            <li
              v-for="ass in accomplished"
              :key="ass.id"
            >
              <label>
                {{ ass.name }}
                <input v-model="ass.complete" type="checkbox" class="border ml-2">
              </label>
            </li>
          </ul>
        </section>

        <p>You have completed <b>{{ totalCompleted }}</b> tasks.</p>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue';

// Ref and v-bind pracice
const thisText = ref('');
const textClass = ref('text-green-600');
const isGreen = ref(true);

const changeColor = () => {
  isGreen.value = !isGreen.value
  textClass.value = isGreen.value ? 'text-green-600' : 'text-yellow-600'
}
// -----------------

// Lists, Conditionals, and Computed Properties
const assignments = ref([
  {id:'1', name: 'Task 1', complete: false},
  {id:'2', name: 'Task 2', complete: false},
  {id:'3', name: 'Task 3', complete: false},
])

const inProgress = computed(() =>
  assignments.value.filter(a => !a.complete)
)

const accomplished = computed(() =>
  assignments.value.filter(a => a.complete)
)

const totalCompleted = computed(() => 
  accomplished.value.length
)
// -----------------


</script>