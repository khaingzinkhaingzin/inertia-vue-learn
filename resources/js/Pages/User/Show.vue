<template>
    <UserInfo :user="user"></UserInfo>
</template>

<script setup>
import Layout from "../../Layout/Layout.vue";
import UserInfo from "../../Component/User/UserInfo.vue";
defineOptions({ layout: Layout });
defineProps({
    user: Object,
});
</script>

<style></style>
