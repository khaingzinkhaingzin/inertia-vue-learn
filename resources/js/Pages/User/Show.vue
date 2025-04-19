<template>
    <h1>{{ user.name }}</h1>
    <p>{{ user.email }}</p>
    <p>{{ varifiedAt(user.email_verified_at) }}</p>
</template>

<script setup>
import Layout from "../../Layout/Layout.vue";
defineOptions({ layout: Layout });
defineProps({
    user: Object,
});

const varifiedAt = (date) => {
    return new Date(date).toLocaleString("en-us", {
        year: "numeric",
        month: "numeric",
        day: "numeric",
    });
};
</script>

<style></style>
