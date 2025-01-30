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
    <div class="flex bg-white min-h-screen text-black">
        <!-- Sidebar -->
        <div class="w-[20%] bg-gray-400 shadow-lg px-4 pt-5 min-h-screen">
            <nav class="flex flex-col gap-5">
                <h1 class="text-center text-2xl font-semibold">Categories</h1>
                <ul>
                    <li v-for="category in categories" :key="category.id" class="p-2 hover:bg-gray-300 rounded-r-lg duration-200 cursor-pointer">
                        <Link :href="'/products/' + category.id" class="text-black">{{ category.name }}</Link>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="w-3/4 p-5">
            <h1 class="text-4xl font-semibold text-center mb-5">
                {{ selectedCategory ? selectedCategory.name : "All Products" }}
            </h1>
            <div class="overflow-x-auto">
                <table class="w-full border border-gray-500">
                    <thead>
                        <tr class="bg-gray-300 text-black">
                            <th class="p-3 border border-gray-500">ID</th>
                            <th class="p-3 border border-gray-500">Name</th>
                            <th class="p-3 border border-gray-500">Whole Sale Price</th>
                            <th class="p-3 border border-gray-500">Retail Sale Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="product in products" :key="product.id" class="hover:bg-gray-200">
                            <td class="p-3 border border-gray-500 text-center">{{ product.id }}</td>
                            <td class="p-3 border border-gray-500 text-center">{{ product.name }}</td>
                            <td class="p-3 border border-gray-500 text-center">${{ product.whole_sale_price }}</td>
                            <td class="p-3 border border-gray-500 text-center">${{ product.retail_price }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
