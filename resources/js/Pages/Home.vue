<template>
    <ShopLayout>
        <Head title="Shop" />

        <Banner></Banner>

        <ProductSearch :search="props.search"></ProductSearch>

        <div class="mt-8">
            <h2 class="text-center text-2xl">Produtos</h2>
            <div class="flex-1 relative pt-8 sm:px-10">
                <div>
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        <ProductCard v-for="product in products.data" :key="product.id" :product="product"></ProductCard>
                    </div>

                    <Pagination v-if="products.links.next || products.links.prev" :links="products.meta.links" :meta="products.links"></Pagination>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-center text-2xl">Categorias</h2>
            <div class="flex-1 relative pt-8 sm:px-12">
                <div class="" >
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" >
                        <div class="flex flex-col items-center justify-center h-72 relative border" v-for="category in categories" :key="category.id">
                            <div class="h-1/3 w-full p-2 pt-6">
                                <div class="flex items-start justify-between space-x-4">
                                    <div>
                                        <span class="block text-[13px] font-medium leading-4">{{ category.name }}</span>
                                        <span class="block text-xs text-zinc-500">{{ category.products_count }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-center text-2xl">Usuários</h2>
            <div class="flex-1 relative pt-8 sm:px-10">
                <div class="">
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        <div class="flex flex-col items-center justify-center h-72 relative border"  v-for="user in users" :key="user.id">
                            <div class="h-1/3 w-full p-2 pt-6">
                                <div class="flex items-start justify-between space-x-4">
                                    <div>
                                        <span class="block text-[13px] font-medium leading-4">{{ user.name }}</span>
                                        <span class="block text-xs text-zinc-500">{{ user.email }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </ShopLayout>
</template>


<script setup>
import { Inertia } from "@inertiajs/inertia";
import { ref, watch } from "vue";
import pickBy from 'lodash/pickBy'

import Banner from "@/Components/Banner.vue";
import ShopLayout from "@/Layouts/ShopLayout.vue";
import ProductCard from "@/Components/ProductCard.vue";
import ProductCategoryFilter from "@/Components/ProductFilters/ProductCategoryFilter.vue";
import ProductPriceFilter from "@/Components/ProductFilters/ProductPriceFilter.vue";
import ProductSearch from "@/Components/ProductFilters/ProductSearch.vue";
import AppliedFilters from "@/Components/ProductFilters/AppliedFilters.vue";
import SortProducts from "@/Components/ProductFilters/SortProducts.vue";
import Pagination from "@/Components/Pagination.vue";

const props = defineProps({
    products: Object,
    categories: Array,
    category: String,
    users: Array
});

const filters = ref({
    category: props.category,
    search: props.search,
    min_price: props.min_price,
    max_price: props.max_price,
    sortBy: props.sortBy,
});

watch(filters.value, value => {
    Inertia.get(route("shop"), pickBy(value), {
        preserveState: true,
        replace: true,
    });
});
</script>
