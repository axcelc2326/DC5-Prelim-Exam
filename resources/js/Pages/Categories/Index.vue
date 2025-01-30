<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
    categories: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <div class="container mx-auto py-3 min-h-screen w-full flex justify-center">
        <div v-if="categories.length === 0">
            <p>No categories found.</p>
        </div>

        <div v-else class="">
            <h1 class="text-4xl font-semibol text-center my-2">Categories</h1>
            <table
                class="table-fixed border border-collapse border-gray-400 w-[60vw]"
            >
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="category in categories" :key="category.id">
                        <td>{{ category.name }}</td>
                        <td>{{ category.description }}</td>
                    </tr>
                </tbody>
            </table>

            <div class="flex justify-center mt-4">
                <Link
                    href="/products"
                    class="text-base hover:text-sky-600 hover:underline duration-100"
                    >Go to Products</Link
                >
            </div>
        </div>
    </div>
</template>
