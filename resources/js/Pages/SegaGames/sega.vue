<template>
    <h1 class="text-3xl font-bold">Sega</h1>

    <div class="flex justify-between mb-6">
        <h1 class="text 3xl">Games</h1>
        <input
            v-model="search"
            type="text"
            placeholder="search"
            class="border px-2 rounded-lg"
        />
        <Link class="border w-200 px-5 rounded-lg text-center" href="/sega/add"
            >new</Link
        >
    </div>

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
                                <th scope="col" class="px-6 py-4">Name</th>
                                <th scope="col" class="px-6 py-4">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="border-b dark:border-neutral-500"
                                v-for="row in sega.data"
                                :key="row.id"
                            >
                                <td
                                    class="whitespace-nowrap px-6 py-4 font-medium"
                                >
                                    {{ row.id }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    {{ row.name }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    {{ row.price }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-6">
        <template v-for="link in sega.links">
            <Link v-if="link.url" :href="link.url" v-html="link.label" />
            <span v-else v-html="link.label"></span>
        </template>
    </div>

    <!-- <ul>
        <li v-for="row in sega" :key="row.id" v-text="row.name" />
    </ul> -->
</template>

<script setup>
import { ref, watch } from "vue";
import { router } from "@inertiajs/vue3";
// import { throttle } from 'loadash';

let props = defineProps({
    sega: Object,
    filters: Object,
});

let search = ref(props.filters.search);
watch(search, (value) => {
    router.get(
        "/sega",
        { search: value },
        { preserveState: true, replace: true }
    );
});
</script>
