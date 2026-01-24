<template>
  <div class="text-center">
		<h1 class="text-3xl">Lists, Conditionals, props, and Computed Properties</h1>
		<TodoCreate @add-task="addAssignment" />
		<TodoList title="In Progress" :task="inProgress"/>
		<TodoList title="Accomplished" :task="accomplished"/>
		<p>You have completed <b>{{ totalCompleted }}</b> tasks.</p>
	</div>
</template>

<script setup>
import { ref, computed } from 'vue';
import TodoList from './TodoList.vue';
import TodoCreate from './TodoCreate.vue';

const assignments = ref([
  {id:'1', name: 'Math', tag:'Math', complete: false},
  {id:'2', name: 'Science', tag:'Science', complete: false},
  {id:'3', name: 'History', tag:'History', complete: false},
])

const addAssignment = (task) => {
  assignments.value.push({
		id: assignments.value.length + 1,
		name: task,
		complete: false
	})
}

const inProgress = computed(() =>
  assignments.value.filter(a => !a.complete)
)

const accomplished = computed(() =>
  assignments.value.filter(a => a.complete)
)

const totalCompleted = computed(() => 
  accomplished.value.length
)
</script>