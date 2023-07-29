<template>
    <h1
        class="text-[#33052c] w-auto text-center text-4xl font-bold mt-12 mb-10"
    >
        <slot>Test</slot>
    </h1>
    <div>
        <input
            v-model="search"
            type="text"
            placeholder="search"
            class="border-none mb-2 shadow-md"
        />
        <Link
            class="float-right shadow-md w-20 h-10 mb-2 bg-[#fcf4e5] hover:bg-[#33052c] hover:text-[#f5e9cf]"
            as="button"
            href="/"
        >
            New
        </Link>
    </div>
    <div>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light">
                            <thead
                                class="border-b font-medium dark:border-neutral-500"
                            >
                                <tr>
                                    <th scope="col" class="px-6 py-4">#</th>
                                    <th scope="col" class="px-6 py-4"></th>
                                    <th scope="col" class="px-6 py-4">Name</th>
                                    <th scope="col" class="px-6 py-4">Price</th>
                                    <th scope="col" class="px-6 py-4">
                                        Condition
                                    </th>
                                    <th scope="col" class="px-6 py-4">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="row in data.data" :key="row.id" class="border-b dark:border-neutral-500">
                                    <td
                                        class="whitespace-nowrap px-6 py-4 font-medium"
                                    >{{ row.id }}</td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 font-medium"
                                    ></td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 font-medium"
                                    >{{ row.name }}</td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 font-medium"
                                    >{{ row.price }}</td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 font-medium"
                                    ></td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 font-medium"
                                    ></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-6">
        <template v-for="categoryLink in data.links">
            <Link class="mr-1 ml-1" v-if="categoryLink.url" :href="categoryLink.url" v-html="categoryLink.label" />
            <span v-else v-html="categoryLink.label"></span>
        </template>
    </div>
    <!-- <ul>
        <li v-for="row in data.data" :key="row.id" v-text="row.name" />
    </ul> -->
</template>
<script setup>
import { ref, watch } from "vue";
import { router } from "@inertiajs/vue3";

let props = defineProps({
    filters: Object,
    data: Object,
});

let search = ref('');
// console.log(search);
watch(search, (value) => {
    console.log(search);
    router.get(
        "/category/sega",
        { search: value },
        { preserveState: true, replace: true }
    );
});
</script>
