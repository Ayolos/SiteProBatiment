<template>
    <Head>
        <title>Accueil</title>
        <meta name="description" content="Rénov&Vous est une entreprise générale de bâtiment certifiée Qualibat RGE, regroupant divers corps de métier pour gérer des travaux de rénovation ou de construction de manière globale. Avec une expertise pluridisciplinaire incluant maçonnerie, menuiserie, électricité, plomberie, etc., nous offrons des prestations de qualité optimale à travers le Nord de la France. Que ce soit dans le secteur public ou privé, nous intervenons dans divers domaines tels que la santé, l'éducation, le commerce, et nous sommes constamment à la recherche d'innovations pour proposer des solutions flexibles à nos clients."/>
    </Head>
    <AppLayout>
        <BannerImage :url="data?.imageCollection?.items[0]?.imageAccueil?.url">
            <template #title>
                Rénover votre espace de vie intérieur...
            </template>
            <template #subtitle>
                <span class="text-curr font-bold">Rénov&Vous</span> est une entreprise générale de bâtiment certifiée Qualibat RGE, regroupant divers corps de métier pour gérer des travaux de rénovation ou de construction de manière globale. Avec une expertise pluridisciplinaire incluant maçonnerie, menuiserie, électricité, plomberie, etc., nous offrons des prestations de qualité optimale à travers le <span class="text-[#CE9931] font-bold">Nord de la France</span>. Que ce soit dans le secteur <span class="text-[#CE9931] font-bold">public ou privé</span>, nous intervenons dans divers domaines tels que la santé, l'éducation, le commerce, et nous sommes constamment à la recherche d'innovations pour proposer des solutions flexibles à nos clients.
            </template>
        </BannerImage>
        <div v-if="data" class="md:px-14 px-5 mt-20 md:mt-40 mb-20 md:mb-40 flex flex-col gap-40">
            <Caroussel :images="data.imageCollection.items.map(item => item.carrouselCollection.items.map(carouselItem => carouselItem.url)).flat()"></Caroussel>
            <Tab>
                <template #tab-1>
                    <img v-if="data?.imageCollection?.items[0].tab1?.url" :src="data?.imageCollection?.items[0].tab1?.url" alt="image de tab" class="w-[40vh] h-auto rounded-lg mx-auto mt-8"/>
                </template>
                <template #tab-2>
                    <div class="flex flex-row h-[30vh] gap-4 overflow-x-hidden">
                        <img v-if="data?.imageCollection?.items[0].tabsCollection?.items[0].url" :src="data?.imageCollection?.items[0].tabsCollection?.items[0].url" alt="image de tab" class="object-cover rounded-lg basis-1/2"/>
                        <img v-if="data?.imageCollection?.items[0].tabsCollection?.items[1].url" :src="data?.imageCollection?.items[0].tabsCollection?.items[1].url" alt="image de tab" class="object-cover rounded-lg basis-1/2"/>
                    </div>
                </template>
            </Tab>
            <BigCard></BigCard>
        </div>
    </AppLayout>
</template>
<script setup>
import {ref, onMounted, onUnmounted} from 'vue';
import BannerImage from "@/Components/App/Banner/BannerImage.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Caroussel from "@/Components/App/Caroussel/Caroussel.vue";
import Tab from "@/Components/App/Tab/Tab.vue";
import BigCard from "@/Components/App/Card/BigCard.vue";
import {useContentfulFetch} from "@/Composable/fetchContentfullApi.js";
import {Head} from '@inertiajs/vue3';

// Import other components...

const query = `{
    imageCollection{
        items {
          imageAccueil {
            url
          }
          imageCarteCollection {
            items {
              url
            }
          }
          carrouselCollection {
            items {
              url
            }
          }
          tab1 {
            url
          }
          tabsCollection {
            items {
              url
            }
          }
        }
      }
}`;


const {data, isLoading} = useContentfulFetch(query)

const carouselImages = data.value ? data.value.imageCollection.items.map(item => item.carrouselCollection.items.map(carouselItem => carouselItem.url)).flat() : [];


const isWindowBelow735 = ref(window.innerWidth < 735);

const handleResize = () => {
    isWindowBelow735.value = window.innerWidth < 735;
};

onMounted(() => {
    window.addEventListener('resize', handleResize);
});

onUnmounted(() => {
    window.removeEventListener('resize', handleResize);
});
</script>
