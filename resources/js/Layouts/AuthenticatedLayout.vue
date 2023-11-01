<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import {Head, Link} from '@inertiajs/vue3';
import Navbar from "@/Components/AuthNavBar.vue";
import Sidebar from "@/Components/Sidebar.vue";


</script>

<template>
    <div>
        <div class="min-h-screen  dark:bg-gray-900 bg-back">
            <Navbar/>
            <Sidebar/>
            <main class="relative left-[256px] w-[calc(100%-256px)] px-20 py-10">
                <slot />
            </main>
        </div>
    </div>
</template>
