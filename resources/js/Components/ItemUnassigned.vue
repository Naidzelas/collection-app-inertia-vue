<template>
    <div
        id="show-modal"
        @click="showModal = true"
        class="relative border rounded-lg w-60 h-60 text-center bg-[#f5e9cf]"
    >
        <img
            class="p-20"
            src="https://cdn-icons-png.flaticon.com/512/37/37770.png?w=900&t=st=1689112628~exp=1689113228~hmac=ed4c9ce392ba76a8b7a033b97ea8e3b1ee4a307e986778b964df3a373d3f9e30"
        />
        CREATE NEW CATEGORY
    </div>

    <Teleport to="body">
        <!-- use the modal component, pass in the prop -->
        <CategoryModal :default_categories="default_categories" :show="showModal" @close="showModal = false">
            <template #header>
                <h3>CREATE NEW CATEGORY</h3>
            </template>
        </CategoryModal>
    </Teleport>
</template>
<script setup>
import CategoryModal from "./Modals/CategoryModal.vue";
import { ref } from "vue";

defineProps({
    default_categories: Object,
})

const showModal = ref(false);
</script>
