<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'

defineProps({
    post: Object,
    open: Boolean
})

function isImage(attachment){
    const mime = attachment.mime.split('/')
    return mime[0].toLowerCase() == 'image'
}
//Count word insted character for more logical render
function truncateText(text, wordLimit) {
    const words = text.split(' ');
    if (words.length > wordLimit) {
        return words.slice(0, wordLimit).join(' ') + '...';
    }
    return text;
}
</script>

<template>
    <!--Post Item-->
    <div class="bg-white border rounded p-4 mb-2 hover:bg-white">

        <!--Head Section of post-->
        <div class="flex items-center gap-1 mb-2">
            <a href="javascript:void(0)">
                <img :src="post.user.avatar" class="w-[38px] h-[38px] rounded-full border-2 transition-all hover:border-indigo-500"/>
            </a>
            <div>
                <h4 class="font-bold text-sm">
                    <a href="javascript:void(0)" class="hover:underline ">
                        {{ post.user.name }}
                    </a>
                    <template v-if="post.group">
                        >
                        <a href="javascript:void(0)" class="hover:underline ">{{ post.group.name }}</a>
                    </template>
                </h4>
                <small class="text-gray-500 text-xs">{{ post.created_at }}</small>
            </div>
        </div>

        <!--Body Section post-->
        <div>
            <Disclosure v-slot="{ open }">
                <div v-if="!open" v-html="truncateText(post.body, 50)" class="text-sm"></div>
                <DisclosurePanel >
                    <div v-html="post.body" class="text-sm"/>
                </DisclosurePanel>
                <div class="flex justify-end">
                    <DisclosureButton class="text-indigo-500 text-xs hover:underline">
                        {{ open ? 'Read Less' : 'Read More' }}
                    </DisclosureButton>
                </div>
            </Disclosure>
        </div>

        <!--attachments Section-->
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 mt-4 mb-4">
            <div v-for="attachment of post.attachments" class="relative  text-indigo-500 group">
                <!--download icon-->
                <button class="w-8 h-8 bg-transparent absolute right-2 top-2 cursor-pointer opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>
                </button>
                <img v-if="isImage(attachment)" :src="attachment.url"
                class="object-cover aspect-square"/>
                <div v-else class="aspect-square bg-indigo-50 flex flex-col items-center justify-center text-gray-500 ">
                    <!--file icon-->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg>
                     {{ attachment.name }}
                </div>
            </div>
        </div>

        <!--footer Section-->
        <div class="flex items-baseline">
            <button class="rounded-full bg-indigo-400 mr-5 pr-2 pl-2 pt-0.5 pb-0.5 hover:text-white flex ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                </svg>
                Like
            </button>
            <button class="rounded-full bg-indigo-400 pr-2 pl-2 pt-0.5 pb-0.5 hover:text-white flex ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                </svg>
                Comment
            </button>
        </div>
    </div>
</template>

<style scoped></style>
