<template>
    <!-- ================= Product Details ================= -->
    <section class="max-w-7xl mx-auto px-4 py-16">
        <button variant="default" class="self-start mb-0 rounded text-white  bg-red-400 hover:bg-red-300 shadow-sm"
            @click="backToPrevious">
            <svg class="w-10 h-10">
                <use href="#back-icon" />
            </svg>
        </button>
        <div class="grid md:grid-cols-2 gap-12">

            <!-- Product Images -->
            <div class="space-y-6">
                <div class="relative overflow-hidden rounded-xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1663776376262-1d12c353f789?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Product image"
                        class="w-full h-64 md:h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-all duration-300"></div>
                </div>
                <div class="grid grid-cols-3 gap-4">

                    <div class="relative overflow-hidden rounded-xl shadow-lg group">
                        <img src="https://images.pexels.com/photos/3403861/pexels-photo-3403861.jpeg"
                            alt="Product image"
                            class="w-full h-64 md:h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-all duration-300">
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-xl shadow-lg group">
                        <img src="https://images.pexels.com/photos/2766334/pexels-photo-2766334.jpeg"
                            alt="Product image"
                            class="w-full h-64 md:h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-all duration-300">
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-xl shadow-lg group">
                        <img src="https://images.unsplash.com/photo-1663776376262-1d12c353f789?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Product image"
                            class="w-full h-64 md:h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-all duration-300">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Info -->
            <div>
                <h2 class="text-3xl font-bold mb-4">
                    Jute Hand Bag
                </h2>

                <p class="text-xl font-semibold mb-4">
                    $45
                </p>

                <p class="text-gray-600 mb-6">
                    This jute hand bag is crafted from natural jute fiber and finished
                    with premium leather handles. Designed for daily use, it offers
                    durability, comfort, and an elegant eco-friendly style.
                </p>

                <!-- Product Details -->
                <ul class="space-y-2 text-sm mb-6">
                    <li><strong>Material:</strong> Natural Jute & Premium Leather</li>
                    <li><strong>Size:</strong> Medium</li>
                    <li><strong>Color:</strong> Natural Brown</li>
                    <li><strong>Usage:</strong> Daily, Office, Casual</li>
                </ul>

                <!-- Quantity -->
                <div class="flex items-center gap-4 mb-6">
                    <label class="text-sm">Quantity</label>
                    <input type="number" value="1" min="1" class="w-20 border px-3 py-2 rounded">
                </div>

                <!-- Buttons -->
                <div class="flex gap-4">
                    <button class="bg-black text-white px-6 py-3 rounded text-sm hover:bg-gray-800">
                        Add to Cart
                    </button>

                    <button class="border px-6 py-3 rounded text-sm hover:bg-gray-100">
                        Buy Now
                    </button>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= Additional Info ================= -->
    <section class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4">
            <h3 class="text-xl font-semibold mb-4">
                Product Care
            </h3>
            <p class="text-sm text-gray-600">
                Keep the bag away from excessive moisture. Clean jute gently with a
                dry cloth. Use leather conditioner occasionally to maintain the
                leather quality.
            </p>
        </div>
    </section>
</template>

<script lang="ts" setup>
let backToPrevious = () => {
    window.history.back();
};
</script>