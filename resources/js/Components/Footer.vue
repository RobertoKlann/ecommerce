<template>
    <footer class="sticky top-[100vh] h-56 mt-10 bg-zinc-800">
        <div class="w-100 boxFooter sticky top-[88vh] h-56 mt-10 bg-zinc-800">
            <div class="text-white">
                <img class="logoFooter" src="../../../public/images/logo_footer.jpg" alt="logo_footer" />
            </div>

            <div class="text-white">
                <div class="flex items-center space-x-2 gap-4 boxItem">
                    <h1 class="text-base font-medium uppercase">
                        <Link :href="route('shop')"><span style="color: rgb(90, 132, 78)"></span>Link 1</Link>
                    </h1>

                    <h1 class="text-base font-medium uppercase">
                        <Link :href="route('search')"><span style="color: rgb(90, 132, 78)"></span>Link 2</Link>
                    </h1>

                    <h1 class="text-base font-medium uppercase">
                        <Link :href="route('users.index')"><span style="color: rgb(90, 132, 78)"></span>Link 3</Link>
                    </h1>

                    <h1 class="text-base font-medium uppercase">
                        <Link :href="route('blog.index')"><span style="color: rgb(90, 132, 78)"></span>Link 4</Link>
                    </h1>
                </div>
            </div>

            <div class="text-white">
                <div class="flex items-center space-x-2 gap-4 boxItem">
                    <h1 class="text-base font-medium uppercase">
                        <Link :href="route('shop')"><span style="color: rgb(90, 132, 78)"></span>Link 1</Link>
                    </h1>

                    <h1 class="text-base font-medium uppercase">
                        <Link :href="route('search')"><span style="color: rgb(90, 132, 78)"></span>Link 2</Link>
                    </h1>

                    <h1 class="text-base font-medium uppercase">
                        <Link :href="route('users.index')"><span style="color: rgb(90, 132, 78)"></span>Link 3</Link>
                    </h1>

                    <h1 class="text-base font-medium uppercase">
                        <Link :href="route('blog.index')"><span style="color: rgb(90, 132, 78)"></span>Link 4</Link>
                    </h1>
                </div>
            </div>
        </div>
    </footer>
</template>

<script setup>
</script>

<style>
.boxFooter {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 15%;
    height: auto;
}

.boxItem {
    display: flex;
    flex-direction: column;
}

.logoFooter {
    object-fit: cover;
    width: 150px;
    border-radius: 15px;
}
</style>
