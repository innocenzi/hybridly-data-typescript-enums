<script setup lang="ts">
defineProps<{
	pilot: App.Data.PilotData
}>()
</script>

<template>
	<div>
		{{ pilot.grade }}
	</div>
</template>
