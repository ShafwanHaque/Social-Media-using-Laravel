<script setup>
import FollowingItem from "@/Components/app/FollowingItem.vue";
import TextInput from "@/Components/TextInput.vue";
import { ref } from "vue";

const searchKeyword = ref("");
</script>

<template>
    <!--Following Section-->
    <div
        class="px-3 bg-white rounded border flex flex-col h-full overflow-hidden"
    >
        <h2 class="text-lg font-bold mt-1">Followings:</h2>
        <div class="pt-3">
            <TextInput
                :model-value="searchKeyword"
                placeholder="Type to search"
                class="w-full"
            />
        </div>
        <div class="mt-2 py-1 flex-1 overflow-auto">
            <!--If scope-->
            <div v-if="false" class="text-gray-500 text-center px-3 mt-2">
                You do not have any Following yet!
            </div>
            <!--Else scope-->
            <div v-else>
                <!--group-1 -->
                <FollowingItem
                    image="https://img.freepik.com/free-photo/view-3d-man-using-laptop_23-2150709796.jpg?size=626&ext=jpg"
                    name="Shafwanul Haque"
                    handle_name="skidoo"
                />
                <!--group-2 -->
                <FollowingItem
                    image="https://img.freepik.com/free-photo/3d-portrait-people_23-2150793852.jpg?size=626&ext=jpg"
                    name="Fahim Wayez"
                    handle_name="chitang"
                />
                <!--group-1 -->
                <FollowingItem
                    image="https://img.freepik.com/free-photo/view-3d-man-using-laptop_23-2150709796.jpg?size=626&ext=jpg"
                    name="Shafwanul Haque"
                    handle_name="skidoo"
                />
                <!--group-2 -->
                <FollowingItem
                    image="https://img.freepik.com/free-photo/3d-portrait-people_23-2150793852.jpg?size=626&ext=jpg"
                    name="Fahim Wayez"
                    handle_name="chitang"
                />
                <!--group-1 -->
                <FollowingItem
                    image="https://img.freepik.com/free-photo/view-3d-man-using-laptop_23-2150709796.jpg?size=626&ext=jpg"
                    name="Shafwanul Haque"
                    handle_name="skidoo"
                />
                <!--group-2 -->
                <FollowingItem
                    image="https://img.freepik.com/free-photo/3d-portrait-people_23-2150793852.jpg?size=626&ext=jpg"
                    name="Fahim Wayez"
                    handle_name="chitang"
                />
                <!--group-1 -->
                <FollowingItem
                    image="https://img.freepik.com/free-photo/view-3d-man-using-laptop_23-2150709796.jpg?size=626&ext=jpg"
                    name="Shafwanul Haque"
                    handle_name="skidoo"
                />
                <!--group-2 -->
                <FollowingItem
                    image="https://img.freepik.com/free-photo/3d-portrait-people_23-2150793852.jpg?size=626&ext=jpg"
                    name="Fahim Wayez"
                    handle_name="chitang"
                />
                <!--group-1 -->
                <FollowingItem
                    image="https://img.freepik.com/free-photo/view-3d-man-using-laptop_23-2150709796.jpg?size=626&ext=jpg"
                    name="Shafwanul Haque"
                    handle_name="skidoo"
                />
                <!--group-2 -->
                <FollowingItem
                    image="https://img.freepik.com/free-photo/3d-portrait-people_23-2150793852.jpg?size=626&ext=jpg"
                    name="Fahim Wayez"
                    handle_name="chitang"
                />
                <!--group-1 -->
                <FollowingItem
                    image="https://img.freepik.com/free-photo/view-3d-man-using-laptop_23-2150709796.jpg?size=626&ext=jpg"
                    name="Shafwanul Haque"
                    handle_name="skidoo"
                />
                <!--group-2 -->
                <FollowingItem
                    image="https://img.freepik.com/free-photo/3d-portrait-people_23-2150793852.jpg?size=626&ext=jpg"
                    name="Fahim Wayez"
                    handle_name="chitang"
                />
                <!--group-1 -->
                <FollowingItem
                    image="https://img.freepik.com/free-photo/view-3d-man-using-laptop_23-2150709796.jpg?size=626&ext=jpg"
                    name="Shafwanul Haque"
                    handle_name="skidoo"
                />
                <!--group-2 -->
                <FollowingItem
                    image="https://img.freepik.com/free-photo/3d-portrait-people_23-2150793852.jpg?size=626&ext=jpg"
                    name="Fahim Wayez"
                    handle_name="chitang"
                />
                <!--group-1 -->
                <FollowingItem
                    image="https://img.freepik.com/free-photo/view-3d-man-using-laptop_23-2150709796.jpg?size=626&ext=jpg"
                    name="Shafwanul Haque"
                    handle_name="skidoo"
                />
                <!--group-2 -->
                <FollowingItem
                    image="https://img.freepik.com/free-photo/3d-portrait-people_23-2150793852.jpg?size=626&ext=jpg"
                    name="Fahim Wayez"
                    handle_name="chitang"
                />
            </div>
        </div>
    </div>
</template>

<style scoped></style>
