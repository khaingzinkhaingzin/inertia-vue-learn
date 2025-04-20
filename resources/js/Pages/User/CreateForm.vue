<template>
    <Head>
        <meta
            head-key="description"
            name="description"
            content="User create form"
        />
        <title>| Create Form</title>
    </Head>
    <div class="flex justify-center">
        <form @submit.prevent="store" class="w-3/4 p-7">
            <div class="flex mb-5">
                <label for="name" class="w-1/3">Name</label>
                <input
                    type="text"
                    class="w-2/3 py-1 px-2 text-slate-600 ring-1 ring-slate-200"
                    id="name"
                    v-model="form.name"
                />
            </div>
            <div class="flex mb-5">
                <label for="email" class="w-1/3">Email</label>
                <input
                    type="text"
                    class="w-2/3 py-1 px-2 text-slate-600 ring-1 ring-slate-200"
                    id="email"
                    v-model="form.email"
                />
            </div>
            <div class="flex mb-5">
                <label for="password" class="w-1/3">Password</label>
                <input
                    type="password"
                    class="w-2/3 py-1 px-2 text-slate-600 ring-1 ring-slate-200"
                    id="password"
                    v-model="form.password"
                />
            </div>
            <div class="flex mb-10">
                <label for="password_confirmation" class="w-1/3"
                    >Confirm Password</label
                >
                <input
                    type="password"
                    class="w-2/3 py-1 px-2 text-slate-600 ring-1 ring-slate-200"
                    id="password_confirmation"
                    v-model="form.password_confirmation"
                />
            </div>

            <div class="flex justify-center">
                <button class="bg-blue-300 w-3/6 px-7 py-1 text-white">
                    Submit
                </button>
            </div>
        </form>
    </div>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";
const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
});
const store = () => {
    form.post("/users");
};
</script>

<style></style>
