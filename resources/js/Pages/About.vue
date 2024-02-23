<script setup>

import AppLayout from "@/Layouts/AppLayout.vue";
import Banner from '/public/Banner.jpeg'
import Caroussel from "@/Components/App/Caroussel/Caroussel.vue";
import {useContentfulFetch} from "@/Composable/fetchContentfullApi.js";

const query = `{
    pageAProposCollection{
        items{
            mainImage{url}
            imageSection{url}
            carrouselCollection{items{url}}
        }
    }
}`;


const {data, isLoading} = useContentfulFetch(query)
</script>

<template>
<AppLayout v-if="data">
    <section class="h-[90vh] flex md:flex-row flex-col md:gap-0 gap-14 justify-center items-center">
        <div class="flex flex-col gap-5 w-[50vh] pt-9  px-10">
            <h1 class="font-bold text-3xl md:text-5xl pb-8">A propos de nous</h1>
            <h1 class="font-bold text-xl ">RENOV & VOUS</h1>
            <p class="text-gray-500 italic">Entreprise générale de bâtiment certifiée Qualibat RGE, <span class="text-curr font-bold">Rénov&Vous</span> est une organisation qui regroupe en son sein différents corps de métier. Grâce aux diverses compétences qu’elle rassemble, elle est ainsi capable de gérer des <span class="text-curr font-bold">travaux de rénovation ou de construction </span> du début à la fin. Pluridisciplinaire, l’entreprise générale du bâtiment offre de multiples prestations: maçonnerie, menuiserie, isolation, électricité, plomberie, chauffage, peinture, revêtements de sols, etc. </p>
        </div>
        <img class="rounded w-[40vw] shadow-2xl" :src="data?.pageAProposCollection?.items[0]?.mainImage?.url" alt="Extra large avatar">
    </section>
    <hr class="border-1 border-gray-300">
    <section class="h-full flex flex-col gap-14 items-start p-5 lg:p-20 mb-20">
        <h1 class="font-bold text-3xl md:text-5xl pt-10">Notre Engagement</h1>
        <div class="w-full h-full md:flex-row flex-col flex gap-16 justify-center items-center">
            <img :src="data?.pageAProposCollection?.items[0]?.imageSection.url" class="w-1/2 overflow-clip rounded-xl" />
            <div class="basis-1/2 gap-2 flex flex-col">
                <h1 class="font-bold text-xl">POUR <span class="text-curr font-bold">RENOV&VOUS</span> CHAQUE PROJET EST UNE CHANCE.</h1>
                <p class="">
                    Une chance de construire l’avenir, l’opportunité d’accompagner un territoire, d’agir durablement au profit de celles et ceux qui y vivent ou qui y travaillent. Parce que chaque projet est porteur d’un potentiel d’avenir, nos équipes travaillent au quotidien avec nos clients et nos partenaires pour imaginer et construire des solutions ambitieuses en matière de développement durable. Si chacun de nos projets est unique, notre manière de construire nos opérations reste fidèle à nos valeurs:<span class="text-curr font-bold">Responsable et Engagé</span>.
                </p>
            </div>
        </div>
    </section>
</AppLayout>
</template>

<style scoped>

</style>
