// Stores example (Composition API)
import { ref, computed } from 'vue'
import { defineStore } from 'pinia'

export const useCounterStore = defineStore('counter', () => {
  const count = ref(0)
  const doubleCount = computed(() => count.value * 2)
  function increment() {
    count.value++
  }

  return { count, doubleCount, increment }
})

// Stores example (Options API)
// export const useCounterStore = defineStore('counter', {
//   // In perspective equivalent
//   // data
//   state(){
//     return{
//       count: 5
//     }
//   },
//   // methods
//   actions: {
//     increment(){
//       this.count++
//     }
//   },
//   // Similar to computed etc.
//   getters: {
//     remaining(){
//       return 10 - this.count;
//     }
//   }
// })