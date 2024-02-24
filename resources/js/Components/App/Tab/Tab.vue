<template>
    <div class="md:flex">
        <!-- Tab navigation -->
        <ul class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">
            <!-- Profile Tab -->
            <li>
                <button :class="{ 'bg-curr text-white': isActiveTab('profile'), 'hover:text-gray-900 bg-gray-50 hover:bg-gray-100': !isActiveTab('profile') }" class="inline-flex items-center px-4 py-3 rounded-lg w-full" aria-current="page" @click="setActiveTab('profile')">
                    Rénovation Intérieure
                </button>
            </li>
            <!-- Add another tab -->
            <li>
                <button :class="{ 'bg-curr text-white': isActiveTab('dashboard'), 'hover:text-gray-900 bg-gray-50 hover:bg-gray-100': !isActiveTab('dashboard') }" class="inline-flex items-center px-4 py-3 rounded-lg w-full" @click="setActiveTab('dashboard')">
                    Rénovation complète
                </button>
            </li>
<!--            <li>
                <button :class="{ 'bg-curr text-white': isActiveTab('test'), 'hover:text-gray-900 bg-gray-50 hover:bg-gray-100': !isActiveTab('test') }" class="inline-flex items-center px-4 py-3 rounded-lg w-full" @click="setActiveTab('test')">
                    Rénovation Complète
                </button>
            </li>-->
            <!-- Add one more tab here -->
        </ul>

        <!-- Content associated with tabs -->
        <div ref="contentTab" class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full">
            <!-- Profile Tab Content -->
            <div v-if="activeTab === 'profile'">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Rénovation intérieure</h3>
                <p class="mb-2"><span class="text-[#CE9931] font-bold">Rénov&Vous</span> intervient également sur des <span class="text-[#CE9931] font-bold">projets de rénovation et de restructuration de bâtiments existants</span>, en proposant des solutions sur mesure pour réhabiliter le patrimoine tout en répondant aux attentes environnementales et en respectant les contraintes techniques.
                </p>
                <slot name="tab-1">

                </slot>
            </div>
            <!-- Dashboard Tab Content -->
            <div v-if="activeTab === 'dashboard'">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Rénovation complète</h3>
                    <slot name="tab-2"></slot>
                <div class="w-full xl:flex-row flex-col gap-4 flex justify-center">
                </div>
            </div>
            <!-- Add content sections for the new tab -->
<!--            <div v-if="activeTab === 'test'">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Construction</h3>
                <p class="mb-2">Pour une rénovation complète de votre domicile, notre équipe vous accompagne de A à Z. Des travaux de plomberie à l'aménagement intérieur, une expertise globale pour un résultat final harmonieux.</p>
            </div>-->
        </div>
    </div>
</template>

<script setup>
import { ref} from "vue";
import { initFlowbite } from "flowbite";

const activeTab = ref("profile");

const setActiveTab = (tabName) => {
    activeTab.value = tabName;
};
const isActiveTab = (tabName) => {
    return activeTab.value === tabName;
};

initFlowbite();
</script>

<style scoped>
/* Add your styles here */
</style>
