<script setup>

import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";
import Banner from '/public/Banner.jpeg'


const props = defineProps({
    url: String,
    type: {
        type: String,
    },
    icon: {
        type: String,
        required: true,
    },
});

</script>

<template>
    <div v-if="type === 'normal'" class="bg-white border border-gray-200 rounded-lg shadow">
        <div>
            <img class="rounded-t-lg w-full h-48 object-cover" :src="url" alt="images de la carte" />
        </div>
        <div class="p-5">
            <div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <slot name="title"></slot>
                </h5>
            </div>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <slot name="description"></slot>
            </p>
        </div>
    </div>
</template>

<style scoped>

</style>
