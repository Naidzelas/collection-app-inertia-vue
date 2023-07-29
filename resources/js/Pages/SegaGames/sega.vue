<template>
    <categoryLayout :data="data"></categoryLayout>
</template>

<script setup>
import categoryLayout from "../../Shared/CategoryLayout.vue";
defineOptions({
    categoryLayout: categoryLayout,
});

let props = defineProps({
    data: Object,
    filters: Object,
});
</script>
