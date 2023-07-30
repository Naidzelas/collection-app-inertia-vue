<template setup>
    <h1
        class="text-[#33052c] w-auto text-center text-4xl font-bold mt-12 mb-10"
    >
        <slot>Test</slot>
    </h1>
    <div class="grid gap-2 place-content-center">
        <div class="w-96 text-center">
            <form @submit.prevent="submit">
                <input
                    class="mb-2 file:border file:border-solid file:bg-[#33052c] file:text-[#f5e9cf] border-dotted block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="user_avatar_help"
                    id="game_image"
                    type="file"
                />
                <h2>Game Name</h2>
                <input
                    v-model="form.name"
                    class="w-full bg-slate-100 mt-1 mb-2"
                    id="name"
                    placeholder="Game"
                />
                <h2>Game Price</h2>
                <input
                    v-model="form.price"
                    id="price"
                    class="w-full bg-slate-100 mt-1 mb-2"
                    placeholder="Price"
                />
                <h2>Condition</h2>
                <div class="grid grid-rows-1 grid-flow-col gap-1 mt-1">
                    <div
                        class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700"
                    >
                        <input
                            v-model="picked"
                            id="condition_1"
                            type="radio"
                            value="1"
                            name="bordered-radio"
                            class="text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        />
                        <label
                            for="condition_1"
                            class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                            >Bad</label
                        >
                    </div>
                    <div
                        class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700"
                    >
                        <input
                            v-model="picked"
                            id="condition_2"
                            type="radio"
                            value="2"
                            name="bordered-radio"
                            class="text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        />
                        <label
                            for="condition_2"
                            class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                            >Medium</label
                        >
                    </div>
                    <div
                        class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700"
                    >
                        <input
                            v-model="picked"
                            id="condition_3"
                            type="radio"
                            value="3"
                            name="bordered-radio"
                            class="text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        />
                        <label
                            for="condition_3"
                            class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                            >Good</label
                        >
                    </div>
                </div>
                <button
                    class="shadow-md w-full h-10 mb-2 mt-6 bg-[#fcf4e5] hover:bg-[#33052c] hover:text-[#f5e9cf]"
                    type="submit"
                    :disabled="form.processing"
                >
                    Submit
                </button>
            </form>
            {{ picked }}
        </div>
    </div>
</template>
<script setup>
import { useForm } from "@inertiajs/vue3";
import { ref, reactive } from "vue";

let picked = ref(2);
let condition = reactive({picked});

const form = useForm({
    name: "",
    price: 0,
    condition: condition.picked,
});

let submit = () => {
    form.put("/category/sega/store", [form]);
};
</script>
