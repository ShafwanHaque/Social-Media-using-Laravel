<script setup>
import { ref } from 'vue';


const postCreating = ref(false)
</script>

<template>
    <!--Create Post-->
    <div class="my-3 py-2 px-2 bg-white rounded border">
        <div @click="postCreating = true" class="py-3 px-2 text-gray-500 border border-indigo-300 rounded mb-3">
            Click here to create new post
        </div>

        <div v-if="postCreating" class="flex gap-2 justify-between">
            <!--Attach File-->
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 relative">
                Attach File
                <input type="file" class="absolute left-0 right-0 top-0 bottom-0 opacity-0">
            </button>
            <!--Submit-->
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Submit
            </button>

        </div>
    </div>
</template>

<style scoped></style>
