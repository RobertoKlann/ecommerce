<template>
    <ShopLayout>
        <Head title="Usuários" />

        <div class="max-w-2xl mx-auto sm:flex sm:space-x-8 mt-8">
            <div class="mt-6 sm:mt-0">
                <h3 class="text-2xl font-medium mb-1">Listagem de Usuários</h3>

                <div v-for="user in users" :key="user.id">
                    <p class="text-xs text-zinc-500 mb-8">{{ user.name }}</p>
                    <p class="text-xs text-zinc-500 mb-8">{{ user.email }}</p>
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
    users: Array,
});

</script>
