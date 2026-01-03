<template>
    

  <!-- ================= Header ================= -->
  <header class="border-b">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-xl font-semibold">JuteLeather</h1>

      <nav class="space-x-6 text-sm">
        <a href="index.html">Home</a>
        <a href="shop.html">Shop</a>
        <a href="cart.html">Cart</a>
      </nav>
    </div>
  </header>

  <!-- ================= Checkout ================= -->
  <section class="max-w-7xl mx-auto px-4 py-16">
    <h2 class="text-3xl font-bold mb-8">
      Checkout
    </h2>

    <div class="grid lg:grid-cols-3 gap-10">

      <!-- Billing Details -->
      <div class="lg:col-span-2">
        <h3 class="text-xl font-semibold mb-6">
          Billing & Shipping Details
        </h3>

        <form class="space-y-6">

          <div class="grid sm:grid-cols-2 gap-6">
            <input type="text" placeholder="First Name"
                   class="border px-4 py-3 rounded w-full">

            <input type="text" placeholder="Last Name"
                   class="border px-4 py-3 rounded w-full">
          </div>

          <input type="email" placeholder="Email Address"
                 class="border px-4 py-3 rounded w-full">

          <input type="tel" placeholder="Phone Number"
                 class="border px-4 py-3 rounded w-full">

          <input type="text" placeholder="Street Address"
                 class="border px-4 py-3 rounded w-full">

          <div class="grid sm:grid-cols-3 gap-6">
            <input type="text" placeholder="City"
                   class="border px-4 py-3 rounded w-full">

            <input type="text" placeholder="State"
                   class="border px-4 py-3 rounded w-full">

            <input type="text" placeholder="ZIP Code"
                   class="border px-4 py-3 rounded w-full">
          </div>

          <select class="border px-4 py-3 rounded w-full">
            <option>Country</option>
            <option>Bangladesh</option>
            <option>India</option>
            <option>United States</option>
          </select>

          <!-- Payment Method -->
          <div>
            <h4 class="font-medium mb-3">
              Payment Method
            </h4>

            <div class="space-y-2 text-sm">
              <label class="flex items-center gap-2">
                <input type="radio" name="payment" checked>
                Cash on Delivery
              </label>

              <label class="flex items-center gap-2">
                <input type="radio" name="payment">
                Credit / Debit Card
              </label>
            </div>
          </div>

        </form>
      </div>

      <!-- Order Summary -->
      <div class="border rounded-lg p-6 h-fit">
        <h3 class="text-xl font-semibold mb-6">
          Order Summary
        </h3>

        <div class="space-y-3 text-sm">
          <div class="flex justify-between">
            <span>Jute Hand Bag</span>
            <span>$45</span>
          </div>

          <div class="flex justify-between">
            <span>Leather Office Bag</span>
            <span>$85</span>
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

        <button class="w-full bg-black text-white py-3 mt-6 rounded text-sm hover:bg-gray-800">
          Place Order
        </button>
      </div>

    </div>
  </section>



</template>