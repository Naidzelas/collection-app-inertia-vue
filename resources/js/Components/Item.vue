<template>
    <div class="relative border rounded-lg w-60 h-60 text-center bg-[#120928]">
        <Link :href="'category/'+name">
            <img
                class="p-3"
                src="https://img.freepik.com/premium-photo/retro-arcade-machine-gaming-illustration_691560-5691.jpg?w=1380"
            />
        </Link>
        <slot></slot>
    </div>
</template>
<script setup>
defineProps({
    name: String,
});
</script>
