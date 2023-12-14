<template>
    <v-chart :option="option" autoresize />
</template>

<script setup>
import { use } from "echarts/core";
import { CanvasRenderer } from "echarts/renderers";
import { LineChart } from "echarts/charts";
import {
    TitleComponent,
    TooltipComponent,
    LegendComponent,
    GridSimpleComponent,
} from "echarts/components";
import VChart, { THEME_KEY } from "vue-echarts";
import { ref, provide } from "vue";

use([
    GridSimpleComponent,
    CanvasRenderer,
    LineChart,
    TitleComponent,
    TooltipComponent,
    LegendComponent,
]);

provide(THEME_KEY, "light");

const option = ref({
    xAxis: {
        type: "category",
        splitLine: {
            show: false,
        },
        data: ["A", "B", "C", "A", "B", "C", "B", "C"],
    },
    yAxis: {
        type: "value",
        splitLine: {
            show: false,
        },
        axisLabel: {
            inside: true,
            align: 'center',
            showMinLabel: false,
        },
        position: 'right',
        interval: 200,
    },
    series: [
        {
            data: [120, 200, 150, 200, 120, 200, 444, 555],
            type: "line",
            smooth: true,
            showSymbol: false,
        },
    ],
});
</script>
