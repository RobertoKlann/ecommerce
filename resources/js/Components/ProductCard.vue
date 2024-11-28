<script setup>
import { Inertia } from "@inertiajs/inertia";
import { usePage } from '@inertiajs/inertia-vue3'

const props = defineProps({
    product: Object,
});

const inWhishlist = (id) => {
    return usePage().props.value.whishlist.find(product => { return product.id === id }) ? true : false;
}

const toggleWhishlist = () => {
    Inertia.post(route("whishlist.toggle", { id: props.product.id }));
};

const productImage = () => {
    let preview = props.product.images.find(image => {
        return image.is_preview;
    });

    return '/images/' + preview.url;
}
</script>

<template>
    <div class="flex flex-col items-center justify-center h-72 relative border">
        <div class="h-2/3 w-full">
            <Link :href="route('product.show', { slug: product.slug })">
                <img :src="productImage()" alt="product_image" class="w-full h-full object-cover">
            </Link>
        </div>

        <div class="h-1/3 w-full p-2 pt-6">
            <div class="flex items-start justify-between space-x-4">
                <div>
                    <span class="block text-[13px] font-medium leading-4">{{ product.name }}</span>
                    <span class="block text-xs text-zinc-500">{{ product.category.name }}</span>
                </div>
                <span class="whitespace-nowrap text-[13px]"><span class="font-medium text-c-green-600">€</span>{{ product.price }}</span>
            </div>
        </div>
    </div>
</template>
