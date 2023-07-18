<template>
    <Transition name="modal">
        <div v-if="show">
            <div class="w-80 m-auto bg-[#fff] border-2 bg-opacity-25">
                <div class="text-[#42b983] mt-0">
                    <slot name="header"></slot>
                </div>

                <div class="mt-2">
                    <slot
                        v-for="default_category in default_categories"
                        name="body"
                    >
                        {{ default_category.name }}
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
});
</script>
