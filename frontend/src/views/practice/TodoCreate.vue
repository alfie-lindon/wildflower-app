<template>
	<form @submit.prevent="add" class="pt-5">
		<input v-model="newTask" type="text" class="border-2 rounded-md" />
		<button type="submit" class="ml-2 p-1 px-3 bg-gray-300">Add</button>
	</form>
</template>

<script setup lang="ts">
import { ref } from 'vue';

const emit = defineEmits(['add-task'])
const newTask = ref('')
const add = () => {
	emit('add-task', newTask.value)
	newTask.value = ''
}
</script>