<template>
    <Transition name="modal">
        <div v-if="show">
            <div class="w-max h-max m-auto bg-[#fff] border-2 bg-opacity-25">
                <div class="text-[#42b983] mt-0">
                    <slot name="header"></slot>
                </div>

                <div class="mt-2 grid grid-cols-4 gap-2">
                    <slot
                        name="body"
                        v-for="default_category in default_categories"
                    >
                        <Link
                            :default_category_id="default_category.id"
                            as="button"
                            method="GET"
                            class="border w-20 h-20"
                            @click="handleClick(default_category.id); $emit('close');"
                        >
                            {{ default_category.name }}
                        </Link>
                    </slot>
                </div>
            </div>
        </div>
    </Transition>
</template>
<script setup>
import { router } from "@inertiajs/vue3";
const props = defineProps({
    show: Boolean,
    default_categories: Object,
    value: Object,
});

function handleClick(value) {
    router.get("category/create", {default_category_id: value});
}
</script>
