<template>


    <!-- ================= Success Message ================= -->
    <section class="max-w-2xl mx-auto px-4 py-24 text-center">

        <!-- Icon -->
        <div class="mx-auto mb-6 flex items-center justify-center w-16 h-16 rounded-full bg-green-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-green-600" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
        </div>

        <h2 class="text-3xl font-bold mb-3">
            Order Placed Successfully!
        </h2>

        <p class="text-gray-600 mb-6">
            Thank you for your purchase. Your order has been confirmed and is being
            prepared for shipment.
        </p>

        <!-- Order Info -->
        <div class="bg-white border rounded-lg p-6 text-sm text-left mb-8">
            <p class="mb-2"><strong>Order Number:</strong> #JL-2026001</p>
            <p class="mb-2"><strong>Payment Method:</strong> Cash on Delivery</p>
            <p><strong>Estimated Delivery:</strong> 3–5 Business Days</p>
        </div>

        <!-- Actions -->
        <div class="flex justify-center gap-4">
            <a href="shop.html" class="bg-black text-white px-6 py-3 rounded text-sm hover:bg-gray-800">
                Continue Shopping
            </a>

            <a href="index.html" class="border px-6 py-3 rounded text-sm hover:bg-gray-100">
                Go to Home
            </a>
        </div>

    </section>



</template>