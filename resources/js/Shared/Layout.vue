<template>
    <body>
        <header>
            <section
                id="sidenav-1"
                class="fixed left-0 top-0 z-[1035] h-screen w-60 -translate-x-full overflow-hidden bg-[#f5e9cf] shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] dark:bg-zinc-800 xl:data-[te-sidenav-hidden='false']:translate-x-0"
                data-te-sidenav-init
                data-te-sidenav-hidden="false"
                data-te-sidenav-mode-breakpoint-over="0"
                data-te-sidenav-mode-breakpoint-side="xl"
                data-te-sidenav-content="#content"
                data-te-sidenav-accordion="true"
            >
                <a
                    class="mb-3 flex items-center justify-center py-6 outline-none"
                    href="/"
                    data-te-ripple-init
                    data-te-ripple-color="primary"
                >
                    <img
                        id="app-logo"
                        class="mr-2 w-20"
                        src="https://img.freepik.com/premium-vector/retro-gaming-club-vector-badge-emblem-logo-with-joystick-old-game-console-isolated-illustration_258353-865.jpg?w=1380"
                        alt="app-logo"
                        draggable="false"
                    />
                </a>
                <Nav />
            </section>
        </header>
        <div class="relative ml-60 pl-10 pr-10">
            <slot></slot>
        </div>
    </body>
</template>

<script setup>
import Nav from "./Nav.vue";
</script>
