<script setup>
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";

const props = defineProps({
    url: String
})

</script>

<template>
    <div class="relative w-screen overflow-hidden shadow-2xl rounded-b-xl">
        <img :src="url" class="blur-sm object-cover w-full h-screen" alt="image de bannière">
        <div class="absolute inset-0 w-full h-full bg-black opacity-50"></div>
        <div class="absolute inset-0 flex flex-col justify-center gap-5 px-5 sm:px-[20%]">
            <h1 class="text-[#CE9931] font-bold sm:text-4xl text-2xl backdrop-sepia p-2 rounded-md">
                <slot name="title"></slot>
            </h1>
            <p class="sm:text-xl text-md text-gray-300 drop-shadow-xl">
                <slot name="subtitle"></slot>
            </p>
        </div>
        <font-awesome-icon icon="fa-arrow-down" class="absolute inset-x-1/2 bottom-0 pb-20 text-2xl text-white"></font-awesome-icon>
    </div>
</template>

<style scoped>

</style>
