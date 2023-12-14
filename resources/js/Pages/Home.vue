<template>
    <h1
        class="text-[#33052c] w-auto text-center text-4xl font-bold mt-12 mb-10"
    >
        Home
    </h1>
    <div class="grid grid-flow-row-dense grid-cols-4 grid-rows-1 gap-4">
        <div
            class="col-span-4 row-span-1 border rounded-tr-[50px] rounded-tl-[50px] rounded-lg"
        >
            <LineGraph class="h-96 w-full"></LineGraph>
        </div>

        <div class="rounded-lg rounded-bl-[50px] col-span-1 border h-64">
            <LineGraph></LineGraph>
        </div>
        <div class="rounded-lg col-span-1 border h-64">
            <LineGraph></LineGraph>
        </div>
        <div class="rounded-lg col-span-1 border h-64">
            <LineGraph></LineGraph>
        </div>
        <div class="rounded-br-[50px] rounded-lg col-span-1 border h-64">
            <LineGraph></LineGraph>
        </div>
    </div>
    <div class="grid grid-rows-2 grid-flow-col gap-4 mt-4">
        <div class="row-span-5 rounded-tl-[50px] rounded-tr-lg h-max border">
            <h3 class="text-[#33052c] text-3xl ml-16 mt-4 mb-4">
                My Collection
            </h3>
            <table class="table-fixed w-full border">
                <thead>
                    <tr class="bg-[#F5E9D0] rounded-br-lg rounded-bl-lg">
                        <th>Name</th>
                        <th class="hover:bg-[#33052c] hover:text-[#F5E9D0]">
                            Price
                        </th>
                        <th class="hover:bg-[#33052c] hover:text-[#F5E9D0]">
                            Movement
                        </th>
                        <th>Condition</th>
                        <th>Platform</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50 border">
                        <td class="text-center">Dragon Sisters</td>
                        <td class="text-center">90</td>
                        <td class="text-center">32%</td>
                        <td class="text-center">90/100</td>
                        <td class="text-center">Playstation 2</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-span-1 border rounded-tr-[50px] rounded-lg">
            <PieGraph></PieGraph>
        </div>
        <div class="col-span-1 border">Added this month</div>
    </div>
</template>
<script setup>
import PieGraph from "../Components/PieGraph.vue";
import LineGraph from "../Components/LineGraph.vue";
</script>
