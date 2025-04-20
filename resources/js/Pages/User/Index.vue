<template>
    <div class="mb-3 text-end">
        <Link
            :href="route('user.create')"
            class="bg-sky-300 border border-solid border-slate-400 px-5 py-1 rounded"
        >
            New User
        </Link>
    </div>
    <table class="border-collapse border border-slate-400 w-full">
        <thead class="bg-neutral-200">
            <tr>
                <th class="border border-slate-400 text-left py-2 pl-2">
                    Name
                </th>
                <th class="border border-slate-400 text-left py-2 pl-2">
                    Email
                </th>
                <th class="border border-slate-400 text-left py-2 pl-2">
                    Registered At
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="user in users" :key="user.email">
                <td class="border border-slate-400 py-2 pl-2">
                    {{ user.name }}
                </td>
                <td class="border border-slate-400 py-2 pl-2">
                    {{ user.email }}
                </td>
                <td class="border border-slate-400 py-2 pl-2">
                    {{ formatDate(user.created_at) }}
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script setup>
import UserInfo from "../../Component/User/UserInfo.vue";

defineProps({
    users: Array,
});

const formatDate = (date) => {
    return new Date(date).toLocaleString("en-us", {
        year: "numeric",
        month: "numeric",
        day: "numeric",
    });
};
</script>

<style></style>
