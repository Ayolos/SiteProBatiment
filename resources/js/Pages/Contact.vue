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
            <section class="flex justify-center items-center">
                <div class="py-8 lg:py-16 px-4 h-max">
                    <div class="pb-8 bg-curr rounded-t-xl p-8 shadow-2xl">
                        <h1 class="text-4xl font-extrabold text-center text-gray-100 drop-shadow-xl">Contactez nous</h1>
                        <p class="mt-4 italic text-center text-gray-100 dark:text-gray-400 sm:text-lg">Vous rencontrez un problème ? n'hésitez pas à nous contacter !</p>
                        <div class="flex items-center justify-start gap-4 text-md text-gray-100 pt-6 hover:text-gray-900">
                            <font-awesome-icon :icon="['fa', 'envelope']" class="px-1 text-2xl" />
                            <a href="mailto:sassamanry@gmail.com" class="">sassamanry@gmail.com</a>
                        </div>
                        <div class="flex items-center justify-start gap-4 text-md text-gray-100 pt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                                <path fill="#0288D1" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z"></path><path fill="#FFF" d="M12 19H17V36H12zM14.485 17h-.028C12.965 17 12 15.888 12 14.499 12 13.08 12.995 12 14.514 12c1.521 0 2.458 1.08 2.486 2.499C17 15.887 16.035 17 14.485 17zM36 36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698-1.501 0-2.313 1.012-2.707 1.99C24.957 25.543 25 26.511 25 27v9h-5V19h5v2.616C25.721 20.5 26.85 19 29.738 19c3.578 0 6.261 2.25 6.261 7.274L36 36 36 36z"></path>
                            </svg>
                            <a href="https://www.linkedin.com/company/renov-vous/" class="hover:text-gray-900">RENOV'& VOUS</a>
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
