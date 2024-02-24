<template>
    <div class="carousel relative w-full sm:h-[35vh] overflow-hidden rounded-xl">
            <div class="slide-container w-full flex flex-row" :style="{ transform: `translateX(-${currentIndex * 100}%)` }">
                <div v-for="(image, index) in visibleImages" :key="index" class="slide w-full shrink-0">
                    <img :src="image" alt="carousel-image" class="object-cover md:w-full h-full">
                </div>
            </div>
        <button @click="prevSlide" class="nav-btn rounded-full left-2 top-1/2 transform -translate-y-1/2 absolute px-4 py-2 bg-gray-300 text-gray-700">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button @click="nextSlide" class="nav-btn rounded-full right-2 top-1/2 transform -translate-y-1/2 absolute px-4 py-2 bg-gray-300 text-gray-700">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';

const props = defineProps({
    images: Array,
});

const currentIndex = ref(0);
let timer;

const groupedImages = [];
for (let i = 0; i < props.images.length; i += 3) {
    groupedImages.push(props.images.slice(i, i + 1));
}
const nextSlide = () => {
    currentIndex.value = (currentIndex.value + 1) % props.images.length;
    resetTimer();
};

const prevSlide = () => {
    currentIndex.value = (currentIndex.value - 1 + props.images.length) % props.images.length;
    resetTimer();
};

const resetTimer = () => {
    clearInterval(timer);
    timer = setInterval(nextSlide, 3000);
};

onMounted(() => {
    resetTimer();
});

onBeforeUnmount(() => {
    clearInterval(timer);
});

const visibleImages = ref([]);

onMounted(() => {
    visibleImages.value = props.images.slice(0, 3);
});

</script>

<style>

.slide-container {
    transition: transform 0.5s ease;
}
.carousel {
    display: flex;
    align-items: center;
    justify-content: center;
}

.nav-btn {
    /* Your button styles */
}

/* Center the image */
img {
    object-fit: contain;
}
</style>
