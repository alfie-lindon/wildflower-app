<template>
  <section v-if="task.length">
		<h1 class="font-bold">{{ title }} ({{ task.length }})</h1>

		<div>
			<button
				@click="currentTag = tag"
				v-for="tag in tags"
				:key="tag.name"
				class="m-1 p-1 border rounded-md text-xs"
				:class="{
					'bg-gray-300': tag === currentTag
				}"
			>{{ tag }}</button>
		</div>

		<ul>
			<li
				v-for="ass in filteredTask"
				:key="ass.id"
			>
				<label>
					{{ ass.name }}
					<input v-model="ass.complete" type="checkbox" class="border ml-2">
				</label>
			</li>
		</ul>
	</section>
</template>

<script setup>
import { ref, computed } from 'vue';

const props = defineProps({
	title: String,
	task: Array
})

const currentTag = ref('All')

const tags = computed(() =>
	['All', ...new Set(props.task.map(a => a.tag ))]
)

const filteredTask = computed(() => {
	if(currentTag.value === 'All'){
		return props.task
	}
	return props.task.filter(a => a.tag === currentTag.value)
})


</script>