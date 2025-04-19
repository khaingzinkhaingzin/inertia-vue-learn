<template>
    <main>
        <header class="bg-blue-300 py-4">
            <Link href="/" class="mx-3">Home</Link>
            <Link href="/about" class="mx-3">About</Link>
            <Link href="/contact" class="mx-3">Contact</Link>
        </header>
        <article class="p-5 bg-slate-100 h-screen">
            <slot />
        </article>
    </main>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<style></style>
