<script setup>
import { Head, Link } from "@inertiajs/vue3";
import GroupList from "@/Components/app/GroupList.vue"; // Ensure this path is correct
import FollowingList from "@/Components/app/FollowingList.vue";
import CreatePost from "@/Components/app/CreatePost.vue";
import PostList from "@/Components/app/PostList.vue";
defineProps({});
</script>

<template>
    <Head title="Social Media Web Site" />
    <div class="grid lg:grid-cols-12 gap-3 h-full">
        <!--Group Section-->
        <div class="lg:col-span-3 py-3 px-3 lg:order-1 h-[245px] lg:h-[940px] overflow-hidden">
            <GroupList />
        </div>
        <!--Followings Section-->
        <div class="lg:col-span-3 py-3 px-3 lg:order-3 h-[245px] lg:h-[940px] overflow-hidden">
            <FollowingList />
        </div>
        <!--Post Section-->
        <div class="lg:col-span-6 lg:order-2 h-full overflow-auto">
            <CreatePost />
            <PostList />
        </div>

    </div>
</template>

<style></style>
