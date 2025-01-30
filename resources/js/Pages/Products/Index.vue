<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    products: {
        type: Array,
        required: true,
    },
    categories: {
        type: Array,
        required: true,
    },
    selectedCategory: {
        type: String,
        required: false,
    },
});
</script>

<template>
    <div class="flex">
        <div class="w-[20%] shadow-lg px-2 pt-3 min-h-screen">
            <nav class="flex flex-col gap-5">
                <h1 class="text-center text-2xl font-semibold">Categories</h1>
                <ul v-for="category in categories" :key="category.id">
                    <li
                        class="p-2 hover:bg-gray-300 rounded-r-lg duration-100 cursor-pointer"
                    >
                        <Link :href="'/products/' + category.id">{{
                            category.name
                        }}</Link>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="w-3/4 p-5">
            <h1 class="text-4xl font-semibold text-center">
                {{ selectedCategory ? selectedCategory.name : "All Products" }}
            </h1>
            <ul>
                <li v-for="product in products" :key="product.id">
                    {{ product.name }}
                </li>
            </ul>
        </div>
    </div>
</template>
