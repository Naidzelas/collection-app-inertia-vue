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
                        ><div class="border w-20 h-20">
                            {{ default_category.name }}
                        </div>
                    </slot>
                </div>

                <div class="modal-footer">
                    <slot name="footer">
                        <button class="float-right" @click="$emit('close')">
                            CREATE
                        </button>
                    </slot>
                </div>
            </div>
        </div>
    </Transition>
</template>
<script setup>
const props = defineProps({
    show: Boolean,
    default_categories: Object,
});

</script>
