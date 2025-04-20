<template>
    <Head>
        <meta
            head-key="description"
            name="description"
            content="Inertia Vue Description"
        />
    </Head>
    <main>
        <header class="bg-sky-600 text-white py-5">
            <Link
                :href="route('user.index')"
                class="mx-3"
                :class="{ 'active': $page.component === 'User/Index' }"
                >Home</Link
            >
            <Link href="/about" class="mx-3">About</Link>
            <Link href="/contact" class="mx-3">Contact</Link>
            <Link href="/post-test" method="post" :data="form" class="mx-3"
                >Post test</Link
            >
        </header>
        <article class="p-5 h-full bg-slate-100 min-h-screen">
            <slot />
        </article>
    </main>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";
let form = useForm({
    name: "ktz",
    email: "ktz@gmail.com",
});
</script>

<style>
.active {
    color: rgb(167, 194, 222);
}
</style>
