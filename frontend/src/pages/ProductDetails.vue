<template>


    <!-- ================= Product Details ================= -->
    <section class="max-w-7xl mx-auto px-4 py-16">
        <div class="grid md:grid-cols-2 gap-12">

            <!-- Product Images -->
            <div>
                <img src="https://via.placeholder.com/600x500" alt="Jute Hand Bag" class="rounded-lg mb-4">

                <div class="grid grid-cols-3 gap-4">
                    <img src="https://via.placeholder.com/200x150" class="rounded border">
                    <img src="https://via.placeholder.com/200x150" class="rounded border">
                    <img src="https://via.placeholder.com/200x150" class="rounded border">
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
        <div class="max-w-4xl mx-auto px-4">
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