<script setup>

import Header from "@/Components/App/Header/Header.vue";
import Footer from "@/Components/App/Footer/Footer.vue";
</script>

<template>
    <div class="bg-gray-200 min-h-screen">
        <Header />
        <div class="">
            <slot />
        </div>
        <Footer />
    </div>
</template>

<style scoped>

</style>
