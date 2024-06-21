<script setup>
import GroupItem from '@/Components/app/GroupItem.vue';
import TextInput from '@/Components/TextInput.vue';
import { ref } from 'vue';

const searchKeyword = ref('')
</script>

<template>
    <!--Group Section-->
    <div class="px-3 bg-white rounded border flex flex-col h-full overflow-hidden">
        <h2 class="text-lg font-bold mt-1">My Grops:</h2>
        <div class="pt-3">
            <TextInput :model-value="searchKeyword" placeholder="Type to search" class="w-full"/>
        </div>
        <div class="mt-2 py-1 flex-1 overflow-auto">
            <!--If scope-->
            <div v-if="false" class="text-gray-500 text-center px-3 mt-2">
                        You are not in any group yet!
            </div>
            <!--Else scope-->
            <div v-else>
                <!--group-1 -->
                <GroupItem image="https://miro.medium.com/v2/resize:fit:100/format:webp/1*SoJOoRqbFp9fvNILpl4JNw.jpeg"
                title="Laravel Developer"
                description="short description short description short description"/>
                <!--group-2 -->
                <GroupItem image="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/.NET_Core_Logo.svg/512px-.NET_Core_Logo.svg.png?20210328084203"
                title=".Net Core Developer"
                description="not so short description short description short description"/>
                <!--group-1 -->
                <GroupItem image="https://miro.medium.com/v2/resize:fit:100/format:webp/1*SoJOoRqbFp9fvNILpl4JNw.jpeg"
                title="Laravel Developer"
                description="short description short description short description"/>
                <!--group-2 -->
                <GroupItem image="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/.NET_Core_Logo.svg/512px-.NET_Core_Logo.svg.png?20210328084203"
                title=".Net Core Developer"
                description="not so short description short description short description"/>
                <!--group-1 -->
                <GroupItem image="https://miro.medium.com/v2/resize:fit:100/format:webp/1*SoJOoRqbFp9fvNILpl4JNw.jpeg"
                title="Laravel Developer"
                description="short description short description short description"/>
                <!--group-2 -->
                <GroupItem image="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/.NET_Core_Logo.svg/512px-.NET_Core_Logo.svg.png?20210328084203"
                title=".Net Core Developer"
                description="not so short description short description short description"/>
                <!--group-1 -->
                <GroupItem image="https://miro.medium.com/v2/resize:fit:100/format:webp/1*SoJOoRqbFp9fvNILpl4JNw.jpeg"
                title="Laravel Developer"
                description="short description short description short description"/>
                <!--group-2 -->
                <GroupItem image="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/.NET_Core_Logo.svg/512px-.NET_Core_Logo.svg.png?20210328084203"
                title=".Net Core Developer"
                description="not so short description short description short description"/>
                <!--group-1 -->
                <GroupItem image="https://miro.medium.com/v2/resize:fit:100/format:webp/1*SoJOoRqbFp9fvNILpl4JNw.jpeg"
                title="Laravel Developer"
                description="short description short description short description"/>
                <!--group-2 -->
                <GroupItem image="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/.NET_Core_Logo.svg/512px-.NET_Core_Logo.svg.png?20210328084203"
                title=".Net Core Developer"
                description="not so short description short description short description"/>
                <!--group-1 -->
                <GroupItem image="https://miro.medium.com/v2/resize:fit:100/format:webp/1*SoJOoRqbFp9fvNILpl4JNw.jpeg"
                title="Laravel Developer"
                description="short description short description short description"/>
                <!--group-2 -->
                <GroupItem image="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/.NET_Core_Logo.svg/512px-.NET_Core_Logo.svg.png?20210328084203"
                title=".Net Core Developer"
                description="not so short description short description short description"/>
                <!--group-1 -->
                <GroupItem image="https://miro.medium.com/v2/resize:fit:100/format:webp/1*SoJOoRqbFp9fvNILpl4JNw.jpeg"
                title="Laravel Developer"
                description="short description short description short description"/>
                <!--group-2 -->
                <GroupItem image="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/.NET_Core_Logo.svg/512px-.NET_Core_Logo.svg.png?20210328084203"
                title=".Net Core Developer"
                description="not so short description short description short description"/>
            </div>
        </div>
    </div>
</template>

<style scoped>
</style>
