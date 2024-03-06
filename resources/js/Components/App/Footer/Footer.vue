<script setup>

import HeaderItem from "@/Components/App/Header/HeaderItem.vue";
import Logo from '/public/Logo.png'
</script>

<template>
    <footer class="bg-gray-200">
        <div class="w-full">
            <div class="sm:flex sm:items-center sm:justify-between px-8">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img :src="Logo" class="h-12" alt="Logo" />
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0">
                    <header-item href="/" class="text-xs">Accueil</header-item>
                    <header-item :href="route('services')" class="text-xs">Services</header-item>
                    <header-item :href="route('about')" class="text-xs">About</header-item>
                    <header-item :href="route('contact')" class="text-xs">Contact</header-item>
                </ul>
            </div>
            <hr class="my-6 border-gray-500 sm:mx-auto lg:my-8" />
            <span class="block text-sm text-center pb-5 text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="" class="hover:underline">Renov&Vous™</a>. Tout les droits sont réservé.</span>
        </div>
    </footer>
</template>

<style scoped>

</style>
