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
            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-sm transition">
                <div class="relative overflow-hidden rounded-xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1663776376262-1d12c353f789?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Product image"
                        class="w-full h-64 md:h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-all duration-300"></div>
                </div>
                <h3 class="font-medium">Jute Hand Bag</h3>
                <p class="text-sm text-gray-600">Natural jute with leather strap</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="font-semibold">$45</span>
                    <router-link to="/product" class="text-sm underline">
                        View
                    </router-link>
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-sm transition">
                <div class="relative overflow-hidden rounded-xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1663776376262-1d12c353f789?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Product image"
                        class="w-full h-64 md:h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-all duration-300"></div>
                </div>
                <h3 class="font-medium">Jute Hand Bag</h3>
                <p class="text-sm text-gray-600">Natural jute with leather strap</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="font-semibold">$45</span>
                    <router-link to="/product" class="text-sm underline">
                        View
                    </router-link>
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-sm transition">
                <div class="relative overflow-hidden rounded-xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1663776376262-1d12c353f789?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Product image"
                        class="w-full h-64 md:h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-all duration-300"></div>
                </div>
                <h3 class="font-medium">Jute Shoulder Bag</h3>
                <p class="text-sm text-gray-600">Eco-friendly daily use</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="font-semibold">$55</span>
                    <router-link to="/product" class="text-sm underline">
                        View
                    </router-link>
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-sm transition">
                <div class="relative overflow-hidden rounded-xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1663776376262-1d12c353f789?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Product image"
                        class="w-full h-64 md:h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-all duration-300"></div>
                </div>
                <h3 class="font-medium">Leather Travel Bag</h3>
                <p class="text-sm text-gray-600">Strong & stylish</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="font-semibold">$120</span>
                    <router-link to="/product" class="text-sm underline">
                        View
                    </router-link>
                </div>
            </div>

        </div>
    </section>



</template>