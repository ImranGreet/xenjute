<template>


  <!-- ================= Page Title ================= -->
  <section class="bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 py-14 text-center">
      <h2 class="text-3xl font-bold mb-3">
        Contact Us
      </h2>
      <p class="text-gray-600">
        We’d love to hear from you
      </p>
    </div>
  </section>

  <!-- ================= Contact Section ================= -->
  <section class="max-w-7xl mx-auto px-4 py-16">
    <div class="grid md:grid-cols-2 gap-12">

      <!-- Contact Info -->
      <div>
        <h3 class="text-xl font-semibold mb-6">
          Get in Touch
        </h3>

        <p class="text-gray-600 mb-6">
          Have questions about our bags, orders, or delivery?
          Feel free to contact us using the details below or
          send us a message through the form.
        </p>

        <div class="space-y-4 text-sm">
          <p><strong>Email:</strong> support@juteleather.com</p>
          <p><strong>Phone:</strong> +880 1234 567890</p>
          <p><strong>Address:</strong> Dhaka, Bangladesh</p>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="border border-gray-200 rounded-lg p-6">
        <form class="space-y-5">

          <input type="text"
                 placeholder="Your Name"
                 class="border border-gray-200 px-4 py-3 rounded w-full">

          <input type="email"
                 placeholder="Your Email"
                 class="border border-gray-200 px-4 py-3 rounded w-full">

          <textarea rows="5"
                    placeholder="Your Message"
                    class="border border-gray-200 px-4 py-3 rounded w-full"></textarea>

          <button class="bg-black text-white px-6 py-3 rounded text-sm hover:bg-gray-800">
            Send Message
          </button>

        </form>
      </div>

    </div>
  </section>



</template>