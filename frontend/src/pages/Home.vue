<script setup lang="ts">
import type router from '../routes';

</script>

<template>

    <!-- ================= Hero Section ================= -->
    <section class="bg-[#f7f5f2]">
        <div class="max-w-7xl mx-auto px-4 py-20 grid md:grid-cols-2 gap-10 items-center">

            <div>
                <h2 class="text-4xl font-bold mb-4 leading-tight">
                    Premium Jute & Leather Bags
                </h2>
                <p class="text-gray-600 mb-6">
                    Crafted with natural jute and premium leather for timeless style,
                    durability, and sustainability.
                </p>
                <router-link to="/shop"
                    class="inline-block bg-black text-white px-6 py-3 text-sm rounded hover:bg-gray-800">
                    Shop Now
                </router-link>
            </div>

            <div>
                <img src="https://images.unsplash.com/photo-1494578151111-d35ec4c84e2b?q=80&w=1173&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Bag Collection" class="rounded-lg w-full object-cover" />
            </div>

        </div>
    </section>

    <!-- ================= Featured Products ================= -->
    <section class="max-w-7xl mx-auto px-4 py-16">
        <h3 class="text-2xl font-semibold mb-10 text-center">
            Featured Bags
        </h3>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">

            <!-- Product Card -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="relative overflow-hidden rounded-xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1663776376262-1d12c353f789?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Product image"
                        class="w-full h-64 md:h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-all duration-300"></div>
                </div>
                <h4 class="font-medium">Jute Hand Bag</h4>
                <p class="text-sm text-gray-600">Natural jute with leather handle</p>
                <p class="mt-2 font-semibold">$45</p>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <div class="relative overflow-hidden rounded-xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1663776376262-1d12c353f789?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Product image"
                        class="w-full h-64 md:h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-all duration-300"></div>
                </div>
                <h4 class="font-medium">Leather Office Bag</h4>
                <p class="text-sm text-gray-600">Premium leather finish</p>
                <p class="mt-2 font-semibold">$85</p>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <div class="relative overflow-hidden rounded-xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1663776376262-1d12c353f789?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Product image"
                        class="w-full h-64 md:h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-all duration-300"></div>
                </div>
                <h4 class="font-medium">Jute Shoulder Bag</h4>
                <p class="text-sm text-gray-600">Eco-friendly & stylish</p>
                <p class="mt-2 font-semibold">$55</p>
            </div>

        </div>
    </section>

    <!-- ================= Why Choose Us ================= -->
    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h3 class="text-2xl font-semibold mb-10">
                Why Choose Our Bags
            </h3>

            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h4 class="font-medium mb-2">Eco-Friendly</h4>
                    <p class="text-sm text-gray-600">
                        Made with sustainable jute materials.
                    </p>
                </div>

                <div>
                    <h4 class="font-medium mb-2">Premium Quality</h4>
                    <p class="text-sm text-gray-600">
                        High-grade leather with strong stitching.
                    </p>
                </div>

                <div>
                    <h4 class="font-medium mb-2">Minimal Design</h4>
                    <p class="text-sm text-gray-600">
                        Simple, elegant, and practical designs.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>