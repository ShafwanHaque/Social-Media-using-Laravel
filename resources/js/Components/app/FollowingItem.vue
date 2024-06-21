<script setup>
defineProps({
    image: String,
    name: String,
    handle_name: String,
});
</script>

<template>
    <!--group-1 -->
    <div class="mb-3 cursor-pointer hover:bg-gray-200 rounded-xl">
        <div class="flex items-start gap-3 mt-3">
            <img
                :src="image"
                class="w-[48px] h-[48px] rounded-full object-cover"
            />
            <div class="flex items-baseline space-x-2 mt-2">
                <h3 class="font-black text-md">{{ name }}</h3>
                <div class="text-sm text-gray-500">({{ handle_name }})</div>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
