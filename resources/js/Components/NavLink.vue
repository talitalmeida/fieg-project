<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
});

const classes = computed(() =>
    props.active
        ? 'bg-primary text-white hover:bg-blue-600 w-full flex items-center h-10 pl-4 rounded-xl cursor-pointer'
        : 'text-primary hover:bg-gray-200 w-full flex items-center h-10 pl-4 rounded-xl cursor-pointer'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
