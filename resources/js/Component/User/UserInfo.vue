<template>
    <div>
        <h1 class="mb-2 text-xl">{{ user.name }}</h1>
        <div class="text-slate-700">
            <p>{{ user.email }}</p>
            <p>{{ varifiedAt(user.created_at) }}</p>
        </div>
    </div>
</template>

<script setup>
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
