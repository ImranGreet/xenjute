<template>


  <!-- ================= Cart Section ================= -->
  <section class="max-w-7xl mx-auto px-4 py-16">
    <h2 class="text-3xl font-bold mb-8">
      Shopping Cart
    </h2>

    <div class="grid lg:grid-cols-3 gap-10">

      <!-- Cart Items -->
      <div class="lg:col-span-2 space-y-6">

        <!-- Cart Item -->
        <div class="flex gap-6 border border-gray-200 rounded-lg p-4">
          <img
            src="https://images.unsplash.com/photo-1615485737442-7d6ab9f64db9?q=80&w=735&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Jute Hand Bag" class="rounded w-20 h-20">

          <div class="flex-1">
            <h3 class="font-medium">Jute Hand Bag</h3>
            <p class="text-sm text-gray-600">
              Natural jute with leather handle
            </p>

            <div class="flex items-center justify-between mt-4">
              <div class="flex items-center gap-2">
                <label class="text-sm">Qty</label>
                <input type="number" value="1" min="1" class="w-20 border px-3 py-1 rounded">
              </div>

              <span class="font-semibold">$45</span>
            </div>
          </div>

          <button class="text-sm text-red-500 hover:underline">
            Remove
          </button>
        </div>

        <!-- Cart Item -->
        <div class="flex gap-6 border border-gray-200 rounded-lg p-4">
          <img
            src="https://images.unsplash.com/photo-1615485737442-7d6ab9f64db9?q=80&w=735&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Leather Office Bag" class="rounded w-20 h-20">

          <div class="flex-1">
            <h3 class="font-medium">Leather Office Bag</h3>
            <p class="text-sm text-gray-600">
              Premium leather finish
            </p>

            <div class="flex items-center justify-between mt-4">
              <div class="flex items-center gap-2">
                <label class="text-sm">Qty</label>
                <input type="number" value="1" min="1" class="w-20 border px-3 py-1 rounded">
              </div>

              <span class="font-semibold">$85</span>
            </div>
          </div>

          <button class="text-sm text-red-500 hover:underline">
            Remove
          </button>
        </div>

      </div>

      <!-- Order Summary -->
      <div class="border border-gray-200 rounded-lg p-6 h-fit">
        <h3 class="text-xl font-semibold mb-6">
          Order Summary
        </h3>

        <div class="space-y-3 text-sm">
          <div class="flex justify-between">
            <span>Subtotal</span>
            <span>$130</span>
          </div>

          <div class="flex justify-between">
            <span>Shipping</span>
            <span>$10</span>
          </div>

          <div class="border-t pt-3 flex justify-between font-semibold">
            <span>Total</span>
            <span>$140</span>
          </div>
        </div>

        <router-link to="/checkout"
          class="block text-center bg-black text-white py-3 mt-6 rounded text-sm hover:bg-gray-800">
          Proceed to Checkout
        </router-link>
      </div>

    </div>
  </section>



</template>