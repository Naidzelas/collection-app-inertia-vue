<template>
    <head title="Create new game" />
    <h1 class="text 3xl">Create new game</h1>
    <div class="w-full max-w-xs">
        <form @submit.prevent="submit" class="w-full max-w-sm">
            <div class="flex items-center border-b border-teal-500 py-2">
                <input
                    v-model="form.name"
                    class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                    type="text"
                    id="name"
                    placeholder="Dick fart"
                    aria-label="Full name"
                />
                <button
                    class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"
                    type="submit"
                    :disabled="form.processing"
                >
                    Add
                </button>
            </div>
            <div
                v-if="form.errors.name"
                v-text="form.errors.name"
                class="text-red-500 text-xs mt-1"
            ></div>
        </form>
    </div>
</template>
<script setup>
import { useForm } from "@inertiajs/vue3";

let form = useForm({
    name: '',
});

let submit = () => {
    form.post("/sega"); 
};
</script>
