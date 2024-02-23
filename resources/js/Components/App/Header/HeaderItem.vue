<script setup>

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <a class="p-3 text-sm font-bold" :href="href">
        <slot></slot>
    </a>
</template>

<style scoped>

</style>
