<template>
    <!-- ================= Header / Navbar ================= -->
    <header class="border-b border-gray-300 bg-white">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold tracking-wide">
                JuteLeather
            </h1>

            <nav class="space-x-6 text-sm">
                <router-link to="/" class="hover:text-black">Home</router-link>
                <router-link to="/shop" class="hover:text-black">Shop</router-link>
                <router-link to="/about" class="hover:text-black">About</router-link>
                <router-link to="/contact" class="hover:text-black">Contact</router-link>
            </nav>
        </div>
    </header>
</template>