<script setup>
import { onMounted, ref } from 'vue';

const model = defineModel({
    modelValue:{
        type: String,
        required: true,
    },
    placeholder: String
});

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input
    class=" border-gray-300 bg-white text-gray-700 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
    v-model="model"
    ref="input"
    :placeholder="placeholder"
/>
</template>
