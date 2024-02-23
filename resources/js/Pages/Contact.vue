<script setup>

import AppLayout from "@/Layouts/AppLayout.vue";
import {reactive} from "vue";
import {router} from "@inertiajs/vue3";
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";

const form = reactive({
    email: '',
    subject: '',
    message: ''
})

const submit = () => {
    router.post(route('contact.send'), form)
}

</script>

<template>
    <AppLayout>
        <div class="pb-20 pt-20">
            <section class="flex justify-center items-center h-screen">
                <div class="py-8 lg:py-16 px-4 h-max">
                    <div class="pb-8 bg-curr rounded-t-xl p-8 shadow-2xl">
                        <h1 class="text-4xl font-extrabold text-center text-gray-100 drop-shadow-xl">Contactez nous</h1>
                        <p class="mt-4 italic text-center text-gray-100 dark:text-gray-400 sm:text-lg">Vous rencontrez un problème ? n'hésitez pas à nous contacter !</p>
                        <div class="flex items-center justify-center gap-4 text-xl text-gray-100 pt-6">
                            <font-awesome-icon :icon="['fa', 'envelope']" />
                            <a href="mailto:sassamanry@gmail.com">sassamanry@gmail.com</a>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-b-xl shadow-2xl">
                        <form @submit.prevent="submit" class="space-y-8">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Votre email</label>
                                <input type="email" v-model="form.email" id="email" class="shadow-sm bg-gray-100 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="pmdustfly@orange.fr" required>
                            </div>
                            <div>
                                <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sujet</label>
                                <input type="text" id="subject" v-model="form.subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-400 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="..." required>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Votre message</label>
                                <textarea id="message" v-model="form.message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-100 resize-none h-64 rounded-lg shadow-sm border border-gray-400 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Votre message..." required></textarea>
                            </div>
                            <button type="submit" class="py-3 mx-auto w-full px-5 text-sm font-medium text-center text-white rounded-lg bg-[#ce9931] sm:w-fit hover:bg-[#ae8129] focus:ring-4 focus:outline-none focus:ring-[#ae8129]">Envoyer</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </AppLayout>
</template>

<style scoped>

</style>
