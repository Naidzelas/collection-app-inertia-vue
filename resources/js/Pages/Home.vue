<template>
    <h1
        class="text-[#33052c] w-auto text-center text-4xl font-bold mt-12 mb-10"
    >
        Categories
    </h1>
    <div class="grid grid-cols-3 gap-4">
        <Item></Item>
    </div>
</template>
<script setup>
import Item from "../Components/ItemUnassigned.vue";
// import { router } from "@inertiajs/vue3";

// defineProps({
//     default_categories: Object,
// });

// router.get("/category");
</script>
