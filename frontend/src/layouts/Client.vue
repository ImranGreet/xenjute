<script setup lang="ts">
import Footer from '../components/global/Footer.vue';
import Header from '../components/global/Header.vue';

</script>

<template>
    <div class="w-full min-h-screen flex flex-col justify-between">
        <Header />
        <div class="flex-1">
            <router-view />
        </div>
        <Footer />
    </div>
</template>