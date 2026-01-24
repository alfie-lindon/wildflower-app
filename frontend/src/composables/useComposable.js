import { ref, watch } from 'vue';

export function useComposable(key){

    let storedVal = localStorage.getItem(key)
    let currValue = ref(storedVal)

    watch(currValue, (newValue) => {
        localStorage.setItem(key, newValue)
    })
    
    return {currValue};
}