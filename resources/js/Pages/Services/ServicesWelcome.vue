<script setup>
import Banner from '/public/Banner.jpeg'
import AppLayout from "@/Layouts/AppLayout.vue";
import CardInfo from "@/Components/App/Card/CardInfo.vue";
import Caroussel from "@/Components/App/Caroussel/Caroussel.vue";
import {onMounted, onUnmounted, ref} from "vue";
import {useContentfulFetch} from "@/Composable/fetchContentfullApi.js";

const query = `{
   pageServicesCollection{
    items{
      imageCarteCollection{
        items{
          url
        }
      }
      carrouselCollection{items{url}}
      galleriesCollection{items{url}}
    }
  }
}`;


const {data, isLoading} = useContentfulFetch(query)


const isWindowBelow735 = ref(window.innerWidth < 1000);

const handleResize = () => {
    isWindowBelow735.value = window.innerWidth < 1000;
};

onMounted(() => {
    window.addEventListener('resize', handleResize);
});

onUnmounted(() => {
    window.removeEventListener('resize', handleResize);
});
</script>

<template>
    <AppLayout v-if="data">
        <div class="md:pt-20 md:px-20 p-8">
            <h1 class="text-3xl font-bold pb-16">Découvrer nos différents services</h1>
            <div class="flex lg:flex-row flex-col gap-10">
                <CardInfo icon="fa-user-secret" class="basis-1/3" type="normal" :url="data?.pageServicesCollection?.items[0]?.imageCarteCollection?.items[0].url">
                    <template #title>
                        CONSTRUCTION
                    </template>
                    <template #description>
                        Vous avez le projet d’une nouvelle construction ? Confiez-le-nous, de la conception à la finition ! Nous appliquons toute notre expertise dans la réalisation de nouvelles constructions aux normes, grâce à une équipe pluridisciplinaire et notre entreprise certifiée Qualibat RGE !                    </template>
                </CardInfo>
                <CardInfo icon="fa-user-secret" class="basis-1/3" type="normal" :url="data?.pageServicesCollection?.items[0]?.imageCarteCollection?.items[1].url">
                    <template #title>
                        EXTENSION
                    </template>
                    <template #description>
                        Besoin d'espace supplémentaire? Notre équipe spécialisée en extensions de bâtiments est là pour vous aider à agrandir votre maison ou votre entreprise. De la conception à la construction, nous travaillons en étroite collaboration avec vous pour créer des extensions fonctionnelles et esthétiques qui répondent à vos besoins spécifiques. Découvrez comment nous pouvons transformer votre espace existant en quelque chose de nouveau et de remarquable.                    </template>
                </CardInfo>
                <CardInfo icon="fa-user-secret" class="basis-1/3" type="normal" :url="data?.pageServicesCollection?.items[0]?.imageCarteCollection?.items[2].url">
                    <template #title>
                        RENOVATION INTERIEURE
                    </template>
                    <template #description>
                        Le confort est le maître mot dans une maison. Afin d’y vivre sereinement, notre équipe d’experts vous accompagne dans tous vos projets de rénovation intérieure. Peinture, rénovation de plomberie et d’électricité, isolation thermique et acoustique, rénovation de cuisine et salle de bain, découvrez tous les services que vous propose notre entreprise certifiée Qualibat RGE !                    </template>
                </CardInfo>
            </div>
            <section class="py-28">
                <Caroussel :images="data?.pageServicesCollection?.items.map(item => item.carrouselCollection.items.map(carouselItem => carouselItem.url)).flat()"></Caroussel>
                <div class="pt-24">
                    <h4 class="text-2xl font-bold pb-4">Rénov&Vous: Votre Partenaire de Confiance pour la Construction et la Rénovation Immobilière</h4>
                    <p class="mb-3 text-gray-500 dark:text-gray-400">Pour la construction de votre maison, faites confiance à <span class="text-curr font-bold">Rénov&Vous</span> entreprise spécialisée dans les travaux de gros œuvre. Nous effectuons les <span class="text-curr font-bold">travaux de toiture et couverture</span>, deux éléments essentiels pour garantir l’intégrité de votre maison. </p>
                    <p class="mb-3 text-gray-500 dark:text-gray-400">Nos artisans expérimentés mettent leur savoir-faire à votre service pour des réalisations soignées et durables. Nous vous proposons également des solutions adaptées en matière de fondation, de terrassement ou encore pour l’élévation de vos murs. Notre objectif est de réaliser votre projet, en assurant la solidité et la durabilité de la construction.</p>
                    <p class="mb-3 text-gray-500 dark:text-gray-400"><span class="text-curr font-bold">Rénov&Vous</span> réalise aussi des rénovations immobilières. Nos artisans, qui ont chacun leur domaine d’expertise, sont fiers de leur travail et fournissent des services de qualité à nos clients. Nous sommes également spécialisés dans <span class="text-curr font-bold">les extensions et agrandissements de maison</span>. Nous travaillons avec des matériaux de qualité supérieure pour garantir la longévité de nos réalisations.  </p>
                </div>
            </section>
            <section class="pb-20">
                <h4 class="text-4xl font-bold dark:text-white pb-16">Nos travaux</h4>
                <div class="grid grid-cols-1 aspect-square md:grid-cols-3 gap-4">
                    <div v-for="i in data?.pageServicesCollection?.items[0]?.galleriesCollection?.items" class="object-cover">
                        <img class="h-auto max-w-full rounded-lg h-full aspect-square object-cover" :src="i.url" alt="">
                    </div>
                </div>
            </section>
        </div>

    </AppLayout>
</template>

<style scoped>

</style>
