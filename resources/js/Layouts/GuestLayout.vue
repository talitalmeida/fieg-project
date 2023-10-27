<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="bg-login min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div
            class="w-full sm:max-w-md mt-6  bg-white shadow-md overflow-hidden sm:rounded-lg box-form-login"
        >
            <div class="flex justify-center">
                <Link href="/">
                    <ApplicationLogo class="fill-current text-gray-500 " />
                </Link>
            </div>
            <slot />
        </div>
    </div>
</template>

<style scoped>
.box-form-login{
    padding: 50px 100px;
    max-width: 781px;
    max-height: 606px;
    flex-shrink: 0;
    border-radius: 20px;
    border: 1px solid rgba(69, 90, 100, 0.10);
    background: #EBF0F9;
    box-shadow: 0px 15px 100px 0px rgba(0, 0, 0, 0.12);
}

.bg-login{
    background-image: url("assets/images/bg-item.svg");
}
</style>
