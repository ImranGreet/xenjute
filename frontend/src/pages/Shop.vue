<template>


    <!-- ================= Page Title ================= -->
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 py-12 text-center">
            <h2 class="text-3xl font-bold mb-2">Our Collection</h2>
            <p class="text-gray-600">
                Explore our jute and premium leather bags
            </p>
        </div>
    </section>

    <!-- ================= Filters ================= -->
    <section class="max-w-7xl mx-auto px-4 py-8">
        <div class="flex flex-wrap gap-3 justify-center text-sm">
            <button class="px-4 py-2 border rounded-full bg-black text-white">
                All
            </button>
            <button class="px-4 py-2 border rounded-full hover:bg-gray-100">
                Jute Bags
            </button>
            <button class="px-4 py-2 border rounded-full hover:bg-gray-100">
                Leather Bags
            </button>
            <button class="px-4 py-2 border rounded-full hover:bg-gray-100">
                Office Bags
            </button>
        </div>
    </section>

    <!-- ================= Products Grid ================= -->
    <section class="max-w-7xl mx-auto px-4 pb-16">
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

            <!-- Product Card -->
            <div class="border rounded-lg p-4 hover:shadow-sm transition">
                <img src="https://via.placeholder.com/300x250" alt="" class="rounded mb-4">
                <h3 class="font-medium">Jute Hand Bag</h3>
                <p class="text-sm text-gray-600">Natural jute with leather strap</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="font-semibold">$45</span>
                    <a href="product.html" class="text-sm underline">
                        View
                    </a>
                </div>
            </div>

            <div class="border rounded-lg p-4 hover:shadow-sm transition">
                <img src="https://via.placeholder.com/300x250" alt="" class="rounded mb-4">
                <h3 class="font-medium">Leather Office Bag</h3>
                <p class="text-sm text-gray-600">Premium leather finish</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="font-semibold">$85</span>
                    <a href="product.html" class="text-sm underline">
                        View
                    </a>
                </div>
            </div>

            <div class="border rounded-lg p-4 hover:shadow-sm transition">
                <img src="https://via.placeholder.com/300x250" alt="" class="rounded mb-4">
                <h3 class="font-medium">Jute Shoulder Bag</h3>
                <p class="text-sm text-gray-600">Eco-friendly daily use</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="font-semibold">$55</span>
                    <a href="product.html" class="text-sm underline">
                        View
                    </a>
                </div>
            </div>

            <div class="border rounded-lg p-4 hover:shadow-sm transition">
                <img src="https://via.placeholder.com/300x250" alt="" class="rounded mb-4">
                <h3 class="font-medium">Leather Travel Bag</h3>
                <p class="text-sm text-gray-600">Strong & stylish</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="font-semibold">$120</span>
                    <a href="product.html" class="text-sm underline">
                        View
                    </a>
                </div>
            </div>

        </div>
    </section>



</template>