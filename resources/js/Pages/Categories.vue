<template>
    <h1
        class="text-[#33052c] w-auto text-center text-4xl font-bold mt-12 mb-10"
    >
        Categories
    </h1>
    <div class="grid grid-cols-3 gap-2 ">
        <div class="mb-8" v-for="category in categories">
            <div v-if="category.id">
                <Item :name="category.default_category.name">
                {{
                    category.default_category.name
                }}</Item>
            </div>
        </div>
        <div>
            <ItemUnassigned
                :default_categories="default_categories"
            ></ItemUnassigned>
        </div>
    </div>
</template>
<script setup>
import ItemUnassigned from "../Components/ItemUnassigned.vue";
import Item from "../Components/Item.vue";
defineProps({
    default_categories: Object,
    categories: Object,
});
</script>
