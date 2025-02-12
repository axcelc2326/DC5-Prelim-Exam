<script setup>
import { Link } from "@inertiajs/vue3";
</script>



<template>
    <div class="flex flex-col h-screen">

    <nav class="bg-gray-800 text-white p-4 flex justify-between items-center">
    <div class="text-large">Sy[n]ex Store</div>

    <ul class="flex space-x-4">
        <li><Link href="/" class="hover:text-gray-400">Home</Link></li>
        <li><Link href="/categories" class="hover:text-gray-400">Categories</Link></li>
        <li><Link href="/products" class="hover:text-gray-400">Products</Link></li>
    </ul>
    </nav>

    <slot />
</div>
</template>
