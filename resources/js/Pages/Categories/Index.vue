<script setup>
import { Link } from "@inertiajs/vue3";
import MainLayout from "../MainLayout.vue";
defineProps({
    products: {
        type: Array,
        required: false,
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
    <MainLayout>
        <div class="flex bg-white min-h-screen text-black justify-center items-center">
            <div class="w-3/4 p-5 flex flex-col justify-center items-center">
                <h1 class="text-4xl font-semibold text-center mb-5">
                    {{ selectedCategory ? selectedCategory.name : "All Categories" }}
                </h1>
                <div v-if="categories.length === 0" class="text-center text-lg">
                    <p>No categories found.</p>
                </div>
                <div v-else class="overflow-x-auto w-full flex justify-center">
                    <table class="w-3/4 border border-gray-500 text-center">
                        <thead>
                            <tr class="bg-gray-300 text-black">
                                <th class="p-3 border border-gray-500">Name</th>
                                <th class="p-3 border border-gray-500">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="category in categories" :key="category.id" class="hover:bg-gray-200">
                                <td class="p-3 border border-gray-500">{{ category.name }}</td>
                                <td class="p-3 border border-gray-500">{{ category.description }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
    </MainLayout>

</template>
