<script setup>
import { initFlowbite } from 'flowbite'
import {onMounted} from "vue";
import logo from "/public/Logo.png";

onMounted(() => {
    initFlowbite();
})
</script>

<template>
    <nav class="z-50 bg-gray-100 w-full top-0 left-0 sticky">
        <div class="max-w-screen-xl flex flex-wrap items-center md:justify-around justify-between gap-8 mx-auto p-3">
            <a :href="route('home')" class="flex items-center w-max gap-2">
                <img :src="logo" alt="Image" class="w-10"/>
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Renov&vous</span>
            </a>
            <button
                data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-black rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden h-screen md:h-full w-full md:block md:w-auto" id="navbar-default">
                <ul class="flex md:text-sm text-2xl text-center flex-col md:gap-4 gap-2 p-2 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    <li>
                        <a
                            :class="['home' === route().current() ? 'md:text-darkGreen text-[#ce9931]' : '']"
                            :href="route('home')" class="block py-2 pl-3 pr-4 rounded hover:text-gray-400 md:bg-transparent font-bold md:p-0">Accueil</a>
                    </li>
                    <li>
                        <a :class="['services' === route().current() ? 'md:text-darkGreen text-[#ce9931]' : '']"
                           :href="route('services')" class="block py-2 pl-3 pr-4 rounded hover:text-gray-400 md:bg-transparent font-bold md:p-0">Services</a>
                    </li>
                    <li>
                        <a :class="['about' === route().current() ? 'md:text-darkGreen text-[#ce9931]' : '']"
                           :href="route('about')" class="block py-2 pl-3 pr-4 rounded hover:text-gray-400 md:bg-transparent font-bold md:p-0">A Propos</a>
                    </li>
                    <li>
                        <a :class="['contact' === route().current() ? 'md:text-darkGreen text-[#ce9931]' : '']"
                           :href="route('contact')" class="block py-2 pl-3 pr-4 rounded hover:text-gray-400 md:bg-transparent font-bold md:p-0">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</template>

<style scoped>

</style>
