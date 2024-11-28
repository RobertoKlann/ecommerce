<template>
    <ShopLayout>
        <Head title="Artigos" />

        <div class="max-w-2xl mx-auto sm:flex sm:space-x-8 mt-8">
            <div class="mt-6 sm:mt-0">
                <h3 class="text-2xl font-medium mb-1">Listagem de Artigos</h3>

                <div v-for="article in articles" :key="article.id">
                    <p class="text-xs text-zinc-500 mb-8">{{ article.title }}</p>
                    <p class="text-xs text-zinc-500 mb-8">{{ article.desc }}</p>
                    <p class="text-xs text-zinc-500 mb-8">{{ article.slug }}</p>
                </div>
            </div>
        </div>
    </ShopLayout>
</template>


<script setup>
import ShopLayout from "@/Layouts/ShopLayout.vue";
import { Inertia } from "@inertiajs/inertia";
import { ref } from "vue";
import { usePage } from '@inertiajs/inertia-vue3'

const props = defineProps({
    articles: Array,
});

</script>
