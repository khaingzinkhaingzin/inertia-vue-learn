<template>
    <h1>slot</h1>
</template>

<script setup>
import Layout from "../../Layout/Layout.vue";
defineOptions({ layout: Layout });
defineProps({
    user: Object,
});
</script>

<style></style>
