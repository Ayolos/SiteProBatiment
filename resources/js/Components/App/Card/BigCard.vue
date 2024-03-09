<script setup>
import macon from '/public/macon.png'
import couvreur from '/public/materiel.png'
import menuisier from '/public/menuisier.png'
import plaquiste from '/public/platrage.png'
import electricien from '/public/electricien.png'
import plombier from '/public/plombier.png'

</script>

<template>
    <div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2 bg-white dark:bg-gray-800">
        <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Maçon</h3>
                <img :src="macon" alt="image icon maçon" class="w-16 mx-auto pt-6">
                <p class="my-4 text-justify">La <span class="text-[#CE9931] font-bold">maçonnerie</span>, ce n’est pas seulement la réalisation des fondations. C’est également la <span class="text-[#CE9931] font-bold">construction de terrasses</span>, de murets, l'ouverture de murs porteurs…</p>
            </blockquote>
        </figure>
        <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Couvreur</h3>
                <img :src="couvreur" alt="image icon couvreur" class="w-16 mx-auto pt-6">
                <p class="my-4 text-justify">Profitez d’une toiture comme neuve grâce à la restauration de votre <span class="text-[#CE9931] font-bold">couverture</span> de la zinguerie. Gagnez en luminosité avec la pose de fenêtres de toit. "</p>
            </blockquote>
        </figure>
        <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 md:rounded-es-lg md:border-b-0 md:border-e dark:bg-gray-800 dark:border-gray-700">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Menuisier</h3>
                <img :src="menuisier" alt="image icon menuisier" class="w-16 mx-auto pt-6">
                <p class="my-4 text-justify">Remplacer son ancien portail rouillé par un portail moderne. Choisir une porte d’entrée en aluminium pour sa sécurité… On vous conseille sur les <span class="text-[#CE9931] font-bold">menuiseries</span>.</p>
            </blockquote>
        </figure>
        <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-gray-200 rounded-b-lg md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Plaquiste</h3>
                <img :src="plaquiste" alt="image icon plaquiste" class="w-16 mx-auto pt-6">
                <p class="my-4 text-justify">Construire vite et efficacement, c'est possible avec la <span class="text-[#CE9931] font-bold">plâtrerie</span>. Avec notre équipe de plaquistes, aménagez votre intérieur comme vous le souhaitez. Avec notre entreprise, l'agencement n’a plus de limite </p>
            </blockquote>
        </figure>
        <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-t border-gray-200 rounded-t-none md:rounded-bl-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Électricien</h3>
                <img :src="electricien" alt="image icon électricien" class="w-16 mx-auto pt-6">
                <p class="my-4 text-justify">Remise aux normes des <span class="text-[#CE9931] font-bold">installations électriques</span> présentes, installation de la domotique, de systèmes de sécurité, de <span class="text-[#CE9931] font-bold">bornes électriques pour voitures…</span> Il est temps de nous contacter !</p>
            </blockquote>
        </figure>
        <figure class="flex flex-col items-center justify-center p-8 text-center bg-white rounded-b-xl md:rounded-br-xl border-t border-gray-200 md:rounded-b-lg dark:bg-gray-800 dark:border-gray-700">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Plombier</h3>
                <img :src="plombier" alt="image icon plombier" class="w-16 mx-auto pt-6">
                <p class="my-4 text-justify">Besoin d'un nouveau réseau d’alimentation en eau. Besoin d’un dépannage. Besoin d’installer un plancher chauffant. Pour tous vos besoins en <span class="text-[#CE9931] font-bold">plomberie et chauffage</span>, nous sommes là.</p>
            </blockquote>
        </figure>
    </div>

</template>

<style scoped>

</style>
