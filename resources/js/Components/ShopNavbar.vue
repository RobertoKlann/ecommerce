<script setup>
</script>

<template>
    <div>
        <nav class="bg-white border-b border-zinc-200">
            <div class="max-w-7xl mx-auto px-6 py-4">
                <div class="flex justify-between">
                    <!-- Left Side -->
                    <div class="flex items-center space-x-2  gap-10">
                        <h1 class="text-base font-medium uppercase">
                            <Link :href="route('shop')"><span style="color: rgb(90, 132, 78)"></span>Home</Link>
                        </h1>

                        <h1 class="text-base font-medium uppercase">
                            <Link :href="route('search')"><span style="color: rgb(90, 132, 78)"></span>Busca</Link>
                        </h1>

                        <h1 class="text-base font-medium uppercase">
                            <Link :href="route('users.index')"><span style="color: rgb(90, 132, 78)"></span>Corretores</Link>
                        </h1>

                        <h1 class="text-base font-medium uppercase">
                            <Link :href="route('blog.index')"><span style="color: rgb(90, 132, 78)"></span>Blog</Link>
                        </h1>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</template>
