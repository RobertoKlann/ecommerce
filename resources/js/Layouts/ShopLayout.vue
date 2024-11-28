<template>
    <div>
        <div class="min-h-screen bg-white">
            <ShopNavbar />

            <transition name="list">
                <FlashErrorMessage v-if="$page.props.flash.error"></FlashErrorMessage>
            </transition>

            <!-- Page Content -->
            <main class="max-w-7xl mx-auto px-6 md:px-0">
                <slot />
            </main>

            <Footer />
        </div>
    </div>
</template>

<script setup>
import ShopNavbar from "@/Components/ShopNavbar.vue";
import Footer from "@/Components/Footer.vue";
import FlashErrorMessage from '@/Components/FlashErrorMessage.vue'
</script>
