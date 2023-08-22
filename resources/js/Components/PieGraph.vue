<template>
    <v-chart class="h-96 w-96 p-3" :option="option" autoresize />
</template>

<script setup>
import { use } from "echarts/core";
import { CanvasRenderer } from "echarts/renderers";
import { PieChart } from "echarts/charts";
import {
    TitleComponent,
    TooltipComponent,
    LegendComponent,
} from "echarts/components";
import VChart, { THEME_KEY } from "vue-echarts";
import { ref, provide } from "vue";

use([
    CanvasRenderer,
    PieChart,
    TitleComponent,
    TooltipComponent,
    LegendComponent,
]);

provide(THEME_KEY, "light");

const option = ref({
    title: {
        text: "Collection",
        left: 20,
        textStyle: {
            color: "#33052c",
        },
    },
    tooltip: {
        trigger: "item",
        formatter: "{a} <br/>{b} : {c} ({d}%)",
    },
    legend: {
        orient: "horizontal",
        bottom: "left",
        data: [
            {
                name: "Sega Megadrive",
            },
            {
                name: "Playstation",
            },
            {
                name: "Playstation 2",
            },
            {
                name: "NES",
            },
            {
                name: "PSP",
            },
        ],
    },
    series: [
        {
            name: "Collection",
            type: "pie",
            label: {
                show: false,
            },
            radius: "60%",
            center: ["50%", "45%"],
            data: [
                { value: 335, name: "Sega Megadrive" },
                { value: 322, name: "Playstation" },
                { value: 234, name: "Playstation 2" },
                { value: 135, name: "NES" },
                { value: 123, name: "PSP" },
            ],
            emphasis: {
                itemStyle: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: "rgba(0, 0, 0, 0.5)",
                },
            },
        },
    ],
});
</script>
